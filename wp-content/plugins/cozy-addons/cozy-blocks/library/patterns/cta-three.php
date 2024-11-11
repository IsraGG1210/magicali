<?php
/**
 * Title: Call to Action section three with animation
 * Description: This is call to action section with animation
 * Slug: cozy-block-patterns/cta-three
 * Categories: cozy-block-patterns, call-to-action
 */

$images = array(
	CT_ASSETS_URL . 'images/cta_3.jpg',
);
?>

<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'Call To Action', 'cozy-addons' ); ?>"},"align":"full","style":{"color":{"background":"#01102e"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#01102e;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"var:preset|spacing|40","left":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:cover {"url":"<?php echo esc_url( $images[0] ); ?>","id":2735,"dimRatio":0,"isUserOverlayColor":true,"minHeight":650,"minHeightUnit":"px","isDark":false,"style":{"spacing":{"padding":{"top":"120px","bottom":"120px"}}},"layout":{"type":"constrained","wideSize":"%","contentSize":""},"cozyAnimation":{"type":"zoom-in-up","easingFunction":"ease-in","anchorPlacement":"top-bottom","duration":600}} -->
<div class="wp-block-cover is-light" style="padding-top:120px;padding-bottom:120px;min-height:650px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2735" alt="" src="<?php echo esc_url( $images[0] ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;padding-bottom:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"60px","bottom":"60px","left":"16px","right":"16px"},"blockGap":"0px","margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"#ebebeb"}}},"color":{"text":"#ebebeb"},"typography":{"fontSize":"14px"}},"layout":{"type":"constrained","contentSize":"547px"},"cozyCustomFont":"Poppins"} -->
<div class="wp-block-group has-text-color has-link-color" style="color:#ebebeb;margin-top:0;margin-bottom:0;padding-top:60px;padding-right:16px;padding-bottom:60px;padding-left:16px;font-size:14px"><!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","lineHeight":"1.2"},"color":{"text":"#0d5fff"},"elements":{"link":{"color":{"text":"#0d5fff"}}}}} -->
<p class="has-text-color has-link-color" style="color:#0d5fff;font-size:14px;font-style:normal;font-weight:600;line-height:1.2;text-transform:uppercase"><?php esc_html_e( 'Call To Action', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","style":{"elements":{"link":{"color":{"text":"#fffffe"}}},"color":{"text":"#fffffe"},"typography":{"fontSize":"48px","lineHeight":"1.2","fontStyle":"normal","fontWeight":"600"}},"cozyCustomFont":"Public Sans","cozyAnimation":{"type":"flip-up","easingFunction":"ease-in","anchorPlacement":"top-bottom","duration":600}} -->
<h2 class="wp-block-heading has-text-align-left has-text-color has-link-color" style="color:#fffffe;font-size:48px;font-style:normal;font-weight:600;line-height:1.2"><?php esc_html_e( 'Let’s Work Together on Your Next Project!', 'cozy-addons' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"top":"6px"}}}} -->
<p class="has-text-align-left" style="margin-top:6px">
<?php esc_html_e( 'Frustrated by a slow website? We’ll help you tame those speed demons so you can keep visitors coming back for more!', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"26px","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:26px;margin-bottom:0"><!-- wp:cozy-block/icon-list {"blockClientId":"94fddecd-eef2-483d-b539-62068b9e3c7c","iconPosition":"right","iconSize":22,"iconColor":"#fffffe","iconColorHover":"#fffffe","iconGap":8,"containerStyles":{"width":122,"height":"","gap":10,"padding":{"top":14,"right":36,"bottom":14,"left":36},"borderType":"none","borderWidth":1,"borderColor":"#000","borderColorHover":"","borderRadius":{"top":100,"right":100,"bottom":100,"left":100},"bgColor":"#0d5fff","bgColorHover":"#01ae8f"},"typography":{"fontFamily":"","fontSize":16,"color":"#fffffe","colorHover":"#fffffe","fontWeight":"500"}} -->
<ul class="cozy-block-icon-list vertical default fill" id="cozyBlock_94fddecd_eef2_483d_b539_62068b9e3c7c"><!-- wp:cozy-block/list-item {"blockClientId":"e9518ebf-996e-4cf5-93c5-c6101d49421e","iconViewBox":{"vx":"0","vy":"0","vw":"24","vh":"24"},"iconPath":"M19.3651 12.56L14.3851 17.56C14.2251 17.72 14.0251 17.8 13.8251 17.8C13.6251 17.8 13.4251 17.72 13.2651 17.56C12.9451 17.24 12.9451 16.74 13.2651 16.42L16.8851 12.78H5.20511C4.76511 12.78 4.40511 12.42 4.40511 11.98C4.40511 11.54 4.76511 11.18 5.20511 11.18H16.8851L13.2651 7.54001C12.9451 7.22001 12.9451 6.72 13.2651 6.4C13.5851 6.08 14.0851 6.08 14.4051 6.4L19.3851 11.4C19.6851 11.74 19.6851 12.26 19.3651 12.56Z","parentAttrs":{"enableLogo":true,"enableTitle":true,"linkType":"full","linkNewTab":true,"iconPosition":"right"},"title":"<?php esc_html_e( 'Get Started', 'cozy-addons' ); ?>","url":"#"} -->
<div class="list-inline-block"><a href="#" target="_blank" rel="noopener"><li class="cozy-block-list-item" id="cozyBlock_e9518ebf_996e_4cf5_93c5_c6101d49421e"><p><?php esc_html_e( 'Get Started', 'cozy-addons' ); ?></p><div class="list-icon-wrapper"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M19.3651 12.56L14.3851 17.56C14.2251 17.72 14.0251 17.8 13.8251 17.8C13.6251 17.8 13.4251 17.72 13.2651 17.56C12.9451 17.24 12.9451 16.74 13.2651 16.42L16.8851 12.78H5.20511C4.76511 12.78 4.40511 12.42 4.40511 11.98C4.40511 11.54 4.76511 11.18 5.20511 11.18H16.8851L13.2651 7.54001C12.9451 7.22001 12.9451 6.72 13.2651 6.4C13.5851 6.08 14.0851 6.08 14.4051 6.4L19.3851 11.4C19.6851 11.74 19.6851 12.26 19.3651 12.56Z"></path></svg></div></li></a></div>
<!-- /wp:cozy-block/list-item --></ul>
<!-- /wp:cozy-block/icon-list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->