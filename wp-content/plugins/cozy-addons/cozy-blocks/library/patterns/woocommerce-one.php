<?php
/**
 * Title: Woocommerce section one with slider
 * Description: This is woocommerce section with slider
 * Slug: cozy-block-patterns/woocommerce-one
 * Categories: cozy-block-patterns, woocommerce
 * Premium: true
 */

$images = array(
	CT_ASSETS_URL . 'images/woocommerce_1.jpg',
	CT_ASSETS_URL . 'images/woocommerce_1_1.png',
);
?>

<!-- wp:group {"metadata":{"name":"WooCommerce"},"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cozy-block/slider {"blockClientId":"2eff0eff-351d-4fbb-9ee1-3715432df222","pagination":{"width":12,"height":12,"borderRadius":10,"activeWidth":12,"activeBorderRadius":12,"bottom":20,"activeColor":"#0d5fff","color":"#fff","activeColorHover":"#f49805","colorHover":"#f49805","dynamicBullets":false},"hasNavigation":false,"sliderOptions":{"loop":false,"speed":1500,"slidesPerView":1,"autoplay":{"status":true,"pauseOnMouseEnter":true,"delay":2500},"effect":"none"},"thumbMedia":["",""]} -->
<div class="wp-block-cozy-block-slider"><div class="cozy-block-slider swiper-container hover-show " id="cozyBlock_2eff0eff_351d_4fbb_9ee1_3715432df222"><div class="swiper-wrapper"><!-- wp:cozy-block/slide {"blockClientId":"4349c866-b36d-4bd1-817f-bbb2325068d7","className":"swiper-slide"} -->
<!-- wp:cover {"url":"<?php echo esc_url( $images[0] ); ?>","id":3093,"dimRatio":0,"isUserOverlayColor":true,"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-cover"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-3093" alt="" src="<?php echo esc_url( $images[0] ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"right":"16px","left":"16px","top":"120px","bottom":"120px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:120px;padding-right:16px;padding-bottom:120px;padding-left:16px"><!-- wp:group {"style":{"elements":{"link":{"color":{"text":"#fffffe"}}},"color":{"text":"#fffffe"},"spacing":{"blockGap":"6px","margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"typography":{"fontSize":"14px"}},"layout":{"type":"constrained","contentSize":"492px","justifyContent":"right"}} -->
<div class="wp-block-group has-text-color has-link-color" style="color:#fffffe;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:14px"><!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"id":3095,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $images[1] ); ?>" alt="" class="wp-image-3095"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"#fffffe"}}},"color":{"text":"#fffffe"},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"}}} -->
<p class="has-text-align-center has-text-color has-link-color" style="color:#fffffe;font-size:18px;font-style:normal;font-weight:600;text-transform:uppercase"><?php esc_html_e( 'Watch', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center","placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry.","style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.3"},"color":{"text":"#0d5fff"},"elements":{"link":{"color":{"text":"#0d5fff"}}}},"fontSize":"x-small"} -->
<p class="has-text-align-center has-text-color has-link-color has-x-small-font-size" style="color:#0d5fff;font-style:normal;font-weight:700;line-height:1.3"><?php esc_html_e( 'SERIES 8', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","placeholder":"Slide Title","style":{"elements":{"link":{"color":{"text":"#fffffe"}}},"color":{"text":"#fffffe"},"typography":{"fontSize":"48px","fontStyle":"normal","fontWeight":"600","lineHeight":"1.3"}},"cozyCustomFont":"DM Sans"} -->
<h2 class="wp-block-heading has-text-align-center has-text-color has-link-color" style="color:#fffffe;font-size:48px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e( 'A healthy leap ahead', 'cozy-addons' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry.","style":{"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"600","lineHeight":"1.3"}},"cozyCustomFont":"Open Sans"} -->
<p class="has-text-align-center" style="font-size:22px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e( 'From $499', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"typography":{"fontSize":"16px","textDecoration":"none"},"spacing":{"margin":{"top":"26px","bottom":"26px"}}}} -->
<div class="wp-block-buttons has-custom-font-size" style="margin-top:26px;margin-bottom:26px;font-size:16px;text-decoration:none"><!-- wp:button {"style":{"color":{"background":"#0d5fff","text":"#fffffe"},"elements":{"link":{"color":{"text":"#fffffe"}}},"spacing":{"padding":{"left":"36px","right":"36px","top":"14px","bottom":"14px"}},"border":{"radius":"100px"}},"cozyHoverStyles":{"bgColor":"#f49805","color":"#fffffe","borderColor":""}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background has-link-color wp-element-button" style="border-radius:100px;color:#fffffe;background-color:#0d5fff;padding-top:14px;padding-right:36px;padding-bottom:14px;padding-left:36px">Pre-Order Now</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"style":{"spacing":{"blockGap":"26px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"color":{"text":"#0d5fff"},"elements":{"link":{"color":{"text":"#0d5fff"}}}},"fontSize":"x-small"} -->
<p class="has-text-color has-link-color has-x-small-font-size" style="color:#0d5fff;font-style:normal;font-weight:500"><?php esc_html_e( 'More Details', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"5px","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:5px;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cozy-block/icon-picker {"blockClientId":"23533afc-947c-4e83-8a2f-a6dfc75fad51","iconSize":20,"iconViewBox":{"vx":"0","vy":"0","vw":"24","vh":"24"},"iconPath":"M15.405 12C15.405 12.22 15.325 12.42 15.165 12.58L9.96501 17.58C9.80501 17.72 9.605 17.8 9.405 17.8C9.185 17.8 8.985 17.72 8.825 17.56C8.525 17.24 8.52499 16.74 8.84499 16.42L13.445 12L8.84499 7.57999C8.52499 7.27999 8.525 6.76 8.825 6.44C9.125 6.12 9.64501 6.12 9.96501 6.42L15.165 11.42C15.325 11.58 15.405 11.78 15.405 12Z"} -->
<div class="cozy-block-icon-picker default" id="cozyBlock_23533afc_947c_4e83_8a2f_a6dfc75fad51"><svg width="20" height="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#5566ca"><path d="M15.405 12C15.405 12.22 15.325 12.42 15.165 12.58L9.96501 17.58C9.80501 17.72 9.605 17.8 9.405 17.8C9.185 17.8 8.985 17.72 8.825 17.56C8.525 17.24 8.52499 16.74 8.84499 16.42L13.445 12L8.84499 7.57999C8.52499 7.27999 8.525 6.76 8.825 6.44C9.125 6.12 9.64501 6.12 9.96501 6.42L15.165 11.42C15.325 11.58 15.405 11.78 15.405 12Z"></path></svg></div>
<!-- /wp:cozy-block/icon-picker --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"6px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"color":{"text":"#0d5fff"},"elements":{"link":{"color":{"text":"#0d5fff"}}}},"fontSize":"x-small"} -->
<p class="has-text-color has-link-color has-x-small-font-size" style="color:#0d5fff;font-style:normal;font-weight:500"><?php esc_html_e( 'Watch Review', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"2px","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:2px;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cozy-block/icon-picker {"blockClientId":"4e858c31-0acc-45df-8e40-da19f1e9f08b","view":"stacked","iconSize":8,"iconViewBox":{"vx":"0","vy":"0","vw":"16","vh":"24"},"iconPath":"M7.42244e-07 0.905071L15.5 12.1316L0 23.9991L7.42244e-07 0.905071Z","boxStyles":{"padding":{"top":5,"right":4,"bottom":5,"left":7},"borderType":"solid","borderWidth":1,"borderColor":"#0d5fff","borderColorHover":"","borderRadius":50,"bgColorHover":""}} -->
<div class="cozy-block-icon-picker stacked" id="cozyBlock_4e858c31_0acc_45df_8e40_da19f1e9f08b"><svg width="8" height="8" viewBox="0 0 16 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#5566ca"><path d="M7.42244e-07 0.905071L15.5 12.1316L0 23.9991L7.42244e-07 0.905071Z"></path></svg></div>
<!-- /wp:cozy-block/icon-picker --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
<!-- /wp:cozy-block/slide -->

<!-- wp:cozy-block/slide {"blockClientId":"4d0f7e47-1871-497a-99d9-708e66289510","className":"swiper-slide"} -->
<!-- wp:cover {"url":"<?php echo esc_url( $images[0] ); ?>","id":3093,"dimRatio":0,"isUserOverlayColor":true,"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-cover"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-3093" alt="" src="<?php echo esc_url( $images[0] ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"right":"16px","left":"16px","top":"120px","bottom":"120px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:120px;padding-right:16px;padding-bottom:120px;padding-left:16px"><!-- wp:group {"style":{"elements":{"link":{"color":{"text":"#fffffe"}}},"color":{"text":"#fffffe"},"spacing":{"blockGap":"6px","margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"typography":{"fontSize":"14px"}},"layout":{"type":"constrained","contentSize":"492px","justifyContent":"right"}} -->
<div class="wp-block-group has-text-color has-link-color" style="color:#fffffe;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:14px"><!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"id":3095,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $images[1] ); ?>" alt="" class="wp-image-3095"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"#fffffe"}}},"color":{"text":"#fffffe"},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"}}} -->
<p class="has-text-align-center has-text-color has-link-color" style="color:#fffffe;font-size:18px;font-style:normal;font-weight:600;text-transform:uppercase"><?php esc_html_e( 'Watch', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center","placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry.","style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.3"},"color":{"text":"#0d5fff"},"elements":{"link":{"color":{"text":"#0d5fff"}}}},"fontSize":"x-small"} -->
<p class="has-text-align-center has-text-color has-link-color has-x-small-font-size" style="color:#0d5fff;font-style:normal;font-weight:700;line-height:1.3"><?php esc_html_e( 'SERIES 8', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","placeholder":"Slide Title","style":{"elements":{"link":{"color":{"text":"#fffffe"}}},"color":{"text":"#fffffe"},"typography":{"fontSize":"48px","fontStyle":"normal","fontWeight":"600","lineHeight":"1.3"}},"cozyCustomFont":"DM Sans"} -->
<h2 class="wp-block-heading has-text-align-center has-text-color has-link-color" style="color:#fffffe;font-size:48px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e( 'A healthy leap ahead', 'cozy-addons' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry.","style":{"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"600","lineHeight":"1.3"}},"cozyCustomFont":"Open Sans"} -->
<p class="has-text-align-center" style="font-size:22px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e( 'From $499', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"typography":{"fontSize":"16px","textDecoration":"none"},"spacing":{"margin":{"top":"26px","bottom":"26px"}}}} -->
<div class="wp-block-buttons has-custom-font-size" style="margin-top:26px;margin-bottom:26px;font-size:16px;text-decoration:none"><!-- wp:button {"style":{"color":{"background":"#0d5fff","text":"#fffffe"},"elements":{"link":{"color":{"text":"#fffffe"}}},"spacing":{"padding":{"left":"36px","right":"36px","top":"14px","bottom":"14px"}},"border":{"radius":"100px"}},"cozyHoverStyles":{"bgColor":"#f49805","color":"#fffffe","borderColor":""}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background has-link-color wp-element-button" style="border-radius:100px;color:#fffffe;background-color:#0d5fff;padding-top:14px;padding-right:36px;padding-bottom:14px;padding-left:36px">Pre-Order Now</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"style":{"spacing":{"blockGap":"26px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"color":{"text":"#0d5fff"},"elements":{"link":{"color":{"text":"#0d5fff"}}}},"fontSize":"x-small"} -->
<p class="has-text-color has-link-color has-x-small-font-size" style="color:#0d5fff;font-style:normal;font-weight:500"><?php esc_html_e( 'More Details', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"5px","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:5px;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cozy-block/icon-picker {"blockClientId":"7959dd60-28a1-4411-a459-71b3bc42e6f1","iconSize":20,"iconViewBox":{"vx":"0","vy":"0","vw":"24","vh":"24"},"iconPath":"M15.405 12C15.405 12.22 15.325 12.42 15.165 12.58L9.96501 17.58C9.80501 17.72 9.605 17.8 9.405 17.8C9.185 17.8 8.985 17.72 8.825 17.56C8.525 17.24 8.52499 16.74 8.84499 16.42L13.445 12L8.84499 7.57999C8.52499 7.27999 8.525 6.76 8.825 6.44C9.125 6.12 9.64501 6.12 9.96501 6.42L15.165 11.42C15.325 11.58 15.405 11.78 15.405 12Z"} -->
<div class="cozy-block-icon-picker default" id="cozyBlock_7959dd60_28a1_4411_a459_71b3bc42e6f1"><svg width="20" height="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#5566ca"><path d="M15.405 12C15.405 12.22 15.325 12.42 15.165 12.58L9.96501 17.58C9.80501 17.72 9.605 17.8 9.405 17.8C9.185 17.8 8.985 17.72 8.825 17.56C8.525 17.24 8.52499 16.74 8.84499 16.42L13.445 12L8.84499 7.57999C8.52499 7.27999 8.525 6.76 8.825 6.44C9.125 6.12 9.64501 6.12 9.96501 6.42L15.165 11.42C15.325 11.58 15.405 11.78 15.405 12Z"></path></svg></div>
<!-- /wp:cozy-block/icon-picker --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"6px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"color":{"text":"#0d5fff"},"elements":{"link":{"color":{"text":"#0d5fff"}}}},"fontSize":"x-small"} -->
<p class="has-text-color has-link-color has-x-small-font-size" style="color:#0d5fff;font-style:normal;font-weight:500"><?php esc_html_e( 'Watch Review', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"2px","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:2px;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cozy-block/icon-picker {"blockClientId":"74f46364-a2fe-4917-a095-cc0150ea7a48","view":"stacked","iconSize":8,"iconViewBox":{"vx":"0","vy":"0","vw":"16","vh":"24"},"iconPath":"M7.42244e-07 0.905071L15.5 12.1316L0 23.9991L7.42244e-07 0.905071Z","boxStyles":{"padding":{"top":5,"right":4,"bottom":5,"left":7},"borderType":"solid","borderWidth":1,"borderColor":"#0d5fff","borderColorHover":"","borderRadius":50,"bgColorHover":""}} -->
<div class="cozy-block-icon-picker stacked" id="cozyBlock_74f46364_a2fe_4917_a095_cc0150ea7a48"><svg width="8" height="8" viewBox="0 0 16 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#5566ca"><path d="M7.42244e-07 0.905071L15.5 12.1316L0 23.9991L7.42244e-07 0.905071Z"></path></svg></div>
<!-- /wp:cozy-block/icon-picker --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
<!-- /wp:cozy-block/slide --></div><div class="swiper-pagination cozy-pagination"></div></div></div>
<!-- /wp:cozy-block/slider --></div>
<!-- /wp:group -->