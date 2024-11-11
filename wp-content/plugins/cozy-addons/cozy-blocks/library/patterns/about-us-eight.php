<?php
	/**
	 * Title: About us section eight with columns and list
	 * Description: This is about section with columns and icon list.
	 * Slug: cozy-block-patterns/about-us-eight
	 * Categories: cozy-block-patterns, about-us
	 */

	$images = array(
		CT_ASSETS_URL . 'images/about-us_8_1.jpg',
	);

	?>

<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'About Us', 'cozy-addons' ); ?>"},"align":"full","style":{"color":{"background":"#f7f6ff"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#f7f6ff;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","bottom":"80px","left":"16px","right":"16px"},"blockGap":"0","margin":{"top":"0","bottom":"0"}},"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}},"typography":{"fontSize":"16px"}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-text-color has-link-color" style="color:#090b10;margin-top:0;margin-bottom:0;padding-top:80px;padding-right:16px;padding-bottom:80px;padding-left:16px;font-size:16px"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"36px","left":"26px"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0","padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"default"},"cozyAnimation":{"type":"zoom-in-up","easingFunction":"ease-in","anchorPlacement":"top-bottom","duration":1000}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":1890,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-1890" style="object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0"}},"cozyCustomFont":"Public Sans"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#3620be"}}},"color":{"text":"#3620be"},"typography":{"fontSize":"14px","textTransform":"uppercase"}}} -->
<p class="has-text-color has-link-color" style="color:#3620be;font-size:14px;text-transform:uppercase"><?php esc_html_e( 'About Us', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"lineHeight":"1.2","fontSize":"40px","fontStyle":"normal","fontWeight":"600"},"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}}},"cozyCustomFont":"Inter","cozyAnimation":{"type":"flip-up","easingFunction":"ease-in","anchorPlacement":"top-bottom","duration":600}} -->
<h2 class="wp-block-heading has-text-color has-link-color" style="color:#090b10;font-size:40px;font-style:normal;font-weight:600;line-height:1.2"><?php esc_html_e( 'Navigating challenges, delivering results.', 'cozy-addons' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5","fontSize":"14px"},"spacing":{"margin":{"top":"8px","bottom":"16px"}},"color":{"text":"#646464"},"elements":{"link":{"color":{"text":"#646464"}}}}} -->
<p class="has-text-color has-link-color" style="color:#646464;margin-top:8px;margin-bottom:16px;font-size:14px;line-height:1.5"><?php esc_html_e( 'Far far away, behind the word mountains, far from the countries Vocalic and Consonantal, there live the blind texts. Separated they live in Bookmarks grove right at the coast of the Semantics, a large language ocean.', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"constrained"},"cozyCustomFont":"Inter"} -->
<div class="wp-block-group"><!-- wp:cozy-block/icon-list {"blockClientId":"ae8a8d76-07c4-4633-809c-720dcf7e82e4","iconColor":"#3620be","iconColorHover":"#f49805","containerStyles":{"width":"","height":"","gap":10,"borderRadius":{"top":5,"right":5,"bottom":5,"left":5},"bgColor":"","bgColorHover":""},"typography":{"fontFamily":"","fontSize":16,"color":"#000","colorHover":"","fontWeight":"500"}} -->
<ul class="cozy-block-icon-list vertical default fill" id="cozyBlock_ae8a8d76_07c4_4633_809c_720dcf7e82e4"><!-- wp:cozy-block/list-item {"blockClientId":"1d39c5b0-524e-453d-9c59-992d2fa88fc5","parentAttrs":{"enableLogo":true,"enableTitle":true,"linkType":"full","linkNewTab":true,"iconPosition":"left"},"title":"<?php esc_html_e( 'Where Health Meets Happiness.', 'cozy-addons' ); ?>"} -->
<div class="list-inline-block"><li class="cozy-block-list-item" id="cozyBlock_1d39c5b0_524e_453d_9c59_992d2fa88fc5"><div class="list-icon-wrapper"><svg viewBox="0 0 25 19" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M8.4911 18.2766L0.366101 10.1516C-0.122034 9.66351 -0.122034 8.87206 0.366101 8.38387L2.13383 6.6161C2.62196 6.12792 3.41346 6.12792 3.9016 6.6161L9.37499 12.0894L21.0984 0.366101C21.5865 -0.122034 22.378 -0.122034 22.8662 0.366101L24.6339 2.13387C25.122 2.62201 25.122 3.41346 24.6339 3.90165L10.2589 18.2767C9.77069 18.7648 8.97924 18.7648 8.4911 18.2766Z"></path></svg></div><p><?php esc_html_e( 'Where Health Meets Happiness.', 'cozy-addons' ); ?></p></li></div>
<!-- /wp:cozy-block/list-item -->

