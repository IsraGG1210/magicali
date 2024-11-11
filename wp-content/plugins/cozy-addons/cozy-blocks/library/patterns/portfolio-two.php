<?php
/**
 * Title: Portfolio Section two with image hover
 * Description: This is portfolio section with image hover effect
 * Slug: cozy-block-patterns/portfolio-two
 * Categories: cozy-block-patterns, portfolio, gallery
 */

$images = array(
	CT_ASSETS_URL . 'images/portfolio_2_1.jpg',
	CT_ASSETS_URL . 'images/about-us_6_2.jpg',
);

?>

<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'Portfolio', 'cozy-addons' ); ?>"},"style":{"color":{"background":"#fffffe"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"className":"cozy-block-pattern__portfolio-two","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group cozy-block-pattern__portfolio-two has-background" style="background-color:#fffffe;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"80px","bottom":"80px","left":"16px","right":"16px"}}},"layout":{"type":"constrained","contentSize":"1180px"},"cozyCustomFont":"Public Sans"} -->
<div class="wp-block-group alignfull" style="padding-top:80px;padding-right:16px;padding-bottom:80px;padding-left:16px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","style":{"color":{"text":"#0d5fff"},"elements":{"link":{"color":{"text":"#0d5fff"}}},"typography":{"fontSize":"14px","lineHeight":"1.2","fontStyle":"normal","fontWeight":"500","textTransform":"uppercase"}}} -->
<p class="has-text-align-left has-text-color has-link-color" style="color:#0d5fff;font-size:14px;font-style:normal;font-weight:500;line-height:1.2;text-transform:uppercase"><?php esc_html_e( 'Our Portfolio', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","level":4,"style":{"elements":{"link":{"color":{"text":"#090b10"}}},"typography":{"fontSize":"44px","lineHeight":"1.3","fontStyle":"normal","fontWeight":"600"},"color":{"text":"#090b10"}},"cozyCustomFont":"Inter"} -->
<h4 class="wp-block-heading has-text-align-left has-text-color has-link-color" style="color:#090b10;font-size:44px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e( 'Featured Works', 'cozy-addons' ); ?></h4>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"478px"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontSize":"14px"}}} -->
<p style="font-size:14px"><?php esc_html_e( 'Far far away, behind the word mountains, far from the countries Vocalic and Consonantal, there live the blind texts. Separated they live.', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"26px","bottom":"0"}}}} -->
<div class="wp-block-columns" style="margin-top:26px;margin-bottom:0"><!-- wp:column {"style":{"spacing":{"blockGap":"0"}},"className":"cozy-portfolio-one__wrapper","cozyAnimation":{"type":"fade-down","easingFunction":"ease","anchorPlacement":"top-center","duration":800}} -->
<div class="wp-block-column cozy-portfolio-one__wrapper"><!-- wp:cover {"url":"<?php echo esc_url( $images[0] ); ?>","id":488,"dimRatio":60,"customOverlayColor":"#090b10","isUserOverlayColor":true,"style":{"color":{}},"className":"cozy-portfolio-two__cover"} -->
<div class="wp-block-cover cozy-portfolio-two__cover"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim" style="background-color:#090b10"></span><img class="wp-block-cover__image-background wp-image-488" alt="" src="<?php echo esc_url( $images[0] ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"cozy-portfolio-two__content-wrapper","layout":{"type":"constrained"}} -->
<div class="wp-block-group cozy-portfolio-two__content-wrapper"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontSize":"28px","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"#fffffe"},":hover":{"color":{"text":"#ff9900"}}}},"spacing":{"margin":{"top":"8px"}},"color":{"text":"#fffffe"}},"cozyCustomFont":"Inter"} -->
<h4 class="wp-block-heading has-text-align-center has-text-color has-link-color" style="color:#fffffe;margin-top:8px;font-size:28px;font-style:normal;font-weight:500"><a href="#"><?php esc_html_e( 'Website Design', 'cozy-addons' ); ?></a></h4>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"500","textDecoration":"none"},"spacing":{"margin":{"top":"26px","bottom":"0"}}},"cozyCustomFont":"Public Sans"} -->
<div class="wp-block-buttons has-custom-font-size" style="margin-top:26px;margin-bottom:0;font-size:16px;font-style:normal;font-weight:500;text-decoration:none"><!-- wp:button {"style":{"color":{"background":"#fffffe00"},"border":{"color":"#fffffe","width":"1px","style":"solid","radius":"100px"},"spacing":{"padding":{"left":"26px","right":"26px","top":"12px","bottom":"12px"}}},"cozyHoverStyles":{"bgColor":"#ff9900","color":"","borderColor":"#f8f8f800"}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background has-border-color wp-element-button" style="border-color:#fffffe;border-style:solid;border-width:1px;border-radius:100px;background-color:#fffffe00;padding-top:12px;padding-right:26px;padding-bottom:12px;padding-left:26px"><?php esc_html_e( 'Read More', 'cozy-addons' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"0"}},"className":"cozy-portfolio-one__wrapper","cozyAnimation":{"type":"fade-up","easingFunction":"ease","anchorPlacement":"top-center","duration":800}} -->
<div class="wp-block-column cozy-portfolio-one__wrapper"><!-- wp:cover {"url":"<?php echo esc_url( $images[1] ); ?>","id":488,"dimRatio":60,"customOverlayColor":"#090b10","isUserOverlayColor":true,"style":{"color":{}},"className":"cozy-portfolio-two__cover"} -->
<div class="wp-block-cover cozy-portfolio-two__cover"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim" style="background-color:#090b10"></span><img class="wp-block-cover__image-background wp-image-488" alt="" src="<?php echo esc_url( $images[1] ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"cozy-portfolio-two__content-wrapper","layout":{"type":"constrained"}} -->
<div class="wp-block-group cozy-portfolio-two__content-wrapper"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontSize":"28px","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"#fffffe"},":hover":{"color":{"text":"#ff9900"}}}},"spacing":{"margin":{"top":"8px"}},"color":{"text":"#fffffe"}},"cozyCustomFont":"Inter"} -->
<h4 class="wp-block-heading has-text-align-center has-text-color has-link-color" style="color:#fffffe;margin-top:8px;font-size:28px;font-style:normal;font-weight:500"><a href="#"><?php esc_html_e( 'Website Design', 'cozy-addons' ); ?></a></h4>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"500","textDecoration":"none"},"spacing":{"margin":{"top":"26px","bottom":"0"}}},"cozyCustomFont":"Public Sans"} -->
<div class="wp-block-buttons has-custom-font-size" style="margin-top:26px;margin-bottom:0;font-size:16px;font-style:normal;font-weight:500;text-decoration:none"><!-- wp:button {"style":{"color":{"background":"#fffffe00"},"border":{"color":"#fffffe","width":"1px","style":"solid","radius":"100px"},"spacing":{"padding":{"left":"26px","right":"26px","top":"12px","bottom":"12px"}}},"cozyHoverStyles":{"bgColor":"#ff9900","color":"","borderColor":"#f8f8f800"}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background has-border-color wp-element-button" style="border-color:#fffffe;border-style:solid;border-width:1px;border-radius:100px;background-color:#fffffe00;padding-top:12px;padding-right:26px;padding-bottom:12px;padding-left:26px"><?php esc_html_e( 'Read More', 'cozy-addons' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->