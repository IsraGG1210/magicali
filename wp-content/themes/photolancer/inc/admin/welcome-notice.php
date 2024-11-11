<?php

/**
 * file for holding dashboard welcome page for theme
 */
if (!function_exists('photolancer_is_plugin_installed')) {
    function photolancer_is_plugin_installed($plugin_slug)
    {
        $plugin_path = WP_PLUGIN_DIR . '/' . $plugin_slug;
        return file_exists($plugin_path);
    }
}
if (!function_exists('photolancer_is_plugin_activated')) {
    function photolancer_is_plugin_activated($plugin_slug)
    {
        return is_plugin_active($plugin_slug);
    }
}
if (!function_exists('photolancer_welcome_notice')) :
    function photolancer_welcome_notice()
    {
        if (get_option('photolancer_dismissed_custom_notice')) {
            return;
        }
        global $pagenow;
        $current_screen  = get_current_screen();

        if (is_admin()) {
            if ($current_screen->id !== 'dashboard' && $current_screen->id !== 'themes') {
                return;
            }
            if (is_network_admin()) {
                return;
            }
            if (!current_user_can('manage_options')) {
                return;
            }
            $theme = wp_get_theme();

            if (is_child_theme()) {
                $theme = wp_get_theme()->parent();
            }
            $photolancer_version = $theme->get('Version');


?>
            <div class="photolancer-admin-notice notice notice-info is-dismissible content-install-plugin theme-info-notice" id="photolancer-dismiss-notice">
                <div class="info-content">
                    <div class="notice-holder">
                        <h5><span class="theme-name"><span><?php echo __('Welcome to Photolancer', 'photolancer'); ?></span></h5>
                        <h2><?php echo __('Start building your website with the most advanced WordPress theme ever! 🚀 ', 'photolancer'); ?></h2>
                        </h3>
                        <div class="notice-text">
                            <p><?php echo __('Please install and activate all recommended plugins to use 40+ advanced blocks, 200+ pre-built sections, and 10+ additional starter site demos. Enhance website building and launch your site within minutes with just a few clicks! - Cozy Addons, Cozy Essential Addons, Advanced Import.', 'photolancer') ?></p>
                        </div>
                        <a href="#" id="install-activate-button" class="button admin-button info-button"><?php echo __('Getting started with a single click', 'photolancer'); ?></a>
                        <a href="<?php echo admin_url(); ?>themes.php?page=about-photolancer" class="button admin-button info-button"><?php echo __('Explore Photolancer', 'photolancer'); ?></a>

                    </div>
                </div>
                <div class="theme-hero-screens">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/inc/admin/images/theme_screen_img.png'); ?>" />
                </div>

            </div>
    <?php
        }
    }
endif;
add_action('admin_notices', 'photolancer_welcome_notice');
function photolancer_dismissble_notice()
{
    if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'photolancer_admin_nonce')) {
        wp_send_json_error(array('message' => 'Nonce verification failed.'));
        return;
    }

    $result = update_option('photolancer_dismissed_custom_notice', 1);

    if ($result) {
        wp_send_json_success();
    } else {
        wp_send_json_error(array('message' => 'Failed to update option'));
    }
}
add_action('wp_ajax_photolancer_dismissble_notice', 'photolancer_dismissble_notice');
// Hook into a custom action when the button is clicked
add_action('wp_ajax_photolancer_install_and_activate_plugins', 'photolancer_install_and_activate_plugins');
add_action('wp_ajax_nopriv_photolancer_install_and_activate_plugins', 'photolancer_install_and_activate_plugins');
add_action('wp_ajax_photolancer_rplugin_activation', 'photolancer_rplugin_activation');
add_action('wp_ajax_nopriv_photolancer_rplugin_activation', 'photolancer_rplugin_activation');

// Function to install and activate the plugins



function check_plugin_installed_status($pugin_slug, $plugin_file)
{
    return file_exists(ABSPATH . 'wp-content/plugins/' . $pugin_slug . '/' . $plugin_file) ? true : false;
}

/* Check if plugin is activated */


function check_plugin_active_status($pugin_slug, $plugin_file)
{
    return is_plugin_active($pugin_slug . '/' . $plugin_file) ? true : false;
}