<!-- wp:cozy-block/list-item {"blockClientId":"4ce62632-0dd7-4569-a22f-f071cdf8bdd5","parentAttrs":{"enableLogo":true,"enableTitle":true,"linkType":"full","linkNewTab":true,"iconPosition":"left"},"title":"<?php esc_html_e( 'Discover Wellness, Embrace Life.', 'cozy-addons' ); ?>"} -->
<div class="list-inline-block"><li class="cozy-block-list-item" id="cozyBlock_4ce62632_0dd7_4569_a22f_f071cdf8bdd5"><div class="list-icon-wrapper"><svg viewBox="0 0 25 19" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M8.4911 18.2766L0.366101 10.1516C-0.122034 9.66351 -0.122034 8.87206 0.366101 8.38387L2.13383 6.6161C2.62196 6.12792 3.41346 6.12792 3.9016 6.6161L9.37499 12.0894L21.0984 0.366101C21.5865 -0.122034 22.378 -0.122034 22.8662 0.366101L24.6339 2.13387C25.122 2.62201 25.122 3.41346 24.6339 3.90165L10.2589 18.2767C9.77069 18.7648 8.97924 18.7648 8.4911 18.2766Z"></path></svg></div><p><?php esc_html_e( 'Discover Wellness, Embrace Life.', 'cozy-addons' ); ?></p></li></div>
<!-- /wp:cozy-block/list-item -->

<!-- wp:cozy-block/list-item {"blockClientId":"107dc02d-e8b5-42a0-808b-c668e92e92b6","parentAttrs":{"enableLogo":true,"enableTitle":true,"linkType":"full","linkNewTab":true,"iconPosition":"left"},"title":"<?php esc_html_e( 'Transforming Lives Through Better Health.', 'cozy-addons' ); ?>"} -->
<div class="list-inline-block"><li class="cozy-block-list-item" id="cozyBlock_107dc02d_e8b5_42a0_808b_c668e92e92b6"><div class="list-icon-wrapper"><svg viewBox="0 0 25 19" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M8.4911 18.2766L0.366101 10.1516C-0.122034 9.66351 -0.122034 8.87206 0.366101 8.38387L2.13383 6.6161C2.62196 6.12792 3.41346 6.12792 3.9016 6.6161L9.37499 12.0894L21.0984 0.366101C21.5865 -0.122034 22.378 -0.122034 22.8662 0.366101L24.6339 2.13387C25.122 2.62201 25.122 3.41346 24.6339 3.90165L10.2589 18.2767C9.77069 18.7648 8.97924 18.7648 8.4911 18.2766Z"></path></svg></div><p><?php esc_html_e( 'Transforming Lives Through Better Health.', 'cozy-addons' ); ?></p></li></div>
<!-- /wp:cozy-block/list-item --></ul>
<!-- /wp:cozy-block/icon-list --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"26px"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:26px"><!-- wp:cozy-block/icon-list {"blockClientId":"d9ceed8f-2653-4761-8a4f-53177b707e1d","iconPosition":"right","iconSize":22,"iconColor":"#fffffe","iconColorHover":"#fffffe","iconGap":8,"containerStyles":{"width":111,"height":"","gap":10,"padding":{"top":14,"right":26,"bottom":14,"left":26},"borderType":"none","borderWidth":1,"borderColor":"#000","borderColorHover":"","borderRadius":{"top":100,"right":100,"bottom":100,"left":100},"bgColor":"#3620be","bgColorHover":"#ff9900"},"typography":{"fontFamily":"","fontSize":16,"color":"#fffffe","colorHover":"#fffffe","fontWeight":400}} -->
<ul class="cozy-block-icon-list vertical default fill" id="cozyBlock_d9ceed8f_2653_4761_8a4f_53177b707e1d"><!-- wp:cozy-block/list-item {"blockClientId":"dea8cfd2-c921-40bd-8d7f-db86f362caaa","iconViewBox":{"vx":"0","vy":"0","vw":"24","vh":"24"},"iconPath":"M19.3651 12.56L14.3851 17.56C14.2251 17.72 14.0251 17.8 13.8251 17.8C13.6251 17.8 13.4251 17.72 13.2651 17.56C12.9451 17.24 12.9451 16.74 13.2651 16.42L16.8851 12.78H5.20511C4.76511 12.78 4.40511 12.42 4.40511 11.98C4.40511 11.54 4.76511 11.18 5.20511 11.18H16.8851L13.2651 7.54001C12.9451 7.22001 12.9451 6.72 13.2651 6.4C13.5851 6.08 14.0851 6.08 14.4051 6.4L19.3851 11.4C19.6851 11.74 19.6851 12.26 19.3651 12.56Z","parentAttrs":{"enableLogo":true,"enableTitle":true,"linkType":"full","linkNewTab":true,"iconPosition":"right"},"title":"<?php esc_html_e( 'Read More', 'cozy-addons' ); ?>","url":"#"} -->
<div class="list-inline-block"><a href="#" target="_blank" rel="noopener"><li class="cozy-block-list-item" id="cozyBlock_dea8cfd2_c921_40bd_8d7f_db86f362caaa"><p><?php esc_html_e( 'Read More', 'cozy-addons' ); ?></p><div class="list-icon-wrapper"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M19.3651 12.56L14.3851 17.56C14.2251 17.72 14.0251 17.8 13.8251 17.8C13.6251 17.8 13.4251 17.72 13.2651 17.56C12.9451 17.24 12.9451 16.74 13.2651 16.42L16.8851 12.78H5.20511C4.76511 12.78 4.40511 12.42 4.40511 11.98C4.40511 11.54 4.76511 11.18 5.20511 11.18H16.8851L13.2651 7.54001C12.9451 7.22001 12.9451 6.72 13.2651 6.4C13.5851 6.08 14.0851 6.08 14.4051 6.4L19.3851 11.4C19.6851 11.74 19.6851 12.26 19.3651 12.56Z"></path></svg></div></li></a></div>
<!-- /wp:cozy-block/list-item --></ul>
<!-- /wp:cozy-block/icon-list --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->