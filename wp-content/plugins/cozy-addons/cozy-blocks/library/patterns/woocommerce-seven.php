<?php
/**
 * Title: Woocommerce section seven with slider
 * Description: This is woocommerce section with slider
 * Slug: cozy-block-patterns/woocommerce-seven
 * Categories: cozy-block-patterns, woocommerce
 * Premium: true
 * Dynamic: true
 */

?>

<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'WooCommerce', 'cozy-addons' ); ?>"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"},"color":{"background":"#fffbf5"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#fffbf5;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cozy-block/product-slider {"blockClientId":"65d93624-7091-4980-98a1-d7c8247a5a62","pagination":{"enabled":true,"width":10,"height":10,"borderRadius":10,"activeWidth":10,"activeBorderRadius":10,"activeColor":"#f49805","color":"#f49805","activeColorHover":"#0d5fff","colorHover":"#0d5fff","verticalPosition":40},"navigation":{"enabled":true,"iconSize":15,"iconBoxWidth":35,"iconBoxHeight":35,"borderRadius":50,"backgroundColor":"#f49805","color":"#fffffe","backgroundColorHover":"#0d5fff","colorHover":"#fffffe"},"sliderOptions":{"loop":false,"autoplay":{"status":true,"pauseOnMouseEnter":true,"delay":3000},"centeredSlides":false,"slidesPerView":1,"spaceBetween":30,"speed":2000}} -->
<div class="cozy-block-product-slider hover-show" id="cozyBlock_65d93624_7091_4980_98a1_d7c8247a5a62"><!-- wp:query {"queryId":2,"query":{"perPage":"2","postType":"product"},"lock":{"move":"false","remove":"true"},"className":"cozy-product-slider__swiper-container"} -->
<div class="wp-block-query cozy-product-slider__swiper-container"><!-- wp:post-template {"lock":{"move":"false","remove":"true"},"style":{"spacing":{"blockGap":"0"}},"className":"cozy-block-product-slider__swiper-wrapper"} -->
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0","padding":{"top":"80px","bottom":"80px","right":"16px","left":"16px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:80px;padding-right:16px;padding-bottom:80px;padding-left:16px"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"26px","left":"0"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"elements":{"link":{"color":{"text":"#090b10"}}},"color":{"text":"#090b10"},"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"14px"},"spacing":{"blockGap":"6px"}},"layout":{"type":"constrained","contentSize":"544px","justifyContent":"center"},"cozyCustomFont":"Inter"} -->
<div class="wp-block-group has-text-color has-link-color" style="color:#090b10;font-size:14px;font-style:normal;font-weight:500"><!-- wp:paragraph {"style":{"typography":{"fontSize":"35px","lineHeight":"0.5"},"elements":{"link":{"color":{"text":"#f49805"}}},"color":{"text":"#f49805"}},"cozyCustomFont":"Meow Script"} -->
<p class="has-text-color has-link-color" style="color:#f49805;font-size:35px;line-height:0.5"><?php esc_html_e( 'Season Sale', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-title {"textAlign":"","isLink":true,"linkTarget":"_blank","style":{"typography":{"fontSize":"60px","fontStyle":"normal","fontWeight":"700","lineHeight":"1.3"},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"style":{"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"600"}}} /-->

<!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"fontSize":"x-small"} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"26px"}}},"layout":{"type":"constrained","contentSize":"200px","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:26px"><!-- wp:group {"style":{"border":{"radius":"100px"},"color":{"background":"#f49805"},"spacing":{"blockGap":"0","margin":{"top":"0px","bottom":"0px"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="border-radius:100px;background-color:#f49805;margin-top:0px;margin-bottom:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:woocommerce/product-button {"textAlign":"center","isDescendentOfQueryLoop":true,"className":"is-style-fill","style":{"color":{"background":"#fffffe00","text":"#fffffe"},"elements":{"link":{"color":{"text":"#fffffe"}}},"spacing":{"padding":{"top":"14px","bottom":"14px","left":"36px","right":"36px"}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column"><!-- wp:post-featured-image {"align":"center"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --><div class="swiper-button-prev cozy-block-button-prev"></div><div class="swiper-button-next cozy-block-button-next"></div><div class="swiper-pagination cozy-pagination"></div></div>
<!-- /wp:cozy-block/product-slider --></div>
<!-- /wp:group -->