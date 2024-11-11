<?php

/**
 * Title: Call to Action
 * Slug: photolancer/cta-block
 * Categories: photolancer
 */
$photolancer_url = trailingslashit(get_template_directory_uri());
$photolancer_images = array(
    $photolancer_url . 'assets/images/banner_bg.jpg',
);
?>
<!-- wp:group {"metadata":{"categories":["photolancer"],"patternName":"photolancer/cta-block","name":"Call to Action"},"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($photolancer_images[0]) ?>","id":742,"dimRatio":50,"overlayColor":"dark-shade","isUserOverlayColor":true,"minHeight":520,"layout":{"type":"constrained","contentSize":"980px"}} -->
    <div class="wp-block-cover" style="min-height:520px"><span aria-hidden="true" class="wp-block-cover__background has-dark-shade-background-color has-background-dim"></span><img class="wp-block-cover__image-background wp-image-742" alt="" src="<?php echo esc_url($photolancer_images[0]) ?>" data-object-fit="cover" />
        <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"64px","lineHeight":"1.4"}}} -->
            <h1 class="wp-block-heading has-text-align-center" style="font-size:64px;font-style:normal;font-weight:600;line-height:1.4"><?php esc_html_e('Your Perfect Shot Awaits – Let’s Work Together!', 'photolancer') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"44px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons" style="margin-top:44px"><!-- wp:button {"backgroundColor":"light-color","textColor":"heading-color","className":"is-style-button-hover-secondary-bgcolor","style":{"spacing":{"padding":{"left":"40px","right":"40px","top":"24px","bottom":"24px"}},"border":{"radius":"60px"},"typography":{"fontSize":"18px"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}}} -->
                <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor" style="font-size:18px"><a class="wp-block-button__link has-heading-color-color has-light-color-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:60px;padding-top:24px;padding-right:40px;padding-bottom:24px;padding-left:40px"><?php esc_html_e('Schedule Quick Call', 'photolancer') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->