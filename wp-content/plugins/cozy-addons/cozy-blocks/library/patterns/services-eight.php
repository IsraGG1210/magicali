<?php
/**
 * Title: Services section eight with columns animation
 * Description: This is service section with columns animation
 * Slug: cozy-block-patterns/services-eight
 * Categories: cozy-block-patterns, services
 */

$images = array(
	CT_ASSETS_URL . 'images/services_8_1.png',
	CT_ASSETS_URL . 'images/services_8_2.png',
	CT_ASSETS_URL . 'images/services_8_3.png',
);
?>

<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'Services', 'cozy-addons' ); ?>"},"align":"full","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"color":{"background":"#0a381c"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#0a381c;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0","padding":{"top":"80px","bottom":"80px","left":"16px","right":"16px"}},"elements":{"link":{"color":{"text":"#fffffe"}}},"color":{"text":"#fffffe"}},"layout":{"type":"constrained","contentSize":"1180px"},"cozyCustomFont":"Inter"} -->
<div class="wp-block-group has-text-color has-link-color" style="color:#fffffe;margin-top:0;margin-bottom:0;padding-top:80px;padding-right:16px;padding-bottom:80px;padding-left:16px"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"2px"}},"layout":{"type":"constrained","contentSize":"686px"},"fontSize":"x-small","cozyCustomFont":"Poppins"} -->
<div class="wp-block-group has-x-small-font-size" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"35px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"#fffffe"}}},"color":{"text":"#fffffe"}},"cozyCustomFont":"Inter"} -->
<h2 class="wp-block-heading has-text-align-center has-text-color has-link-color" style="color:#fffffe;font-size:35px;font-style:normal;font-weight:700;text-transform:uppercase"><?php esc_html_e( 'What I Offer', 'cozy-addons' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px"}}} -->
<p class="has-text-align-center" style="font-size:14px"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce placerat sed nunc at laoreet. In ultricies aliquam dui cursus volutpat.', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"44px","bottom":"0"},"blockGap":{"left":"26px"}}}} -->
<div class="wp-block-columns" style="margin-top:44px;margin-bottom:0"><!-- wp:column {"style":{"spacing":{"blockGap":"0"}},"cozyAnimation":{"type":"fade-right","easingFunction":"ease","anchorPlacement":"top-center","duration":1000}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"elements":{"link":{"color":{"text":"#fffffe"}}},"color":{"text":"#fffffe"},"spacing":{"blockGap":"30px","padding":{"right":"16px","left":"16px","top":"40px","bottom":"40px"}},"border":{"color":"#ebebeb80","width":"1px","radius":"10px"}},"layout":{"type":"constrained","contentSize":"310px","justifyContent":"center"},"fontSize":"x-small"} -->
<div class="wp-block-group has-border-color has-text-color has-link-color has-x-small-font-size" style="border-color:#ebebeb80;border-width:1px;border-radius:10px;color:#fffffe;padding-top:40px;padding-right:16px;padding-bottom:40px;padding-left:16px"><!-- wp:image {"id":4319,"width":"50px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-4319" style="width:50px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"6px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"#fffffe"}}},"color":{"text":"#fffffe"},"typography":{"fontSize":"25px","fontStyle":"normal","fontWeight":"600"}},"cozyCustomFont":"Inter"} -->
<h4 class="wp-block-heading has-text-color has-link-color" style="color:#fffffe;font-size:25px;font-style:normal;font-weight:600"><?php esc_html_e( 'Graphics Design', 'cozy-addons' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px"}}} -->
<p style="font-size:14px"><?php esc_html_e( 'Lorem ipsum dolor sit amet consecte tur adipiscing elit integer sit amet consecte tur adipiscing elit fermentum inorci lorem ipsum.', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:cozy-block/icon-list {"blockClientId":"746c2c9c-c7a9-4fb1-946c-659201580361","iconPosition":"right","iconSize":20,"iconColor":"#fffffe","iconColorHover":"#f49805","listStyle":"horizontal","containerStyles":{"width":120,"height":"","gap":15,"borderRadius":{"top":5,"right":5,"bottom":5,"left":5},"bgColor":"","bgColorHover":""},"typography":{"fontFamily":"","fontSize":16,"colorHover":"#f49805","fontWeight":400}} -->
<ul class="cozy-block-icon-list horizontal default fill" id="cozyBlock_746c2c9c_c7a9_4fb1_946c_659201580361"><!-- wp:cozy-block/list-item {"blockClientId":"9118d8fc-4aef-49e4-9602-7d1f1b989028","iconViewBox":{"vx":"0","vy":"0","vw":"24","vh":"24"},"iconPath":"M19.3651 12.56L14.3851 17.56C14.2251 17.72 14.0251 17.8 13.8251 17.8C13.6251 17.8 13.4251 17.72 13.2651 17.56C12.9451 17.24 12.9451 16.74 13.2651 16.42L16.8851 12.78H5.20511C4.76511 12.78 4.40511 12.42 4.40511 11.98C4.40511 11.54 4.76511 11.18 5.20511 11.18H16.8851L13.2651 7.54001C12.9451 7.22001 12.9451 6.72 13.2651 6.4C13.5851 6.08 14.0851 6.08 14.4051 6.4L19.3851 11.4C19.6851 11.74 19.6851 12.26 19.3651 12.56Z","parentAttrs":{"enableLogo":true,"enableTitle":true,"linkType":"full","linkNewTab":true,"iconPosition":"right"},"title":"<?php esc_html_e( 'Read More', 'cozy-addons' ); ?>","url":"#"} -->
<div class="list-inline-block"><a href="#" target="_blank" rel="noopener"><li class="cozy-block-list-item" id="cozyBlock_9118d8fc_4aef_49e4_9602_7d1f1b989028"><p><?php esc_html_e( 'Read More', 'cozy-addons' ); ?></p><div class="list-icon-wrapper"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M19.3651 12.56L14.3851 17.56C14.2251 17.72 14.0251 17.8 13.8251 17.8C13.6251 17.8 13.4251 17.72 13.2651 17.56C12.9451 17.24 12.9451 16.74 13.2651 16.42L16.8851 12.78H5.20511C4.76511 12.78 4.40511 12.42 4.40511 11.98C4.40511 11.54 4.76511 11.18 5.20511 11.18H16.8851L13.2651 7.54001C12.9451 7.22001 12.9451 6.72 13.2651 6.4C13.5851 6.08 14.0851 6.08 14.4051 6.4L19.3851 11.4C19.6851 11.74 19.6851 12.26 19.3651 12.56Z"></path></svg></div></li></a></div>
<!-- /wp:cozy-block/list-item --></ul>
<!-- /wp:cozy-block/icon-list --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"0"}},"cozyAnimation":{"type":"fade-down","easingFunction":"ease","anchorPlacement":"top-center","duration":1000}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"elements":{"link":{"color":{"text":"#fffffe"}}},"color":{"text":"#fffffe"},"spacing":{"blockGap":"30px","padding":{"right":"16px","left":"16px","top":"40px","bottom":"40px"}},"border":{"color":"#ebebeb80","width":"1px","radius":"10px"}},"layout":{"type":"constrained","contentSize":"310px","justifyContent":"center"},"fontSize":"x-small"} -->
<div class="wp-block-group has-border-color has-text-color has-link-color has-x-small-font-size" style="border-color:#ebebeb80;border-width:1px;border-radius:10px;color:#fffffe;padding-top:40px;padding-right:16px;padding-bottom:40px;padding-left:16px"><!-- wp:image {"id":963,"width":"50px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( $images[1] ); ?>" alt="" class="wp-image-963" style="width:50px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"6px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"#fffffe"}}},"color":{"text":"#fffffe"},"typography":{"fontSize":"25px","fontStyle":"normal","fontWeight":"600"}},"cozyCustomFont":"Inter"} -->
<h4 class="wp-block-heading has-text-color has-link-color" style="color:#fffffe;font-size:25px;font-style:normal;font-weight:600"><?php esc_html_e( 'Social Media Marketing', 'cozy-addons' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px"}}} -->
<p style="font-size:14px"><?php esc_html_e( 'Lorem ipsum dolor sit amet consecte tur adipiscing elit integer sit amet consecte tur adipiscing elit fermentum inorci lorem ipsum.', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:cozy-block/icon-list {"blockClientId":"b8d7eac9-874f-4c3e-9891-6a7dc23df5c7","iconPosition":"right","iconSize":20,"iconColor":"#fffffe","iconColorHover":"#f49805","listStyle":"horizontal","containerStyles":{"width":120,"height":"","gap":15,"borderRadius":{"top":5,"right":5,"bottom":5,"left":5},"bgColor":"","bgColorHover":""},"typography":{"fontFamily":"","fontSize":16,"colorHover":"#f49805","fontWeight":400}} -->
<ul class="cozy-block-icon-list horizontal default fill" id="cozyBlock_b8d7eac9_874f_4c3e_9891_6a7dc23df5c7"><!-- wp:cozy-block/list-item {"blockClientId":"273b9db2-8de0-4d98-aa6a-21c84ebdc500","iconViewBox":{"vx":"0","vy":"0","vw":"24","vh":"24"},"iconPath":"M19.3651 12.56L14.3851 17.56C14.2251 17.72 14.0251 17.8 13.8251 17.8C13.6251 17.8 13.4251 17.72 13.2651 17.56C12.9451 17.24 12.9451 16.74 13.2651 16.42L16.8851 12.78H5.20511C4.76511 12.78 4.40511 12.42 4.40511 11.98C4.40511 11.54 4.76511 11.18 5.20511 11.18H16.8851L13.2651 7.54001C12.9451 7.22001 12.9451 6.72 13.2651 6.4C13.5851 6.08 14.0851 6.08 14.4051 6.4L19.3851 11.4C19.6851 11.74 19.6851 12.26 19.3651 12.56Z","parentAttrs":{"enableLogo":true,"enableTitle":true,"linkType":"full","linkNewTab":true,"iconPosition":"right"},"title":"<?php esc_html_e( 'Read More', 'cozy-addons' ); ?>","url":"#"} -->
<div class="list-inline-block"><a href="#" target="_blank" rel="noopener"><li class="cozy-block-list-item" id="cozyBlock_273b9db2_8de0_4d98_aa6a_21c84ebdc500"><p><?php esc_html_e( 'Read More', 'cozy-addons' ); ?></p><div class="list-icon-wrapper"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M19.3651 12.56L14.3851 17.56C14.2251 17.72 14.0251 17.8 13.8251 17.8C13.6251 17.8 13.4251 17.72 13.2651 17.56C12.9451 17.24 12.9451 16.74 13.2651 16.42L16.8851 12.78H5.20511C4.76511 12.78 4.40511 12.42 4.40511 11.98C4.40511 11.54 4.76511 11.18 5.20511 11.18H16.8851L13.2651 7.54001C12.9451 7.22001 12.9451 6.72 13.2651 6.4C13.5851 6.08 14.0851 6.08 14.4051 6.4L19.3851 11.4C19.6851 11.74 19.6851 12.26 19.3651 12.56Z"></path></svg></div></li></a></div>
<!-- /wp:cozy-block/list-item --></ul>
<!-- /wp:cozy-block/icon-list --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"0"}},"cozyAnimation":{"type":"fade-left","easingFunction":"ease","anchorPlacement":"top-center","duration":1000}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"elements":{"link":{"color":{"text":"#fffffe"}}},"color":{"text":"#fffffe"},"spacing":{"blockGap":"30px","padding":{"right":"16px","left":"16px","top":"40px","bottom":"40px"}},"border":{"color":"#ebebeb80","width":"1px","radius":"10px"}},"layout":{"type":"constrained","contentSize":"310px","justifyContent":"center"},"fontSize":"x-small"} -->
<div class="wp-block-group has-border-color has-text-color has-link-color has-x-small-font-size" style="border-color:#ebebeb80;border-width:1px;border-radius:10px;color:#fffffe;padding-top:40px;padding-right:16px;padding-bottom:40px;padding-left:16px"><!-- wp:image {"id":964,"width":"50px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( $images[2] ); ?>" alt="" class="wp-image-964" style="width:50px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"6px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"#fffffe"}}},"color":{"text":"#fffffe"},"typography":{"fontSize":"25px","fontStyle":"normal","fontWeight":"600"}},"cozyCustomFont":"Inter"} -->
<h4 class="wp-block-heading has-text-color has-link-color" style="color:#fffffe;font-size:25px;font-style:normal;font-weight:600"><?php esc_html_e( 'Content Writing', 'cozy-addons' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px"}}} -->
<p style="font-size:14px"><?php esc_html_e( 'Lorem ipsum dolor sit amet consecte tur adipiscing elit integer sit amet consecte tur adipiscing elit fermentum inorci lorem ipsum.', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:cozy-block/icon-list {"blockClientId":"5f5b3814-4ab3-4196-b5d7-dc4f69615966","iconPosition":"right","iconSize":20,"iconColor":"#fffffe","iconColorHover":"#f49805","listStyle":"horizontal","containerStyles":{"width":120,"height":"","gap":15,"borderRadius":{"top":5,"right":5,"bottom":5,"left":5},"bgColor":"","bgColorHover":""},"typography":{"fontFamily":"","fontSize":16,"colorHover":"#f49805","fontWeight":400}} -->
<ul class="cozy-block-icon-list horizontal default fill" id="cozyBlock_5f5b3814_4ab3_4196_b5d7_dc4f69615966"><!-- wp:cozy-block/list-item {"blockClientId":"f98b89b1-738e-404e-a3a6-3aa4b488cbba","iconViewBox":{"vx":"0","vy":"0","vw":"24","vh":"24"},"iconPath":"M19.3651 12.56L14.3851 17.56C14.2251 17.72 14.0251 17.8 13.8251 17.8C13.6251 17.8 13.4251 17.72 13.2651 17.56C12.9451 17.24 12.9451 16.74 13.2651 16.42L16.8851 12.78H5.20511C4.76511 12.78 4.40511 12.42 4.40511 11.98C4.40511 11.54 4.76511 11.18 5.20511 11.18H16.8851L13.2651 7.54001C12.9451 7.22001 12.9451 6.72 13.2651 6.4C13.5851 6.08 14.0851 6.08 14.4051 6.4L19.3851 11.4C19.6851 11.74 19.6851 12.26 19.3651 12.56Z","parentAttrs":{"enableLogo":true,"enableTitle":true,"linkType":"full","linkNewTab":true,"iconPosition":"right"},"title":"<?php esc_html_e( 'Read More', 'cozy-addons' ); ?>","url":"#"} -->
<div class="list-inline-block"><a href="#" target="_blank" rel="noopener"><li class="cozy-block-list-item" id="cozyBlock_f98b89b1_738e_404e_a3a6_3aa4b488cbba"><p><?php esc_html_e( 'Read More', 'cozy-addons' ); ?></p><div class="list-icon-wrapper"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M19.3651 12.56L14.3851 17.56C14.2251 17.72 14.0251 17.8 13.8251 17.8C13.6251 17.8 13.4251 17.72 13.2651 17.56C12.9451 17.24 12.9451 16.74 13.2651 16.42L16.8851 12.78H5.20511C4.76511 12.78 4.40511 12.42 4.40511 11.98C4.40511 11.54 4.76511 11.18 5.20511 11.18H16.8851L13.2651 7.54001C12.9451 7.22001 12.9451 6.72 13.2651 6.4C13.5851 6.08 14.0851 6.08 14.4051 6.4L19.3851 11.4C19.6851 11.74 19.6851 12.26 19.3651 12.56Z"></path></svg></div></li></a></div>
<!-- /wp:cozy-block/list-item --></ul>
<!-- /wp:cozy-block/icon-list --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->