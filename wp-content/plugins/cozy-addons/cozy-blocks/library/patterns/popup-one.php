<?php
	/**
	 * Title: Popup section one with contact form
	 * Description: This is popup section with contact form
	 * Slug: cozy-block-patterns/popup-one
	 * Categories: cozy-block-patterns, popup
	 * Premium: true
	 * Dynamic: true
	 */

	$images = array(
		CT_ASSETS_URL . 'images/popup_1_1.jpg',
	);
	?>
<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'Popup', 'cozy-addons' ); ?>"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"className":"cozy-block-pattern__popup-one","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group alignfull cozy-block-pattern__popup-one" style="margin-top:0;margin-bottom:0"><!-- wp:cozy-block/modal {"blockClientId":"a86df00b-a97a-4e75-8d21-91714962323e","loadOnRefresh":true,"iconStyles":{"alignment":"right","horizontalSpacing":6,"verticalSpacing":5,"iconSize":14,"iconColor":"#000","iconColorHover":"","border":"1px solid #000","borderRadius":20},"padding":{"top":0,"right":0,"bottom":0,"left":0}} -->
<div class="cozy-block-modal  type-default event-load display-none icon-align-right" id="cozyBlock_a86df00b_a97a_4e75_8d21_91714962323e"><div class="close-icon-wrapper"><div class="modal-icon-wrapper"><svg class="modal-close-icon" width="16" height="16" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.8516 8.59375L16.7378 3.70752C17.3374 3.10791 17.3374 2.13574 16.7378 1.53564L15.6519 0.449707C15.0522 -0.149902 14.0801 -0.149902 13.48 0.449707L8.59375 5.33594L3.70752 0.449707C3.10791 -0.149902 2.13574 -0.149902 1.53564 0.449707L0.449707 1.53564C-0.149902 2.13525 -0.149902 3.10742 0.449707 3.70752L5.33594 8.59375L0.449707 13.48C-0.149902 14.0796 -0.149902 15.0518 0.449707 15.6519L1.53564 16.7378C2.13525 17.3374 3.10791 17.3374 3.70752 16.7378L8.59375 11.8516L13.48 16.7378C14.0796 17.3374 15.0522 17.3374 15.6519 16.7378L16.7378 15.6519C17.3374 15.0522 17.3374 14.0801 16.7378 13.48L11.8516 8.59375Z"></path></svg></div></div><!-- wp:columns {"verticalAlignment":null,"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"left":"0"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column {"width":"42.5%","style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"cozyResponsiveShow":{"desktopShow":true,"tabletShow":true,"tabletViewport":980,"mobileShow":false,"mobileViewport":767}} -->
<div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:42.5%"><!-- wp:image {"id":3027,"width":"auto","height":"500px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-3027" style="width:auto;height:500px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0","padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"left":"26px","right":"26px","top":"0px","bottom":"0px"},"margin":{"top":"0px","bottom":"0px"}},"color":{"background":"#fffffe"},"dimensions":{"minHeight":""}},"className":"cozy-popup-one__form-wrapper","layout":{"type":"constrained","contentSize":"381px"}} -->
<div class="wp-block-group cozy-popup-one__form-wrapper has-background" style="background-color:#fffffe;margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:26px;padding-bottom:0px;padding-left:26px"><!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"#090b10"}}},"color":{"text":"#090b10"},"typography":{"fontSize":"35px","lineHeight":"1.2","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"0"}}},"className":"is-style-default","cozyCustomFont":"Inter"} -->
<h2 class="wp-block-heading has-text-align-center is-style-default has-text-color has-link-color" style="color:#090b10;margin-top:0;font-size:35px;font-style:normal;font-weight:500;line-height:1.2"><?php esc_html_e( '10% Off Your First Order', 'cozy-addons' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px"},"elements":{"link":{"color":{"text":"#646464"}}},"color":{"text":"#646464"}}} -->
<p class="has-text-align-center has-text-color has-link-color" style="color:#646464;font-size:14px"><?php esc_html_e( 'Far far away, behind the word mountains, far from the countries Vocalic and Consonantal, there live the blind texts.', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"26px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:26px"><!-- wp:shortcode -->
[contact-form-7 id="325f512" title="Newsletter with stacked button"]
<!-- /wp:shortcode --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:cozy-block/modal --></div>
<!-- /wp:group -->