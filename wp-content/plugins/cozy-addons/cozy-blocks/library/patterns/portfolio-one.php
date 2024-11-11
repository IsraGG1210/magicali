<?php
/**
 * Title: Portfolio section one with images
 * Description: This is portfolio with image hover effect
 * Slug: cozy-block-patterns/portfolio-one
 * Categories: cozy-block-patterns, portfolio, gallery
 */

$images = array(
	CT_ASSETS_URL . 'images/portfolio_1_1.jpg',
	CT_ASSETS_URL . 'images/portfolio_1_2.jpg',
	CT_ASSETS_URL . 'images/portfolio_1_3.jpg',
);

?>

<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'Portfolio', 'cozy-addons' ); ?>"},"style":{"color":{"background":"#fffffe"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"className":"cozy-block-pattern__portfolio-one","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group cozy-block-pattern__portfolio-one has-background" style="background-color:#fffffe;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"80px","bottom":"80px","left":"16px","right":"16px"}}},"layout":{"type":"constrained","contentSize":"1180px"},"cozyCustomFont":"Public Sans"} -->
<div class="wp-block-group alignfull" style="padding-top:80px;padding-right:16px;padding-bottom:80px;padding-left:16px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"align":"center","style":{"color":{"text":"#3620be"},"elements":{"link":{"color":{"text":"#3620be"}}},"typography":{"fontSize":"14px","lineHeight":"1.2","fontStyle":"normal","fontWeight":"500","textTransform":"uppercase"}}} -->
<p class="has-text-align-center has-text-color has-link-color" style="color:#3620be;font-size:14px;font-style:normal;font-weight:500;line-height:1.2;text-transform:uppercase"><?php esc_html_e( 'Our Portfolio', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":4,"style":{"elements":{"link":{"color":{"text":"#090b10"}}},"typography":{"fontSize":"44px","lineHeight":"1.3","fontStyle":"normal","fontWeight":"600"},"color":{"text":"#090b10"}},"cozyCustomFont":"Inter"} -->
<h4 class="wp-block-heading has-text-align-center has-text-color has-link-color" style="color:#090b10;font-size:44px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e( 'Our Latest Works', 'cozy-addons' ); ?></h4>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"26px","bottom":"0"}}}} -->
<div class="wp-block-columns" style="margin-top:26px;margin-bottom:0"><!-- wp:column {"style":{"spacing":{"blockGap":"0"}},"className":"cozy-portfolio-one__wrapper","cozyAnimation":{"type":"flip-right","easingFunction":"ease","anchorPlacement":"top-center","duration":800}} -->
<div class="wp-block-column cozy-portfolio-one__wrapper"><!-- wp:image {"id":488,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-488"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"cozy-portfolio-one__wrapper","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group cozy-portfolio-one__wrapper"><!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"#090b10"},":hover":{"color":{"text":"#ff9900"}}}},"color":{"text":"#090b10"},"spacing":{"margin":{"top":"8px"}}},"cozyCustomFont":"Inter"} -->
<h4 class="wp-block-heading has-text-color has-link-color" style="color:#090b10;margin-top:8px;font-size:20px;font-style:normal;font-weight:500"><a href="#"><?php esc_html_e( 'Illustration and Art', 'cozy-addons' ); ?></a></h4>
<!-- /wp:heading -->

<!-- wp:cozy-block/icon-picker {"blockClientId":"43c8454a-b374-4b46-9cbd-6c55e130a137","view":"stacked","iconSize":26,"iconViewBox":{"vx":"0","vy":"0","vw":"44","vh":"24"},"iconPath":"M43.0607 13.0607C43.6464 12.4749 43.6464 11.5251 43.0607 10.9393L33.5147 1.3934C32.9289 0.807611 31.9792 0.807611 31.3934 1.3934C30.8076 1.97919 30.8076 2.92893 31.3934 3.51472L39.8787 12L31.3934 20.4853C30.8076 21.0711 30.8076 22.0208 31.3934 22.6066C31.9792 23.1924 32.9289 23.1924 33.5147 22.6066L43.0607 13.0607ZM0 13.5H42V10.5H0V13.5Z","iconColor":"#ff9900","boxStyles":{"padding":{"top":0,"right":0,"bottom":0,"left":0},"borderType":"none","borderWidth":1,"borderColor":"#000","borderColorHover":"","borderRadius":50,"bgColorHover":""}} -->
<div class="cozy-block-icon-picker stacked" id="cozyBlock_43c8454a_b374_4b46_9cbd_6c55e130a137"><svg width="26" height="26" viewBox="0 0 44 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#ff9900"><path d="M43.0607 13.0607C43.6464 12.4749 43.6464 11.5251 43.0607 10.9393L33.5147 1.3934C32.9289 0.807611 31.9792 0.807611 31.3934 1.3934C30.8076 1.97919 30.8076 2.92893 31.3934 3.51472L39.8787 12L31.3934 20.4853C30.8076 21.0711 30.8076 22.0208 31.3934 22.6066C31.9792 23.1924 32.9289 23.1924 33.5147 22.6066L43.0607 13.0607ZM0 13.5H42V10.5H0V13.5Z"></path></svg></div>
<!-- /wp:cozy-block/icon-picker --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"0"}},"className":"cozy-portfolio-one__wrapper","cozyAnimation":{"type":"fade-up","easingFunction":"ease","anchorPlacement":"top-center","duration":1000}} -->
<div class="wp-block-column cozy-portfolio-one__wrapper"><!-- wp:image {"id":488,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $images[1] ); ?>" alt="" class="wp-image-488"/></figure>
<!-- /wp:image -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"#090b10"},":hover":{"color":{"text":"#ff9900"}}}},"color":{"text":"#090b10"},"spacing":{"margin":{"top":"8px"}}},"cozyCustomFont":"Inter"} -->
<h4 class="wp-block-heading has-text-color has-link-color" style="color:#090b10;margin-top:8px;font-size:20px;font-style:normal;font-weight:500"><a href="#"><?php esc_html_e( 'Illustration and Art', 'cozy-addons' ); ?></a></h4>
<!-- /wp:heading -->