require_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
require_once(ABSPATH . 'wp-admin/includes/file.php');
require_once(ABSPATH . 'wp-admin/includes/misc.php');
require_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');
function photolancer_install_and_activate_plugins()
{
    if (!current_user_can('manage_options')) {
        return;
    }
    check_ajax_referer('photolancer_welcome_nonce', 'nonce');
    // Define the plugins to be installed and activated
    $recommended_plugins = array(
        array(
            'slug' => 'cozy-addons',
            'file' => 'cozy-addons.php',
            'name' => __('Cozy Blocks', 'photolancer'),
        ),
        array(
            'slug' => 'advanced-import',
            'file' => 'advanced-import.php',
            'name' => __('Advanced Imporrt', 'photolancer'),
        ),
        array(
            'slug' => 'cozy-essential-addons',
            'file' => 'cozy-essential-addons.php',
            'name' => __('Cozy Essential Addons', 'photolancer'),
        ),
        // Add more plugins here as needed
    );

    // Include the necessary WordPress functions


    // Set up a transient to store the installation progress
    set_transient('install_and_activate_progress', array(), MINUTE_IN_SECONDS * 10);

    // Loop through each plugin
    foreach ($recommended_plugins as $plugin) {
        $plugin_slug = $plugin['slug'];
        $plugin_file = $plugin['file'];
        $plugin_name = $plugin['name'];

        // Check if the plugin is active
        if (is_plugin_active($plugin_slug . '/' . $plugin_file)) {
            update_install_and_activate_progress($plugin_name, 'Already Active');
            continue; // Skip to the next plugin
        }

        // Check if the plugin is installed but not active
        if (is_photolancer_plugin_installed($plugin_slug . '/' . $plugin_file)) {
            $activate = activate_plugin($plugin_slug . '/' . $plugin_file);
            if (is_wp_error($activate)) {
                update_install_and_activate_progress($plugin_name, 'Error');
                continue; // Skip to the next plugin
            }
            update_install_and_activate_progress($plugin_name, 'Activated');
            continue; // Skip to the next plugin
        }

        // Plugin is not installed or activated, proceed with installation
        update_install_and_activate_progress($plugin_name, 'Installing');

        // Fetch plugin information
        $api = plugins_api('plugin_information', array(
            'slug' => $plugin_slug,
            'fields' => array('sections' => false),
        ));

        // Check if plugin information is fetched successfully
        if (is_wp_error($api)) {
            update_install_and_activate_progress($plugin_name, 'Error');
            continue; // Skip to the next plugin
        }

        // Set up the plugin upgrader
        $upgrader = new Plugin_Upgrader();
        $install = $upgrader->install($api->download_link);

        // Check if installation is successful
        if ($install) {
            // Activate the plugin
            $activate = activate_plugin($plugin_slug . '/' . $plugin_file);

            // Check if activation is successful
            if (is_wp_error($activate)) {
                update_install_and_activate_progress($plugin_name, 'Error');
                continue; // Skip to the next plugin
            }
            update_install_and_activate_progress($plugin_name, 'Activated');
        } else {
            update_install_and_activate_progress($plugin_name, 'Error');
        }
    }

    // Delete the progress transient
    $redirect_url = admin_url('themes.php?page=advanced-import');

    // Delete the progress transient
    delete_transient('install_and_activate_progress');
    // Return JSON response
    wp_send_json_success(array('redirect_url' => $redirect_url));
}

// Function to check if a plugin is installed but not active
function is_photolancer_plugin_installed($plugin_slug)
{
    $plugins = get_plugins();
    return isset($plugins[$plugin_slug]);
}

// Function to update the installation and activation progress
function update_install_and_activate_progress($plugin_name, $status)
{
    $progress = get_transient('install_and_activate_progress');
    $progress[] = array(
        'plugin' => $plugin_name,
        'status' => $status,
    );
    set_transient('install_and_activate_progress', $progress, MINUTE_IN_SECONDS * 10);
}


