<?php
/**
 * Title: Hero Section with Cover Image
 * Description: This is a hero section.
 * Slug: cozy-block-patterns/hero-one
 * Categories: cozy-block-patterns, hero
 */

$images = array( CT_ASSETS_URL . 'images/hero_1.jpg' );
?>

<!-- wp:cover {"url":"<?php echo esc_url( $images[0] ); ?>","id":544,"dimRatio":10,"focalPoint":{"x":0.48,"y":0.85},"minHeight":695,"minHeightUnit":"px","contentPosition":"center center","metadata":{"name":"Hero"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"}}} -->
<div class="wp-block-cover alignfull" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:695px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-10 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-544" alt="" src="<?php echo esc_url( $images[0] ); ?>" style="object-position:48% 85%" data-object-fit="cover" data-object-position="48% 85%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"16px","right":"16px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:16px;padding-bottom:0;padding-left:16px"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"10px","bottom":"10px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="padding-top:10px;padding-right:0;padding-bottom:10px;padding-left:0"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":45} /-->

<!-- wp:site-title {"style":{"typography":{"fontSize":"23px","fontStyle":"normal","fontWeight":"600","textDecoration":"none"},"elements":{"link":{"color":{"text":"#fffffe"},":hover":{"color":{"text":"#fa9805"}}}},"color":{"text":"#fffffe"}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:navigation {"customTextColor":"#fffffe","customOverlayTextColor":"#090b10","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"500","textDecoration":"none"},"spacing":{"blockGap":"26px"}},"cozyHoverColor":{"menuText":"#fa9805","menuBg":"","submenuText":"","submenuBg":""}} -->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Home', 'cozy-addons' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'About Us', 'cozy-addons' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Services', 'cozy-addons' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Contact', 'cozy-addons' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"},"style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"500","textDecoration":"none"}},"cozyResponsiveShow":{"desktopShow":true,"tabletShow":true,"tabletViewport":980,"mobileShow":false,"mobileViewport":767}} -->
<div class="wp-block-buttons has-custom-font-size" style="font-size:14px;font-style:normal;font-weight:500;text-decoration:none"><!-- wp:button {"style":{"border":{"width":"1px","color":"#ffffff","radius":"100px"},"color":{"background":"#ffffff00"},"spacing":{"padding":{"left":"24px","right":"24px","top":"10px","bottom":"10px"}}},"cozyHoverEffect":{"boxShadow":{"enabled":false,"color":"#000","horizontal":0,"vertical":0,"blur":10,"spread":0,"position":""},"boxShadowHover":{"enabled":false,"color":"#000","horizontal":0,"vertical":0,"blur":10,"spread":0,"position":""},"transformEnabled":true,"transform":{"translateX":0,"translateY":"-2","rotate":0,"scale":1}},"cozyHoverStyles":{"bgColor":"#fa9805","color":"","borderColor":"#fa9805"}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background has-border-color wp-element-button" style="border-color:#ffffff;border-width:1px;border-radius:100px;background-color:#ffffff00;padding-top:10px;padding-right:24px;padding-bottom:10px;padding-left:24px"><?php esc_html_e( 'Get in Touch', 'cozy-addons' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"140px","bottom":"140px"},"blockGap":"6px"}},"layout":{"type":"constrained","contentSize":"792px"},"cozyCustomFont":"Public Sans"} -->
<div class="wp-block-group" style="padding-top:140px;padding-right:0;padding-bottom:140px;padding-left:0"><!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"#fffffe"}}},"typography":{"fontSize":"60px","fontStyle":"normal","fontWeight":"600","lineHeight":"1.3"},"color":{"text":"#fffffe"}},"cozyCustomFont":"Inter","cozyAnimation":{"type":"flip-up","easingFunction":"ease-in","anchorPlacement":"top-bottom","duration":600}} -->
<h2 class="wp-block-heading has-text-align-center has-text-color has-link-color" style="color:#fffffe;font-size:60px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e( 'Powerful campaigns for every business', 'cozy-addons' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px"},"color":{"text":"#ebebeb"},"elements":{"link":{"color":{"text":"#ebebeb"}}}}} -->
<p class="has-text-align-center has-text-color has-link-color" style="color:#ebebeb;font-size:14px"><?php esc_html_e( 'Frustrated by a slow website? We’ll help you tame those speed demons so you can keep visitors coming back for more!', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"typography":{"textDecoration":"none","fontSize":"16px"},"spacing":{"margin":{"top":"26px","bottom":"26px"}}}} -->
<div class="wp-block-buttons has-custom-font-size" style="margin-top:26px;margin-bottom:26px;font-size:16px;text-decoration:none"><!-- wp:button {"textColor":"background","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"color":{"background":"#0d5fff"},"border":{"radius":"100px"},"typography":{"fontStyle":"normal","fontWeight":"500","textDecoration":"none"},"spacing":{"padding":{"left":"36px","right":"36px","top":"14px","bottom":"14px"}}},"cozyHoverEffect":{"boxShadow":{"enabled":false,"color":"#000","horizontal":0,"vertical":0,"blur":10,"spread":0,"position":""},"boxShadowHover":{"enabled":false,"color":"#ebaf4e","horizontal":10,"vertical":10,"blur":5,"spread":0,"position":""},"transformEnabled":false,"transform":{"translateX":0,"translateY":0,"rotate":0,"scale":1}},"cozyHoverStyles":{"bgColor":"#fa9805","color":"","borderColor":""},"cozyAnimation":{"type":"none","easingFunction":"ease-in","anchorPlacement":"bottom-center","duration":600}} -->
<div class="wp-block-button" style="font-style:normal;font-weight:500;text-decoration:none"><a class="wp-block-button__link has-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:100px;background-color:#0d5fff;padding-top:14px;padding-right:36px;padding-bottom:14px;padding-left:36px"><?php esc_html_e( 'Discover More', 'cozy-addons' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->