<!-- wp:cozy-block/icon-picker {"blockClientId":"975abb0c-8b01-4015-a602-43d4dba7c563","view":"stacked","iconSize":26,"iconViewBox":{"vx":"0","vy":"0","vw":"44","vh":"24"},"iconPath":"M43.0607 13.0607C43.6464 12.4749 43.6464 11.5251 43.0607 10.9393L33.5147 1.3934C32.9289 0.807611 31.9792 0.807611 31.3934 1.3934C30.8076 1.97919 30.8076 2.92893 31.3934 3.51472L39.8787 12L31.3934 20.4853C30.8076 21.0711 30.8076 22.0208 31.3934 22.6066C31.9792 23.1924 32.9289 23.1924 33.5147 22.6066L43.0607 13.0607ZM0 13.5H42V10.5H0V13.5Z","iconColor":"#ff9900","boxStyles":{"padding":{"top":0,"right":0,"bottom":0,"left":0},"borderType":"none","borderWidth":1,"borderColor":"#000","borderColorHover":"","borderRadius":50,"bgColorHover":""}} -->
<div class="cozy-block-icon-picker stacked" id="cozyBlock_975abb0c_8b01_4015_a602_43d4dba7c563"><svg width="26" height="26" viewBox="0 0 44 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#ff9900"><path d="M43.0607 13.0607C43.6464 12.4749 43.6464 11.5251 43.0607 10.9393L33.5147 1.3934C32.9289 0.807611 31.9792 0.807611 31.3934 1.3934C30.8076 1.97919 30.8076 2.92893 31.3934 3.51472L39.8787 12L31.3934 20.4853C30.8076 21.0711 30.8076 22.0208 31.3934 22.6066C31.9792 23.1924 32.9289 23.1924 33.5147 22.6066L43.0607 13.0607ZM0 13.5H42V10.5H0V13.5Z"></path></svg></div>
<!-- /wp:cozy-block/icon-picker --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"0"}},"className":"cozy-portfolio-one__wrapper","cozyAnimation":{"type":"flip-left","easingFunction":"ease","anchorPlacement":"top-center","duration":800}} -->
<div class="wp-block-column cozy-portfolio-one__wrapper"><!-- wp:image {"id":488,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $images[2] ); ?>" alt="" class="wp-image-488"/></figure>
<!-- /wp:image -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"#090b10"},":hover":{"color":{"text":"#ff9900"}}}},"color":{"text":"#090b10"},"spacing":{"margin":{"top":"8px"}}},"cozyCustomFont":"Inter"} -->
<h4 class="wp-block-heading has-text-color has-link-color" style="color:#090b10;margin-top:8px;font-size:20px;font-style:normal;font-weight:500"><a href="#"><?php esc_html_e( 'Illustration and Art', 'cozy-addons' ); ?></a></h4>
<!-- /wp:heading -->

