<?php

/**
 * Title: Call to Action Box
 * Slug: photolancer/cta-box
 * Categories: photolancer
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"100px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:40px;padding-right:var(--wp--preset--spacing--40);padding-bottom:100px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:cover {"overlayColor":"primary","isUserOverlayColor":true,"minHeight":380,"style":{"border":{"radius":"20px"}},"layout":{"type":"constrained","contentSize":"600px"}} -->
    <div class="wp-block-cover" style="border-radius:20px;min-height:380px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-100 has-background-dim"></span>
        <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":1,"className":"photolancer-flip-down","style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.4","fontSize":"44px"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
            <h1 class="wp-block-heading has-text-align-center photolancer-flip-down has-light-color-color has-text-color has-link-color" style="font-size:44px;font-style:normal;font-weight:600;line-height:1.4"><?php esc_html_e('Let’s Work Together on Your Next Project?', 'photolancer') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:buttons {"className":"photolancer-slide-up","style":{"spacing":{"margin":{"top":"30px"},"blockGap":"0"}},"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons photolancer-slide-up" style="margin-top:30px"><!-- wp:button {"backgroundColor":"light-color","textColor":"dark-shade","className":"is-style-button-hover-secondary-bgcolor","style":{"spacing":{"padding":{"left":"var:preset|spacing|70","right":"var:preset|spacing|70","top":"1.3rem","bottom":"1.3rem"}},"border":{"radius":"60px"},"typography":{"fontSize":"18px"},"elements":{"link":{"color":{"text":"var:preset|color|dark-shade"}}}}} -->
                <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor" style="font-size:18px"><a class="wp-block-button__link has-dark-shade-color has-light-color-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:60px;padding-top:1.3rem;padding-right:var(--wp--preset--spacing--70);padding-bottom:1.3rem;padding-left:var(--wp--preset--spacing--70)"><?php esc_html_e('Let’s Meet Up', 'photolancer') ?></a></div>
                <!-- /wp:button -->

                <!-- wp:button {"backgroundColor":"transparent","textColor":"light-color","className":"is-style-button-hover-secondary-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|70","right":"var:preset|spacing|70","top":"1.3rem","bottom":"1.3rem"}},"border":{"radius":"60px"},"typography":{"fontSize":"21px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}}} -->
                <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-color" style="font-size:21px;font-style:normal;font-weight:600"><a class="wp-block-button__link has-light-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:60px;padding-top:1.3rem;padding-right:var(--wp--preset--spacing--70);padding-bottom:1.3rem;padding-left:var(--wp--preset--spacing--70)"><?php esc_html_e('Hotline : +1 (012) 345-678', 'photolancer') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->