<?php
/**
 * Title: Call to Action section five with animation
 * Description: This is call to action section with animation
 * Slug: cozy-block-patterns/cta-five
 * Categories: cozy-block-patterns, call-to-action
 */

$images = array(
	CT_ASSETS_URL . 'images/cta_5.jpg',
);
?>

<!-- wp:cover {"url":"<?php echo esc_url( $images[0] ); ?>","id":2726,"dimRatio":20,"isUserOverlayColor":true,"metadata":{"name":"<?php esc_html_e( 'Call To Action', 'cozy-addons' ); ?>"},"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-cover alignfull" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-20 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2726" alt="" src="<?php echo esc_url( $images[0] ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"top":"80px","bottom":"80px","left":"16px","right":"16px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:80px;padding-right:16px;padding-bottom:80px;padding-left:16px"><!-- wp:group {"style":{"spacing":{"blockGap":"6px"},"elements":{"link":{"color":{"text":"#ebebeb"}}},"color":{"text":"#ebebeb"},"typography":{"fontSize":"14px"}},"layout":{"type":"constrained","contentSize":"733px"}} -->
<div class="wp-block-group has-text-color has-link-color" style="color:#ebebeb;font-size:14px"><!-- wp:heading {"textAlign":"left","style":{"elements":{"link":{"color":{"text":"#fffffe"}}},"color":{"text":"#fffffe"},"typography":{"fontSize":"48px","lineHeight":"1.3","fontStyle":"normal","fontWeight":"600"}},"cozyCustomFont":"Public Sans","cozyAnimation":{"type":"flip-up","easingFunction":"ease-in","anchorPlacement":"top-center","duration":600}} -->
<h2 class="wp-block-heading has-text-align-left has-text-color has-link-color" style="color:#fffffe;font-size:48px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e( 'Let’s Work Together on Your Next Project!', 'cozy-addons' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><?php esc_html_e( 'Frustrated by a slow website? We’ll help you tame those speed demons so you can keep visitors coming back for more!', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"26px"}}},"layout":{"type":"constrained","justifyContent":"left"},"cozyAnimation":{"type":"fade-up","easingFunction":"ease-in","anchorPlacement":"top-center","duration":800}} -->
<div class="wp-block-group" style="margin-top:26px"><!-- wp:cozy-block/icon-list {"blockClientId":"a12fe8d2-e28c-44a2-bf82-30317a939ebf","iconPosition":"right","iconSize":22,"iconColor":"#fffffe","iconColorHover":"#fffffe","iconGap":8,"containerStyles":{"width":119,"height":"","gap":10,"padding":{"top":14,"right":36,"bottom":14,"left":36},"borderType":"none","borderWidth":1,"borderColor":"#000","borderColorHover":"","borderRadius":{"top":100,"right":100,"bottom":100,"left":100},"bgColor":"#f49805","bgColorHover":"#01ae8f"},"typography":{"fontFamily":"","fontSize":16,"color":"#fffffe","colorHover":"#fffffe","fontWeight":"500"}} -->
<ul class="cozy-block-icon-list vertical default fill" id="cozyBlock_a12fe8d2_e28c_44a2_bf82_30317a939ebf"><!-- wp:cozy-block/list-item {"blockClientId":"e12e906b-e27d-4ba4-9d8c-0d8aff342595","iconViewBox":{"vx":"0","vy":"0","vw":"24","vh":"24"},"iconPath":"M19.3651 12.56L14.3851 17.56C14.2251 17.72 14.0251 17.8 13.8251 17.8C13.6251 17.8 13.4251 17.72 13.2651 17.56C12.9451 17.24 12.9451 16.74 13.2651 16.42L16.8851 12.78H5.20511C4.76511 12.78 4.40511 12.42 4.40511 11.98C4.40511 11.54 4.76511 11.18 5.20511 11.18H16.8851L13.2651 7.54001C12.9451 7.22001 12.9451 6.72 13.2651 6.4C13.5851 6.08 14.0851 6.08 14.4051 6.4L19.3851 11.4C19.6851 11.74 19.6851 12.26 19.3651 12.56Z","parentAttrs":{"enableLogo":true,"enableTitle":true,"linkType":"full","linkNewTab":true,"iconPosition":"right"},"title":"<?php esc_html_e( 'Get Started', 'cozy-addons' ); ?>","url":"#"} -->
<div class="list-inline-block"><a href="#" target="_blank" rel="noopener"><li class="cozy-block-list-item" id="cozyBlock_e12e906b_e27d_4ba4_9d8c_0d8aff342595"><p><?php esc_html_e( 'Get Started', 'cozy-addons' ); ?></p><div class="list-icon-wrapper"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M19.3651 12.56L14.3851 17.56C14.2251 17.72 14.0251 17.8 13.8251 17.8C13.6251 17.8 13.4251 17.72 13.2651 17.56C12.9451 17.24 12.9451 16.74 13.2651 16.42L16.8851 12.78H5.20511C4.76511 12.78 4.40511 12.42 4.40511 11.98C4.40511 11.54 4.76511 11.18 5.20511 11.18H16.8851L13.2651 7.54001C12.9451 7.22001 12.9451 6.72 13.2651 6.4C13.5851 6.08 14.0851 6.08 14.4051 6.4L19.3851 11.4C19.6851 11.74 19.6851 12.26 19.3651 12.56Z"></path></svg></div></li></a></div>
<!-- /wp:cozy-block/list-item --></ul>
<!-- /wp:cozy-block/icon-list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->