function photolancer_dashboard_menu()
{
    add_theme_page(esc_html__('About Photolancer', 'photolancer'), esc_html__('About Photolancer', 'photolancer'), 'edit_theme_options', 'about-photolancer', 'photolancer_theme_info_display');
}
add_action('admin_menu', 'photolancer_dashboard_menu');
function photolancer_theme_info_display()
{ ?>
    <div class="dashboard-about-photolancer">
        <div class="photolancer-dashboard">
            <ul id="photolancer-dashboard-tabs-nav">
                <li><a href="#photolancer-welcome"><?php echo __('Get Started', 'photolancer') ?></a></li>
                <li><a href="#photolancer-setup"><?php echo __('Setup Instruction', 'photolancer') ?></a></li>
                <li><a href="#photolancer-comparision"><?php echo __('FREE VS PRO', 'photolancer') ?></a></li>
            </ul> <!-- END tabs-nav -->
            <div id="tabs-content">
                <div id="photolancer-welcome" class="tab-content">
                    <h1> <?php echo __('Welcome to the Photolancer', 'photolancer') ?></h1>
                    <p><?php echo __('Photolancer is a Full Site Editing (FSE) WordPress theme crafted for freelance photographers and photography agencies. Launch your site in minutes with beautiful pre-built sections and one-click demo imports. Seamlessly integrated with Cozy Themes, Photolancer offers a powerful photo gallery and portfolio builder, dynamic content, multiple layouts, lightbox effects, testimonial carousels, sliders, and over 40 advanced blocks. Perfect for photographers, graphic designers, and creative agencies looking to showcase their work effortlessly. Explore Photolancer at https://cozythemes.com/photolancer-wordpress-theme/', 'photolancer') ?></p>
                    <h3><?php echo __('Required Plugins', 'photolancer'); ?></h3>
                    <p class="notice-text"><?php echo __('Please install and activate all recommended pluign to import the demo with "one click demo import" feature and unlock premium features!(for pro version)', 'photolancer') ?></p>
                    <ul class="photolancer-required-plugin">
                        <li>

                            <h4><?php echo __('1. Cozy Addons', 'photolancer'); ?>
                                <?php
                                if (photolancer_is_plugin_activated('cozy-addons/cozy-addons.php')) {
                                    echo __(': Plugin has been already activated!', 'photolancer');
                                } elseif (photolancer_is_plugin_installed('cozy-addons/cozy-addons.php')) {
                                    echo __(': Plugin does not activated, Activate the plugin to use one click demo import and unlock premium features.', 'photolancer');
                                } else {
                                    echo ': <a href="' . get_admin_url() . 'plugin-install.php?tab=plugin-information&plugin=cozy-addons&TB_iframe=true&width=600&height=550">' . esc_html__('Install and Activate', 'photolancer') . '</a>';
                                }
                                ?>
                            </h4>
                        </li>
                        <li>

                            <h4><?php echo __('2. Cozy Essential Addons', 'photolancer'); ?>
                                <?php
                                if (photolancer_is_plugin_activated('cozy-essential-addons/cozy-essential-addons.php')) {
                                    echo __(': Plugin has been already activated!', 'photolancer');
                                } elseif (photolancer_is_plugin_installed('cozy-essential-addons/cozy-essential-addons.php')) {
                                    echo __(': Plugin does not activated, Activate the plugin to use one click demo import and unlock premium features.', 'photolancer');
                                } else {
                                    echo ': <a href="' . get_admin_url() . 'plugin-install.php?tab=plugin-information&plugin=cozy-essential-addons&TB_iframe=true&width=600&height=550">' . esc_html__('Install and Activate', 'photolancer') . '</a>';
                                }
                                ?>
                            </h4>
                        </li>
                        <li>
                            <h4><?php echo __('3. Advanced Import - Need only to use "one click demo import" features', 'photolancer'); ?>
                                <?php
                                if (photolancer_is_plugin_activated('advanced-import/advanced-import.php')) {
                                    echo __(': Plugin has been already activated!', 'photolancer');
                                } elseif (photolancer_is_plugin_installed('advanced-import/advanced-import.php')) {
                                    echo __(': Plugin does not activated, Activate the plugin to use one click demo import feature.', 'photolancer');
                                } else {
                                    echo ': <a href="' . get_admin_url() . 'plugin-install.php?tab=plugin-information&plugin=advanced-import&TB_iframe=true&width=600&height=550">' . esc_html__('Install and Activate', 'photolancer') . '</a>';
                                }
                                ?>
                            </h4>
                        </li>
                    </ul>
                    <a href="#" id="install-activate-button" class="button admin-button info-button"><?php echo __('Getting started with a single click', 'photolancer'); ?></a>
                </div>
                <div id="photolancer-setup" class="tab-content">
                    <h3 class="photolancer-baisc-guideline-header"><?php echo __('Basic Theme Setup', 'photolancer') ?></h3>
                    <div class="photolancer-baisc-guideline">
                        <div class="featured-box">
                            <ul>
                                <li><strong><?php echo __('Setup Header Layout:', 'photolancer') ?></strong>
                                    <ul>
                                        <li> - <?php echo __('Go to Appearance -> Editor -> Patterns -> Template Parts -> Header:', 'photolancer') ?></li>
                                        <li> - <?php echo __('click on Header > Click on Edit (Icon) -> Add or Remove Requirend block/content as your requirement.:', 'photolancer') ?></li>
                                        <li> - <?php echo __('Click on save to update your layout', 'photolancer') ?></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="featured-box">
                            <ul>
                                <li><strong><?php echo __('Setup Footer Layout:', 'photolancer') ?></strong>
                                    <ul>
                                        <li> - <?php echo __('Go to Appearance -> Editor -> Patterns -> Template Parts -> Footer:', 'photolancer') ?></li>
                                        <li> - <?php echo __('click on Footer > Click on Edit (Icon) > Add or Remove Requirend block/content as your requirement.:', 'photolancer') ?></li>
                                        <li> - <?php echo __('Click on save to update your layout', 'photolancer') ?></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="featured-box">
                            <ul>
                                <li><strong><?php echo __('Setup Templates like Homepage/404/Search/Page/Single and more templates Layout:', 'photolancer') ?></strong>
                                    <ul>
                                        <li> - <?php echo __('Go to Appearance -> Editor -> Templates:', 'photolancer') ?></li>
                                        <li> - <?php echo __('click on Template(You need to edit/update) > Click on Edit (Icon) > Add or Remove Requirend block/content as your requirement.:', 'photolancer') ?></li>
                                        <li> - <?php echo __('Click on save to update your layout', 'photolancer') ?></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="featured-box">
                            <ul>
                                <li><strong><?php echo __('Restore/Reset Default Content layout of Template(Like: Frontpage/Blog/Archive etc.)', 'photolancer') ?></strong>
                                    <ul>
                                        <li> - <?php echo __('Go to Appearance -> Editor -> Templates:', 'photolancer') ?></li>
                                        <li> - <?php echo __('Click on Manage all Templates', 'photolancer') ?></li>
                                        <li> - <?php echo __('Click on 3 Dots icon at right side of respective Template', 'photolancer') ?></li>
                                        <li> - <?php echo __('Click on Clear Customization', 'photolancer') ?></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="featured-box">
                            <ul>
                                <li><strong><?php echo __('Restore/Reset Default Content layout of Template Parts(Header/Footer/Sidebar)', 'photolancer') ?></strong>
                                    <ul>
                                        <li> - <?php echo __('Go to Appearance -> Editor -> Patterns:', 'photolancer') ?></li>
                                        <li> - <?php echo __('Click on Manage All Template Parts', 'photolancer') ?></li>
                                        <li> - <?php echo __('Click on 3 Dots icon at right side of respective Template parts', 'photolancer') ?></li>
                                        <li> - <?php echo __('Click on Clear Customization', 'photolancer') ?></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="photolancer-comparision" class="tab-content">
                    <div class="featured-list">
                        <div class="half-col free-features">
                            <h3><?php echo __('Photolancer Features (Free)', 'photolancer') ?></h3>
                            <ul>
                                <li><strong> - <?php echo __('Photolancer offer wide range of  ready to use Home Sections Patterns', 'photolancer') ?></strong>
                                    <ul>
                                        <li><?php echo __('Banner Section', 'photolancer') ?></li>
                                        <li><?php echo __('About Us Section', 'photolancer') ?></li>
                                        <li><?php echo __('Services Section', 'photolancer') ?></li>
                                        <li><?php echo __('Featured Work Section', 'photolancer') ?></li>
                                        <li><?php echo __('Testimonial Section', 'photolancer') ?></li>
                                        <li><?php echo __('Call To Action Section', 'photolancer') ?></li>
                                        <li><?php echo __('Pricing Table Section', 'photolancer') ?></li>
                                        <li><?php echo __('FAQ Section ', 'photolancer') ?></li>
                                        <li><?php echo __('Counter Section', 'photolancer') ?></li>
                                        <li><?php echo __('Latest Post Display Section ', 'photolancer') ?></li>
                                        <li><?php echo __('Brands Logo Showcase', 'photolancer') ?></li>
                                        <li><?php echo __('Photo Gallery', 'photolancer') ?></li>
                                        <li><?php echo __('Team Section', 'photolancer') ?></li>
                                        <li><?php echo __('About Us Page Template', 'photolancer') ?></li>
                                        <li><?php echo __('Conatct Us Page Template', 'photolancer') ?></li>
                                        <li><?php echo __('Service Page Template', 'photolancer') ?></li>
                                    </ul>
                                </li>

                                <li> <strong>- <?php echo __('FSE Templates Ready', 'photolancer') ?></strong>
                                    <ul>
                                        <li> <?php echo __('404 Template', 'photolancer') ?></li>
                                        <li> <?php echo __('Archive Template', 'photolancer') ?></li>
                                        <li> <?php echo __('Product Catalog Template', 'photolancer') ?></li>
                                        <li> <?php echo __('Blank Template', 'photolancer') ?></li>
                                        <li> <?php echo __('Front Page Template', 'photolancer') ?></li>
                                        <li> <?php echo __('Blog Home Template', 'photolancer') ?></li>
                                        <li> <?php echo __('Index Page Template', 'photolancer') ?></li>
                                        <li> <?php echo __('Search Template', 'photolancer') ?></li>
                                        <li> <?php echo __('Sitemap Template', 'photolancer') ?></li>
                                        <li> <?php echo __('Page Template', 'photolancer') ?></li>
                                        <li> <?php echo __('Left Sidebar Page Template', 'photolancer') ?></li>
                                        <li> <?php echo __('Right sidebar page  Template', 'photolancer') ?></li>
                                        <li> <?php echo __('Single Template', 'photolancer') ?></li>
                                        <li> <?php echo __('Single Product Template', 'photolancer') ?></li>
                                        <li> <?php echo __('Cart Page Template', 'photolancer') ?></li>
                                        <li> <?php echo __('Checkout Page Template', 'photolancer') ?></li>
                                        <li> <?php echo __('Left Sidebar Single Template', 'photolancer') ?></li>
                                        <li> <?php echo __('Full Width Single Template', 'photolancer') ?></li>

                                    </ul>
                                <li>
                                <li><strong> - <?php echo __('Fully Customizable Header Layout', 'photolancer') ?></strong></li>
                                <li> <strong>- <?php echo __('Fully Customizable Footer Layout ', 'photolancer') ?></strong></li>
                                <li><strong> - <?php echo __('12+ Beautiful Fonts Option', 'photolancer') ?></strong></li>
                                <li> <strong>- <?php echo __('On Scroll Animation option', 'photolancer') ?></strong></li>
                                <li> <strong>- <?php echo __('One Click Demo Import Features', 'photolancer') ?></strong></li>
                                <li> <strong>- <?php echo __('Access Cozy Blocks with upto 20+ Advanced Blocks for FSE and Gutenberg Editor', 'photolancer') ?></strong></li>
                            </ul>
                        </div>
                        <div class="half-col pro-features">
                            <h3><?php echo __('Premium Features', 'photolancer') ?></h3>
                            <p><?php echo __('Including all free features and comes with 30+ advanced blocks that enhance and power up the ecommerce website, here are some blocks that add the powerful features for your ecommerce/shopping website. By seamlessly integrating these blocks with our ready-to-use patterns, you have the flexibility to craft a wide selection of captivating online store ease', 'photolancer') ?></p>
                            <ul>
                                <li><?php echo __('Slider Block', 'photolancer') ?></li>
                                <li><?php echo __('Counter Block', 'photolancer') ?></li>
                                <li><?php echo __('Prgress Bar Block', 'photolancer') ?></li>
                                <li><?php echo __('Advanced Gallery with Lightbox, filterable and multiple layout', 'photolancer') ?></li>
                                <li><?php echo __('Portfolio Block with Custom Post Type with lightbox, category filterable and multiple layout', 'photolancer') ?></li>
                                <li><?php echo __('Team Block with grid and carousel', 'photolancer') ?></li>
                                <li><?php echo __('Testimonial Block with grid and carousel', 'photolancer') ?></li>
                                <li><?php echo __('15 Post and Magazine Blocks', 'photolancer') ?></li>
                                <li><?php echo __('10 WooCommerce Blocks', 'photolancer') ?></li>
                                <li><?php echo __('Social Shares Blocks', 'photolancer') ?></li>
                                <li><?php echo __('Social Icons Blocks', 'photolancer') ?></li>
                                <li><?php echo __('Breadcrumbs Block', 'photolancer') ?></li>
                                <li><?php echo __('Popup buidler Block to display offer and flash sale', 'photolancer') ?>
                                    <?php echo __('and access', 'photolancer') ?> <a href="https://cozythemes.com/cozy-addons/" target="_blank"><?php echo __('Cozy Blocks with more than 40+ advanced block.', 'photolancer') ?></a>
                                </li>

                            </ul>
                            <br />
                            <a href="https://cozythemes.com/pricing-and-plans/" class="upgrade-btn button" target="_blank"><?php echo __('Upgrade to Pro', 'photolancer') ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