<!-- wp:cozy-block/icon-picker {"blockClientId":"c0d32177-86f6-4238-baa8-fc64786e2bf6","view":"stacked","iconSize":26,"iconViewBox":{"vx":"0","vy":"0","vw":"44","vh":"24"},"iconPath":"M43.0607 13.0607C43.6464 12.4749 43.6464 11.5251 43.0607 10.9393L33.5147 1.3934C32.9289 0.807611 31.9792 0.807611 31.3934 1.3934C30.8076 1.97919 30.8076 2.92893 31.3934 3.51472L39.8787 12L31.3934 20.4853C30.8076 21.0711 30.8076 22.0208 31.3934 22.6066C31.9792 23.1924 32.9289 23.1924 33.5147 22.6066L43.0607 13.0607ZM0 13.5H42V10.5H0V13.5Z","iconColor":"#ff9900","boxStyles":{"padding":{"top":0,"right":0,"bottom":0,"left":0},"borderType":"none","borderWidth":1,"borderColor":"#000","borderColorHover":"","borderRadius":50,"bgColorHover":""}} -->
<div class="cozy-block-icon-picker stacked" id="cozyBlock_c0d32177_86f6_4238_baa8_fc64786e2bf6"><svg width="26" height="26" viewBox="0 0 44 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#ff9900"><path d="M43.0607 13.0607C43.6464 12.4749 43.6464 11.5251 43.0607 10.9393L33.5147 1.3934C32.9289 0.807611 31.9792 0.807611 31.3934 1.3934C30.8076 1.97919 30.8076 2.92893 31.3934 3.51472L39.8787 12L31.3934 20.4853C30.8076 21.0711 30.8076 22.0208 31.3934 22.6066C31.9792 23.1924 32.9289 23.1924 33.5147 22.6066L43.0607 13.0607ZM0 13.5H42V10.5H0V13.5Z"></path></svg></div>
<!-- /wp:cozy-block/icon-picker --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"26px","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"184px"}} -->
<div class="wp-block-group" style="margin-top:26px;margin-bottom:0"><!-- wp:cozy-block/icon-list {"blockClientId":"b79396da-3103-418c-b2a6-97a60e16264e","iconPosition":"right","iconSize":22,"iconColor":"#fffffe","listStyle":"horizontal","containerStyles":{"width":"","height":"","gap":0,"padding":{"top":12,"right":24,"bottom":12,"left":24},"borderType":"none","borderWidth":1,"borderColor":"#000","borderColorHover":"","borderRadius":{"top":100,"right":100,"bottom":100,"left":100},"bgColor":"#3620be","bgColorHover":"#ff9900"},"typography":{"fontFamily":"","fontSize":16,"color":"#fffffe","colorHover":"","fontWeight":400}} -->
<ul class="cozy-block-icon-list horizontal default fill" id="cozyBlock_b79396da_3103_418c_b2a6_97a60e16264e"><!-- wp:cozy-block/list-item {"blockClientId":"002cdbca-cc70-45f8-9faa-c17d3f1e6d38","iconViewBox":{"vx":"0","vy":"0","vw":"24","vh":"24"},"iconPath":"M19.3651 12.56L14.3851 17.56C14.2251 17.72 14.0251 17.8 13.8251 17.8C13.6251 17.8 13.4251 17.72 13.2651 17.56C12.9451 17.24 12.9451 16.74 13.2651 16.42L16.8851 12.78H5.20511C4.76511 12.78 4.40511 12.42 4.40511 11.98C4.40511 11.54 4.76511 11.18 5.20511 11.18H16.8851L13.2651 7.54001C12.9451 7.22001 12.9451 6.72 13.2651 6.4C13.5851 6.08 14.0851 6.08 14.4051 6.4L19.3851 11.4C19.6851 11.74 19.6851 12.26 19.3651 12.56Z","parentAttrs":{"enableLogo":true,"enableTitle":true,"linkType":"full","linkNewTab":true,"iconPosition":"right"},"title":"<?php esc_html_e( 'View All Work', 'cozy-addons' ); ?>","url":"#"} -->
<div class="list-inline-block"><a href="#" target="_blank" rel="noopener"><li class="cozy-block-list-item" id="cozyBlock_002cdbca_cc70_45f8_9faa_c17d3f1e6d38"><p><?php esc_html_e( 'View All Work', 'cozy-addons' ); ?></p><div class="list-icon-wrapper"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M19.3651 12.56L14.3851 17.56C14.2251 17.72 14.0251 17.8 13.8251 17.8C13.6251 17.8 13.4251 17.72 13.2651 17.56C12.9451 17.24 12.9451 16.74 13.2651 16.42L16.8851 12.78H5.20511C4.76511 12.78 4.40511 12.42 4.40511 11.98C4.40511 11.54 4.76511 11.18 5.20511 11.18H16.8851L13.2651 7.54001C12.9451 7.22001 12.9451 6.72 13.2651 6.4C13.5851 6.08 14.0851 6.08 14.4051 6.4L19.3851 11.4C19.6851 11.74 19.6851 12.26 19.3651 12.56Z"></path></svg></div></li></a></div>
<!-- /wp:cozy-block/list-item --></ul>
<!-- /wp:cozy-block/icon-list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->