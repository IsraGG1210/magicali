<?php

/**
 * Title: Testimonial Section
 * Slug: photolancer/testimonial-section
 * Categories: photolancer
 */
$photolancer_url = trailingslashit(get_template_directory_uri());
$photolancer_images = array(
    $photolancer_url . 'assets/images/testimonial_3.jpg',
    $photolancer_url . 'assets/images/rating_star.png',
    $photolancer_url . 'assets/images/testimonial_bg.jpg'
);
?>
<!-- wp:group {"metadata":{"categories":["photolancer"],"patternName":"photolancer/testimonial-section","name":"Testimonial Section"},"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0","right":"0"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-light-color-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0;padding-bottom:0px;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($photolancer_images[2]) ?>","id":916,"dimRatio":40,"overlayColor":"dark-color","isUserOverlayColor":true,"style":{"spacing":{"padding":{"top":"120px","bottom":"100px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"960px"}} -->
    <div class="wp-block-cover" style="padding-top:120px;padding-right:var(--wp--preset--spacing--40);padding-bottom:100px;padding-left:var(--wp--preset--spacing--40)"><span aria-hidden="true" class="wp-block-cover__background has-dark-color-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-916" alt="" src="<?php echo esc_url($photolancer_images[2]) ?>" data-object-fit="cover" />
        <div class="wp-block-cover__inner-container"><!-- wp:group {"className":"photolancer-hover-box","style":{"border":{"radius":"0px","width":"0px","style":"none"},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"layout":{"type":"constrained","contentSize":"680px"}} -->
            <div class="wp-block-group photolancer-hover-box" style="border-style:none;border-width:0px;border-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"id":918,"width":"100px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
                <figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url($photolancer_images[1]) ?>" alt="" class="wp-image-918" style="width:100px" /></figure>
                <!-- /wp:image -->

                <!-- wp:paragraph {"align":"center","fontSize":"big"} -->
                <p class="has-text-align-center has-big-font-size"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'photolancer') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"60px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                <div class="wp-block-group" style="margin-top:60px"><!-- wp:image {"id":2415,"width":"100px","height":"100px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($photolancer_images[0]) ?>" alt="" class="wp-image-2415" style="border-radius:50px;object-fit:cover;width:100px;height:100px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
                        <h5 class="wp-block-heading" style="font-style:normal;font-weight:600"><?php esc_html_e('Henry Benzamin Clark', 'photolancer') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p><?php esc_html_e('Fitness Coach', 'photolancer') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->