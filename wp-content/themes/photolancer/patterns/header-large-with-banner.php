<?php

/**
 * Title: Header Large with Banner
 * Slug: photolancer/header-large-with-banner
 * Categories: photolancer, header
 */
$photolancer_url = trailingslashit(get_template_directory_uri());
$photolancer_images = array(
    $photolancer_url . 'assets/images/banner_bg.jpg',
);
?>
<!-- wp:cover {"url":"<?php echo esc_url($photolancer_images[0]) ?>","id":742,"dimRatio":0,"overlayColor":"dark-color","isUserOverlayColor":true,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-cover" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><span aria-hidden="true" class="wp-block-cover__background has-dark-color-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-742" alt="" src="<?php echo esc_url($photolancer_images[0]) ?>" data-object-fit="cover" />
    <div class="wp-block-cover__inner-container"><!-- wp:group {"className":"photolancer-header","style":{"spacing":{"padding":{"top":"22px","right":"var:preset|spacing|40","bottom":"22px","left":"var:preset|spacing|40"}},"border":{"bottom":{"width":"0px","style":"none"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
        <div class="wp-block-group photolancer-header" style="border-bottom-style:none;border-bottom-width:0px;padding-top:22px;padding-right:var(--wp--preset--spacing--40);padding-bottom:22px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:site-logo {"width":32,"shouldSyncIcon":false} /-->

                    <!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase","letterSpacing":"0px","fontSize":"28px"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"spacing":{"margin":{"top":"5px"}}}} /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:navigation {"textColor":"light-color","overlayBackgroundColor":"secondary-bg","overlayTextColor":"heading-color","className":"photolancer-navigation","style":{"typography":{"textTransform":"none","fontStyle":"normal","fontWeight":"500","lineHeight":"2"},"spacing":{"blockGap":"24px"}},"fontSize":"medium","layout":{"type":"flex","justifyContent":"center"}} /-->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:cover {"dimRatio":0,"minHeight":640,"isDark":false,"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"5rem","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"980px"}} -->
        <div class="wp-block-cover is-light" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:5rem;padding-left:var(--wp--preset--spacing--40);min-height:640px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
            <div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"740px"}} -->
                <div class="wp-block-group">
                    <!-- wp:heading {"textAlign":"center","level":1,"className":"photolancer-big-title","style":{"typography":{"fontStyle":"normal","fontWeight":"900","fontSize":"120px","lineHeight":"1"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                    <h1 class="wp-block-heading has-text-align-center photolancer-big-title has-light-color-color has-text-color has-link-color" style="font-size:120px;font-style:normal;font-weight:900;line-height:1"><?php esc_html_e('PHOTOLANCER', 'photolancer') ?></h1>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                    <p class="has-text-align-center has-light-color-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'photolancer') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"className":"photolancer-search-box is-style-photolancer-boxshadow","style":{"spacing":{"margin":{"top":"48px"},"padding":{"top":"5px","bottom":"5px","left":"20px","right":"0px"}},"border":{"radius":"80px","color":"#1d2529e8","width":"2px"}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"800px"}} -->
                <div class="wp-block-group photolancer-search-box is-style-photolancer-boxshadow has-border-color has-light-color-background-color has-background" style="border-color:#1d2529e8;border-width:2px;border-radius:80px;margin-top:48px;padding-top:5px;padding-right:0px;padding-bottom:5px;padding-left:20px"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search the site...","width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"className":"photolancer-banner-search","style":{"border":{"width":"0px","style":"none","radius":"80px"},"elements":{"link":{"color":{"text":"var:preset|color|dark-shade"}}}},"backgroundColor":"transparent","textColor":"dark-shade"} /--></div>
                <!-- /wp:group -->
            </div>
        </div>
        <!-- /wp:cover -->

        <!-- wp:group {"style":{"color":{"background":"#07041c6e"},"spacing":{"padding":{"top":"48px","bottom":"48px","left":"28px","right":"28px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
        <div class="wp-block-group has-background" style="background-color:#07041c6e;padding-top:48px;padding-right:28px;padding-bottom:48px;padding-left:28px"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}}} -->
            <div class="wp-block-columns" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column -->
                <div class="wp-block-column"><!-- wp:list {"className":"is-style-list-style-no-bullet photolancer-category-list","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"light-color"} -->
                    <ul style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0" class="wp-block-list is-style-list-style-no-bullet photolancer-category-list has-light-color-color has-text-color has-link-color"><!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('Animal', 'photolancer') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('Architecture', 'photolancer') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('Around the Worlds', 'photolancer') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('Corporate', 'photolancer') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('Wild Animals', 'photolancer') ?></a></li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:list {"className":"is-style-list-style-no-bullet photolancer-category-list","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"light-color"} -->
                    <ul style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0" class="wp-block-list is-style-list-style-no-bullet photolancer-category-list has-light-color-color has-text-color has-link-color"><!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('Landscape', 'photolancer') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('Heritage', 'photolancer') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('Wedding', 'photolancer') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('Portrait', 'photolancer') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('Commercial', 'photolancer') ?></a></li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:list {"className":"is-style-list-style-no-bullet photolancer-category-list","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"light-color"} -->
                    <ul style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0" class="wp-block-list is-style-list-style-no-bullet photolancer-category-list has-light-color-color has-text-color has-link-color"><!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('Fashion', 'photolancer') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('Under Water', 'photolancer') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('Around the Worlds', 'photolancer') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('Corporate', 'photolancer') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('Fine Arts', 'photolancer') ?></a></li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:list {"className":"is-style-list-style-no-bullet photolancer-category-list","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"light-color"} -->
                    <ul style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0" class="wp-block-list is-style-list-style-no-bullet photolancer-category-list has-light-color-color has-text-color has-link-color"><!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('Water', 'photolancer') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('Food', 'photolancer') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('Travel', 'photolancer') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('Sports', 'photolancer') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('Nature', 'photolancer') ?></a></li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->