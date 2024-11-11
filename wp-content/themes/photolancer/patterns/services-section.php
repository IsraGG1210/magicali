<?php

/**
 * Title: Service Section
 * Slug: photolancer/services-section
 * Categories: photolancer
 */
$photolancer_url = trailingslashit(get_template_directory_uri());
$photolancer_images = array(
    $photolancer_url . 'assets/images/s1.png',
    $photolancer_url . 'assets/images/s2.png',
    $photolancer_url . 'assets/images/s3.png',
    $photolancer_url . 'assets/images/s4.png',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"120px","left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"100px"},"margin":{"top":"0","bottom":"0"}},"border":{"bottom":{"width":"0px","style":"none"}}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"1080px"}} -->
<div class="wp-block-group has-light-color-background-color has-background" style="border-bottom-style:none;border-bottom-width:0px;margin-top:0;margin-bottom:0;padding-top:100px;padding-right:var(--wp--preset--spacing--40);padding-bottom:120px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"640px"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
        <h2 class="wp-block-heading has-text-align-center" style="font-style:normal;font-weight:600"><?php esc_html_e('What I Offer', 'photolancer') ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'photolancer') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"32px"},"margin":{"top":"84px"}}}} -->
    <div class="wp-block-columns" style="margin-top:84px"><!-- wp:column {"className":"is-style-default","backgroundColor":"light-color"} -->
        <div class="wp-block-column is-style-default has-light-color-background-color has-background"><!-- wp:columns {"className":"photolancer-service-box is-style-photolancer-boxshadow","style":{"border":{"radius":"20px","width":"0px","style":"none"},"spacing":{"padding":{"top":"15px","bottom":"30px","left":"15px","right":"28px"},"blockGap":{"left":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"light-color"} -->
            <div class="wp-block-columns photolancer-service-box is-style-photolancer-boxshadow has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-radius:20px;margin-top:0;margin-bottom:0;padding-top:15px;padding-right:28px;padding-bottom:30px;padding-left:15px"><!-- wp:column {"width":"120px"} -->
                <div class="wp-block-column" style="flex-basis:120px"><!-- wp:image {"id":900,"width":"120px","height":"120px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"7px"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($photolancer_images[0]) ?>" alt="" class="wp-image-900" style="border-radius:7px;object-fit:cover;width:120px;height:120px" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"width":""} -->
                <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"15px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":"12px","width":"0px","style":"none"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="border-style:none;border-width:0px;border-radius:12px;padding-top:15px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:heading {"textAlign":"left","level":4,"style":{"spacing":{"margin":{"top":"0px"}}},"fontSize":"big"} -->
                        <h4 class="wp-block-heading has-text-align-left has-big-font-size" style="margin-top:0px"><?php esc_html_e('Personal Photography', 'photolancer') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"left"} -->
                        <p class="has-text-align-left"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'photolancer') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons -->
                        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","className":"is-style-button-hover-secondary-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}}},"fontSize":"medium"} -->
                            <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-color has-medium-font-size"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" href="#" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php esc_html_e('Read More', 'photolancer') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"backgroundColor":"light-color"} -->
        <div class="wp-block-column has-light-color-background-color has-background"><!-- wp:columns {"className":"photolancer-service-box is-style-photolancer-boxshadow","style":{"border":{"radius":"20px","width":"0px","style":"none"},"spacing":{"padding":{"top":"15px","bottom":"30px","left":"15px","right":"28px"},"blockGap":{"left":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"light-color"} -->
            <div class="wp-block-columns photolancer-service-box is-style-photolancer-boxshadow has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-radius:20px;margin-top:0;margin-bottom:0;padding-top:15px;padding-right:28px;padding-bottom:30px;padding-left:15px"><!-- wp:column {"width":"120px"} -->
                <div class="wp-block-column" style="flex-basis:120px"><!-- wp:image {"id":901,"width":"120px","height":"120px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"7px"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($photolancer_images[1]) ?>" alt="" class="wp-image-901" style="border-radius:7px;object-fit:cover;width:120px;height:120px" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"width":""} -->
                <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"15px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":"12px","width":"0px","style":"none"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="border-style:none;border-width:0px;border-radius:12px;padding-top:15px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:heading {"textAlign":"left","level":4,"style":{"spacing":{"margin":{"top":"0px"}}},"fontSize":"big"} -->
                        <h4 class="wp-block-heading has-text-align-left has-big-font-size" style="margin-top:0px"><?php esc_html_e('Wedding Photography', 'photolancer') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"left"} -->
                        <p class="has-text-align-left"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'photolancer') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons -->
                        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","className":"is-style-button-hover-secondary-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}}},"fontSize":"medium"} -->
                            <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-color has-medium-font-size"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" href="#" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php esc_html_e('Read More', 'photolancer') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"32px"},"margin":{"top":"32px","bottom":"0"}}}} -->
    <div class="wp-block-columns" style="margin-top:32px;margin-bottom:0"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:columns {"className":"photolancer-service-box is-style-photolancer-boxshadow","style":{"border":{"radius":"20px","width":"0px","style":"none"},"spacing":{"padding":{"top":"15px","bottom":"30px","left":"15px","right":"28px"},"blockGap":{"left":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"light-color"} -->
            <div class="wp-block-columns photolancer-service-box is-style-photolancer-boxshadow has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-radius:20px;margin-top:0;margin-bottom:0;padding-top:15px;padding-right:28px;padding-bottom:30px;padding-left:15px"><!-- wp:column {"width":"120px"} -->
                <div class="wp-block-column" style="flex-basis:120px"><!-- wp:image {"id":902,"width":"120px","height":"120px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"7px"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($photolancer_images[2]) ?>" alt="" class="wp-image-902" style="border-radius:7px;object-fit:cover;width:120px;height:120px" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"width":""} -->
                <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"15px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":"12px","width":"0px","style":"none"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="border-style:none;border-width:0px;border-radius:12px;padding-top:15px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:heading {"textAlign":"left","level":4,"style":{"spacing":{"margin":{"top":"0px"}}},"fontSize":"big"} -->
                        <h4 class="wp-block-heading has-text-align-left has-big-font-size" style="margin-top:0px"><?php esc_html_e('Portrait Photography', 'photolancer') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"left"} -->
                        <p class="has-text-align-left"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'photolancer') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons -->
                        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","className":"is-style-button-hover-secondary-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}}},"fontSize":"medium"} -->
                            <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-color has-medium-font-size"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" href="#" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php esc_html_e('Read More', 'photolancer') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:columns {"className":"photolancer-service-box is-style-photolancer-boxshadow","style":{"border":{"radius":"20px","width":"0px","style":"none"},"spacing":{"padding":{"top":"15px","bottom":"30px","left":"15px","right":"28px"},"blockGap":{"left":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"light-color"} -->
            <div class="wp-block-columns photolancer-service-box is-style-photolancer-boxshadow has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-radius:20px;margin-top:0;margin-bottom:0;padding-top:15px;padding-right:28px;padding-bottom:30px;padding-left:15px"><!-- wp:column {"width":"120px"} -->
                <div class="wp-block-column" style="flex-basis:120px"><!-- wp:image {"id":903,"width":"120px","height":"120px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"7px"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($photolancer_images[3]) ?>" alt="" class="wp-image-903" style="border-radius:7px;object-fit:cover;width:120px;height:120px" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"width":""} -->
                <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"15px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":"12px","width":"0px","style":"none"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="border-style:none;border-width:0px;border-radius:12px;padding-top:15px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:heading {"textAlign":"left","level":4,"style":{"spacing":{"margin":{"top":"0px"}}},"fontSize":"big"} -->
                        <h4 class="wp-block-heading has-text-align-left has-big-font-size" style="margin-top:0px"><?php esc_html_e('Events Photography', 'photolancer') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"left"} -->
                        <p class="has-text-align-left"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'photolancer') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons -->
                        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","className":"is-style-button-hover-secondary-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}}},"fontSize":"medium"} -->
                            <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-color has-medium-font-size"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" href="#" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php esc_html_e('Read More', 'photolancer') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->