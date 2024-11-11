<?php
/**
 * Title: Woocommerce section two with grid animation
 * Description: This is woocommerce section with grid animation
 * Slug: cozy-block-patterns/woocommerce-two
 * Categories: cozy-block-patterns, woocommerce
 * Premium: true
 * Dynamic: true
 */

$images = array(
	CT_ASSETS_URL . 'images/woocommerce_2_1.jpg',
);
?>

<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'WooCommerce', 'cozy-addons' ); ?>"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"},"color":{"background":"#fffffe"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#fffffe;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0","padding":{"top":"80px","bottom":"80px","left":"16px","right":"16px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:80px;padding-right:16px;padding-bottom:80px;padding-left:16px"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"26px","left":"16px"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","cozyAnimation":{"type":"fade-up","easingFunction":"ease","anchorPlacement":"top-bottom","duration":1000}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:cozy-block/product-carousel {"blockClientId":"8b8e8bc5-24c9-4bf2-989f-5859268952f9","namespace":"cozy-block/product-carousel","saleBadge":{"enabled":false,"display":"flex","position":"right","top":10,"right":10,"left":0,"marginBottom":0,"gap":0,"labelBefore":"","contentType":"default","labelAfter":"","padding":{"top":10,"right":6,"bottom":10,"left":6},"borderType":"none","borderWidth":1,"borderColor":"#000","borderRadius":50,"rotate":0,"bgColor":"#5566ca","typography":{"fontFamily":"","fontSize":10,"color":"#fff","fontWeight":400},"labelTypography":{"fontFamily":"","fontSize":10,"color":"","fontWeight":400}},"gridOptions":{"displayColumn":2,"columnGap":16}} -->
<div class="cozy-block-product-carousel layout-grid hover-show    " id="cozyBlock_8b8e8bc5_24c9_4bf2_989f_5859268952f9"><!-- wp:query {"queryId":1,"query":{"perPage":"4","postType":"product"},"namespace":"cozy-block/cozy-woo-query","lock":{"move":false,"remove":true},"className":"cozy-query cozy-product-carousel__swiper-container"} -->
<div class="wp-block-query cozy-query cozy-product-carousel__swiper-container"><!-- wp:post-template {"lock":{"move":false,"remove":true},"style":{"spacing":{"blockGap":"0"},"color":{"text":"#646464"},"elements":{"link":{"color":{"text":"#646464"},":hover":{"color":{"text":"#f49805"}}}},"typography":{"fontSize":"14px"}},"className":"cozy-layout-grid swiper-wrapper cozy-product-carousel-template"} -->
<!-- wp:post-featured-image {"height":"284px","style":{"border":{"radius":"0px"}}} /-->

<!-- wp:post-title {"textAlign":"left","level":4,"isLink":true,"linkTarget":"_blank","style":{"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}},"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.3","fontSize":"22px"},"spacing":{"margin":{"top":"16px","bottom":"6px","left":"0","right":"0"}}},"__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:post-terms {"term":"product_cat","style":{"typography":{"textTransform":"uppercase"},"spacing":{"padding":{"top":"0","bottom":"0"}}}} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left","style":{"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"8px","bottom":"0","left":"0","right":"0"}}}} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:cozy-block/product-carousel --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url( $images[0] ); ?>","id":3109,"dimRatio":0,"customOverlayColor":"#e9e9ea","isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"%","contentPosition":"top left","isDark":false,"style":{"spacing":{"padding":{"bottom":"0","left":"16px","right":"16px","top":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-top-left" style="padding-top:0;padding-right:16px;padding-bottom:0;padding-left:16px;min-height:100%"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#e9e9ea"></span><img class="wp-block-cover__image-background wp-image-3109" alt="" src="<?php echo esc_url( $images[0] ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"elements":{"link":{"color":{"text":"#646464"}}},"color":{"text":"#646464"},"spacing":{"blockGap":"0","padding":{"right":"26px","left":"26px","top":"60px","bottom":"60px"},"margin":{"top":"0","bottom":"0"}},"typography":{"fontSize":"14px"}},"layout":{"type":"constrained","contentSize":"351px","justifyContent":"center"},"cozyCustomFont":"Poppins"} -->
<div class="wp-block-group has-text-color has-link-color" style="color:#646464;margin-top:0;margin-bottom:0;padding-top:60px;padding-right:26px;padding-bottom:60px;padding-left:26px;font-size:14px"><!-- wp:group {"style":{"spacing":{"blockGap":"6px","margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"24px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"margin":{"top":"10px","bottom":"10px"},"blockGap":"0","padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"0","bottom":"0"}},"border":{"top":{"color":"#090b10","width":"1px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:#090b10;border-top-width:1px;margin-top:10px;margin-bottom:10px;padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"}}} -->
<p style="font-style:normal;font-weight:500;text-transform:uppercase"><?php esc_html_e( 'Grab the best offer', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"fontSize":"64px","fontStyle":"normal","fontWeight":"600","lineHeight":"1.2"},"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}}},"cozyCustomFont":"Poppins","cozyAnimation":{"type":"flip-up","easingFunction":"ease-in","anchorPlacement":"top-bottom","duration":600}} -->
<h2 class="wp-block-heading has-text-align-left has-text-color has-link-color" style="color:#090b10;font-size:64px;font-style:normal;font-weight:600;line-height:1.2"><?php esc_html_e( 'Modern Collection', 'cozy-addons' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Lorem ipsum is simply dummy text of the print press typesetting industry.', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"typography":{"fontSize":"16px","textDecoration":"none","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"26px","bottom":"26px"}}}} -->
<div class="wp-block-buttons has-custom-font-size" style="margin-top:26px;margin-bottom:26px;font-size:16px;font-style:normal;font-weight:500;text-decoration:none"><!-- wp:button {"style":{"color":{"background":"#0d5fff","text":"#fffffe"},"elements":{"link":{"color":{"text":"#fffffe"}}},"spacing":{"padding":{"left":"36px","right":"36px","top":"14px","bottom":"14px"}},"border":{"radius":"5px"}},"cozyHoverStyles":{"bgColor":"#f49805","color":"#fffffe","borderColor":""}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background has-link-color wp-element-button" style="border-radius:5px;color:#fffffe;background-color:#0d5fff;padding-top:14px;padding-right:36px;padding-bottom:14px;padding-left:36px"><?php esc_html_e( 'Shop Collection', 'cozy-addons' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->