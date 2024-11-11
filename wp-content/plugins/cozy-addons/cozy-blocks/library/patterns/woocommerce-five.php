<?php
/**
 * Title: Woocommerce section five with columns, animation
 * Description: This is woocommerce section with columns, animation
 * Slug: cozy-block-patterns/woocommerce-five
 * Categories: cozy-block-patterns, woocommerce
 */

$images = array(
	CT_ASSETS_URL . 'images/woocommerce_5_1.png',
	CT_ASSETS_URL . 'images/woocommerce_5_2.png',
	CT_ASSETS_URL . 'images/woocommerce_5_3.png',
);
?>

<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'WooCommerce', 'cozy-addons' ); ?>"},"align":"full","style":{"color":{"background":"#fffffe"},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"}},"className":"cozy-block-pattern__responsive-border-none","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group alignfull cozy-block-pattern__responsive-border-none has-background" style="background-color:#fffffe;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","bottom":"80px","left":"16px","right":"16px"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:80px;padding-right:16px;padding-bottom:80px;padding-left:16px"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|70"}},"typography":{"fontSize":"14px"},"color":{"text":"#646464"},"elements":{"link":{"color":{"text":"#646464"}}}}} -->
<div class="wp-block-columns has-text-color has-link-color" style="color:#646464;font-size:14px"><!-- wp:column {"style":{"spacing":{"blockGap":"0","padding":{"right":"var:preset|spacing|40"}},"border":{"right":{"color":"#e0e7e7","width":"1px"}}},"cozyAnimation":{"type":"fade-right","easingFunction":"ease-in-out","anchorPlacement":"top-center","duration":600}} -->
<div class="wp-block-column" style="border-right-color:#e0e7e7;border-right-width:1px;padding-right:var(--wp--preset--spacing--40)"><!-- wp:image {"id":3168,"width":"85px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-3168" style="width:85px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"26px","bottom":"0"},"blockGap":"6px"}},"layout":{"type":"constrained","contentSize":"315px"}} -->
<div class="wp-block-group" style="margin-top:26px;margin-bottom:0"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600","lineHeight":"1.3"},"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}}},"cozyCustomFont":"Montserrat"} -->
<h4 class="wp-block-heading has-text-align-center has-text-color has-link-color" style="color:#090b10;font-size:20px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e( 'Free Delivery', 'cozy-addons' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e( 'Lorem ipsum dolor sit amet quis nostrud exercitation ullamco laboris', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"0","padding":{"right":"var:preset|spacing|40"}},"border":{"right":{"color":"#e0e7e7","width":"1px"}}},"cozyAnimation":{"type":"fade-left","easingFunction":"ease","anchorPlacement":"top-center","duration":800}} -->
<div class="wp-block-column" style="border-right-color:#e0e7e7;border-right-width:1px;padding-right:var(--wp--preset--spacing--40)"><!-- wp:image {"id":3170,"width":"60px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( $images[1] ); ?>" alt="" class="wp-image-3170" style="width:60px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"26px","bottom":"0"},"blockGap":"6px"}},"layout":{"type":"constrained","contentSize":"315px"}} -->
<div class="wp-block-group" style="margin-top:26px;margin-bottom:0"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600","lineHeight":"1.3"},"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}}},"cozyCustomFont":"Montserrat"} -->
<h4 class="wp-block-heading has-text-align-center has-text-color has-link-color" style="color:#090b10;font-size:20px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e( 'Secure Payment', 'cozy-addons' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e( 'Lorem ipsum dolor sit amet quis nostrud exercitation ullamco laboris', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%","style":{"spacing":{"blockGap":"0"}},"cozyAnimation":{"type":"fade-left","easingFunction":"ease","anchorPlacement":"top-center","duration":1200}} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:image {"id":3171,"width":"55px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( $images[2] ); ?>" alt="" class="wp-image-3171" style="width:55px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"26px","bottom":"0"},"blockGap":"6px"}},"layout":{"type":"constrained","contentSize":"315px"}} -->
<div class="wp-block-group" style="margin-top:26px;margin-bottom:0"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600","lineHeight":"1.3"},"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}}},"cozyCustomFont":"Montserrat"} -->
<h4 class="wp-block-heading has-text-align-center has-text-color has-link-color" style="color:#090b10;font-size:20px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e( '24/7 Support', 'cozy-addons' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e( 'Lorem ipsum dolor sit amet quis nostrud exercitation ullamco laboris', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->