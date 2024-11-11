<?php
/**
 * Title: Services section five grid with display image
 * Description: This is service section with grid animation
 * Slug: cozy-block-patterns/services-five
 * Categories: cozy-block-patterns, services
 */

$images = array(
	CT_ASSETS_URL . 'images/services_5_1.jpg',
	CT_ASSETS_URL . 'images/services_5_2.jpg',
	CT_ASSETS_URL . 'images/services_5_3.jpg',
);
?>


<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'Services', 'cozy-addons' ); ?>"},"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"color":{"background":"#fffffe"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#fffffe;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"16px","left":"16px","top":"80px","bottom":"80px"},"blockGap":"var:preset|spacing|70"}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:80px;padding-right:16px;padding-bottom:80px;padding-left:16px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"#f49805"}}},"typography":{"fontSize":"14px","textTransform":"uppercase","lineHeight":"1.3","fontStyle":"normal","fontWeight":"500"},"color":{"text":"#f49805"}},"cozyCustomFont":"Public Sans"} -->
<p class="has-text-align-center has-text-color has-link-color" style="color:#f49805;font-size:14px;font-style:normal;font-weight:500;line-height:1.3;text-transform:uppercase"><?php esc_html_e( 'Our Services', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":"1.3","fontSize":"44px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"#090b10"}}},"color":{"text":"#090b10"}},"cozyCustomFont":"Inter","cozyAnimation":{"type":"flip-up","easingFunction":"ease-in","anchorPlacement":"top-bottom","duration":600}} -->
<h2 class="wp-block-heading has-text-align-center has-text-color has-link-color" style="color:#090b10;font-size:44px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e( 'Discover Our Services', 'cozy-addons' ); ?>!</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"36px","bottom":"0"},"blockGap":{"top":"var:preset|spacing|80"},"padding":{"top":"0","bottom":"0"}},"typography":{"fontSize":"14px"}},"cozyCustomFont":"Public Sans","cozyAnimation":{"type":"none","easingFunction":"ease","anchorPlacement":"top-bottom","duration":800}} -->
<div class="wp-block-columns" style="margin-top:36px;margin-bottom:0;padding-top:0;padding-bottom:0;font-size:14px"><!-- wp:column {"style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"348px"},"cozyAnimation":{"type":"fade-up-right","easingFunction":"ease","anchorPlacement":"top-center","duration":800}} -->
<div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":2409,"width":"auto","height":"300px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-2409" style="width:auto;height:300px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontSize":"20px","textDecoration":"none","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{":hover":{"color":{"text":"#f49805"}},"color":{"text":"#090b10"}}},"color":{"text":"#090b10"},"spacing":{"margin":{"top":"12px","bottom":"4px"}}},"cozyCustomFont":"Inter"} -->
<h3 class="wp-block-heading has-text-align-left has-text-color has-link-color" style="color:#090b10;margin-top:12px;margin-bottom:4px;font-size:20px;font-style:normal;font-weight:600;text-decoration:none"><a href="#"><?php esc_html_e( 'Digital Marketing', 'cozy-addons' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"color":{"text":"#646464"},"elements":{"link":{"color":{"text":"#646464"}}}}} -->
<p class="has-text-align-left has-text-color has-link-color" style="color:#646464"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"typography":{"fontSize":"16px","textDecoration":"none"},"spacing":{"margin":{"top":"26px"}}}} -->
<div class="wp-block-buttons has-custom-font-size" style="margin-top:26px;font-size:16px;text-decoration:none"><!-- wp:button {"style":{"color":{"text":"#fffffe","background":"#090b10"},"elements":{"link":{"color":{"text":"#fffffe"}}},"border":{"radius":"0px"},"spacing":{"padding":{"left":"36px","right":"36px","top":"10px","bottom":"10px"}}},"cozyHoverStyles":{"bgColor":"#f49805","color":"#fffffe","borderColor":""}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background has-link-color wp-element-button" style="border-radius:0px;color:#fffffe;background-color:#090b10;padding-top:10px;padding-right:36px;padding-bottom:10px;padding-left:36px"><?php esc_html_e( 'Read More', 'cozy-addons' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"348px"},"cozyAnimation":{"type":"fade-up","easingFunction":"ease","anchorPlacement":"top-center","duration":1000}} -->
<div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":2410,"width":"auto","height":"300px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( $images[1] ); ?>" alt="" class="wp-image-2410" style="width:auto;height:300px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontSize":"20px","textDecoration":"none","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{":hover":{"color":{"text":"#f49805"}},"color":{"text":"#090b10"}}},"color":{"text":"#090b10"},"spacing":{"margin":{"top":"12px","bottom":"4px"}}},"cozyCustomFont":"Inter"} -->
<h3 class="wp-block-heading has-text-align-left has-text-color has-link-color" style="color:#090b10;margin-top:12px;margin-bottom:4px;font-size:20px;font-style:normal;font-weight:600;text-decoration:none"><a href="#"><?php esc_html_e( 'Business Strategy', 'cozy-addons' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"color":{"text":"#646464"},"elements":{"link":{"color":{"text":"#646464"}}}}} -->
<p class="has-text-align-left has-text-color has-link-color" style="color:#646464"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"typography":{"fontSize":"16px","textDecoration":"none"},"spacing":{"margin":{"top":"26px"}}}} -->
<div class="wp-block-buttons has-custom-font-size" style="margin-top:26px;font-size:16px;text-decoration:none"><!-- wp:button {"style":{"color":{"text":"#fffffe","background":"#090b10"},"elements":{"link":{"color":{"text":"#fffffe"}}},"border":{"radius":"0px"},"spacing":{"padding":{"left":"36px","right":"36px","top":"10px","bottom":"10px"}}},"cozyHoverStyles":{"bgColor":"#f49805","color":"#fffffe","borderColor":""}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background has-link-color wp-element-button" style="border-radius:0px;color:#fffffe;background-color:#090b10;padding-top:10px;padding-right:36px;padding-bottom:10px;padding-left:36px"><?php esc_html_e( 'Read More', 'cozy-addons' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"348px"},"cozyAnimation":{"type":"fade-down-left","easingFunction":"ease","anchorPlacement":"top-center","duration":1200}} -->
<div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":2411,"width":"auto","height":"300px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( $images[2] ); ?>" alt="" class="wp-image-2411" style="width:auto;height:300px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontSize":"20px","textDecoration":"none","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{":hover":{"color":{"text":"#f49805"}},"color":{"text":"#090b10"}}},"color":{"text":"#090b10"},"spacing":{"margin":{"top":"12px","bottom":"4px"}}},"cozyCustomFont":"Inter"} -->
<h3 class="wp-block-heading has-text-align-left has-text-color has-link-color" style="color:#090b10;margin-top:12px;margin-bottom:4px;font-size:20px;font-style:normal;font-weight:600;text-decoration:none"><a href="#"><?php esc_html_e( 'Web Development', 'cozy-addons' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"color":{"text":"#646464"},"elements":{"link":{"color":{"text":"#646464"}}}}} -->
<p class="has-text-align-left has-text-color has-link-color" style="color:#646464"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"typography":{"fontSize":"16px","textDecoration":"none"},"spacing":{"margin":{"top":"26px"}}}} -->
<div class="wp-block-buttons has-custom-font-size" style="margin-top:26px;font-size:16px;text-decoration:none"><!-- wp:button {"style":{"color":{"text":"#fffffe","background":"#090b10"},"elements":{"link":{"color":{"text":"#fffffe"}}},"border":{"radius":"0px"},"spacing":{"padding":{"left":"36px","right":"36px","top":"10px","bottom":"10px"}}},"cozyHoverStyles":{"bgColor":"#f49805","color":"#fffffe","borderColor":""}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background has-link-color wp-element-button" style="border-radius:0px;color:#fffffe;background-color:#090b10;padding-top:10px;padding-right:36px;padding-bottom:10px;padding-left:36px"><?php esc_html_e( 'Read More', 'cozy-addons' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->