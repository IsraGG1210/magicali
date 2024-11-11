<?php
	/**
	 * Title: About us section three with image
	 * Description: This is about us section with image and animation
	 * Slug: cozy-block-patterns/about-us-three
	 * Categories: cozy-block-patterns, about-us
	 */

	$images = array(
		CT_ASSETS_URL . 'images/about-us_3_1.jpg',
	);
	?>

<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'About Us', 'cozy-addons' ); ?>"},"align":"full","style":{"color":{"background":"#fffffe"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#fffffe;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","bottom":"80px","left":"16px","right":"16px"},"blockGap":"0","margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}},"typography":{"fontSize":"14px"}},"layout":{"type":"constrained","contentSize":"1180px"},"cozyCustomFont":"Public Sans"} -->
<div class="wp-block-group has-text-color has-link-color" style="color:#090b10;margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40);padding-top:80px;padding-right:16px;padding-bottom:80px;padding-left:16px;font-size:14px"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"36px","left":"44px"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"blockGap":"0"}},"cozyAnimation":{"type":"zoom-in-up","easingFunction":"ease-in","anchorPlacement":"top-center","duration":1000}} -->
<div class="wp-block-column"><!-- wp:image {"id":1833,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-1833"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#01ae8f"}}},"color":{"text":"#01ae8f"},"typography":{"fontSize":"14px","textTransform":"uppercase","lineHeight":"1.2"}}} -->
<p class="has-text-color has-link-color" style="color:#01ae8f;font-size:14px;line-height:1.2;text-transform:uppercase"><?php esc_html_e( 'About Us', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"lineHeight":"1.2","fontSize":"44px","fontStyle":"normal","fontWeight":"600"},"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}}},"cozyCustomFont":"Inter","cozyAnimation":{"type":"flip-up","easingFunction":"ease-in","anchorPlacement":"top-center","duration":600}} -->
<h2 class="wp-block-heading has-text-color has-link-color" style="color:#090b10;font-size:44px;font-style:normal;font-weight:600;line-height:1.2"><?php esc_html_e( 'Navigating challenges, delivering results.', 'cozy-addons' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"},"spacing":{"margin":{"top":"6px","bottom":"6px"}},"color":{"text":"#646464"},"elements":{"link":{"color":{"text":"#646464"}}}}} -->
<p class="has-text-color has-link-color" style="color:#646464;margin-top:6px;margin-bottom:6px;line-height:1.5"><?php esc_html_e( 'Far far away, behind the word mountains, far from the countries Vocalic and Consonantal, there live the blind texts. Separated they live in Bookmarks grove right at the coast of the Semantics, a large language ocean.', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"26px"}}}} -->
<div class="wp-block-columns" style="margin-top:26px"><!-- wp:column {"style":{"spacing":{"padding":{"top":"0","bottom":"0"},"blockGap":"0"}},"cozyAnimation":{"type":"fade-up","easingFunction":"ease-in","anchorPlacement":"top-center","duration":1000}} -->
<div class="wp-block-column" style="padding-top:0;padding-bottom:0"><!-- wp:cozy-block/icon-picker {"blockClientId":"5d1b709d-eab3-40da-93db-18eef9228e03","view":"stacked","iconSize":18,"iconViewBox":{"vx":"0","vy":"0","vw":"25","vh":"17"},"iconPath":"M24.8489 7.69965C22.4952 3.1072 17.8355 0 12.5 0C7.16447 0 2.50345 3.10938 0.151018 7.70009C0.0517306 7.89649 0 8.11348 0 8.33355C0 8.55362 0.0517306 8.77061 0.151018 8.96701C2.50475 13.5595 7.16447 16.6667 12.5 16.6667C17.8355 16.6667 22.4965 13.5573 24.8489 8.96658C24.9482 8.77018 25 8.55319 25 8.33312C25 8.11304 24.9482 7.89605 24.8489 7.69965ZM12.5 14.5833C11.2638 14.5833 10.0555 14.2168 9.02766 13.53C7.99985 12.8433 7.19878 11.8671 6.72573 10.7251C6.25268 9.58307 6.12891 8.3264 6.37007 7.11402C6.61123 5.90164 7.20648 4.78799 8.08056 3.91392C8.95464 3.03984 10.0683 2.44458 11.2807 2.20343C12.493 1.96227 13.7497 2.08604 14.8917 2.55909C16.0338 3.03213 17.0099 3.83321 17.6967 4.86102C18.3834 5.88883 18.75 7.0972 18.75 8.33333C18.7504 9.15421 18.589 9.96711 18.275 10.7256C17.9611 11.484 17.5007 12.1732 16.9203 12.7536C16.3398 13.3341 15.6507 13.7944 14.8922 14.1084C14.1338 14.4223 13.3208 14.5837 12.5 14.5833ZM12.5 4.16667C12.1281 4.17186 11.7586 4.22719 11.4015 4.33116C11.6958 4.73119 11.8371 5.22347 11.7996 5.71873C11.7621 6.21398 11.5484 6.6794 11.1972 7.0306C10.846 7.38179 10.3806 7.5955 9.88537 7.63297C9.39012 7.67043 8.89784 7.52917 8.49781 7.23481C8.27001 8.07404 8.31113 8.96357 8.61538 9.77821C8.91962 10.5928 9.47167 11.2916 10.1938 11.776C10.916 12.2605 11.7719 12.5063 12.641 12.4788C13.5102 12.4514 14.3489 12.152 15.039 11.623C15.7291 11.0939 16.236 10.3617 16.4882 9.52951C16.7404 8.69729 16.7253 7.80693 16.445 6.98376C16.1647 6.16058 15.6333 5.44602 14.9256 4.94067C14.2179 4.43532 13.3696 4.16462 12.5 4.16667Z","iconColor":"#fffffe","boxStyles":{"padding":{"top":12,"right":12,"bottom":12,"left":12},"borderType":"none","borderWidth":1,"borderColor":"#000","borderColorHover":"","borderRadius":50,"bgColor":"#01ae8f","bgColorHover":"#f49805"}} -->
<div class="cozy-block-icon-picker stacked" id="cozyBlock_5d1b709d_eab3_40da_93db_18eef9228e03"><svg width="18" height="18" viewBox="0 0 25 17" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#fffffe"><path d="M24.8489 7.69965C22.4952 3.1072 17.8355 0 12.5 0C7.16447 0 2.50345 3.10938 0.151018 7.70009C0.0517306 7.89649 0 8.11348 0 8.33355C0 8.55362 0.0517306 8.77061 0.151018 8.96701C2.50475 13.5595 7.16447 16.6667 12.5 16.6667C17.8355 16.6667 22.4965 13.5573 24.8489 8.96658C24.9482 8.77018 25 8.55319 25 8.33312C25 8.11304 24.9482 7.89605 24.8489 7.69965ZM12.5 14.5833C11.2638 14.5833 10.0555 14.2168 9.02766 13.53C7.99985 12.8433 7.19878 11.8671 6.72573 10.7251C6.25268 9.58307 6.12891 8.3264 6.37007 7.11402C6.61123 5.90164 7.20648 4.78799 8.08056 3.91392C8.95464 3.03984 10.0683 2.44458 11.2807 2.20343C12.493 1.96227 13.7497 2.08604 14.8917 2.55909C16.0338 3.03213 17.0099 3.83321 17.6967 4.86102C18.3834 5.88883 18.75 7.0972 18.75 8.33333C18.7504 9.15421 18.589 9.96711 18.275 10.7256C17.9611 11.484 17.5007 12.1732 16.9203 12.7536C16.3398 13.3341 15.6507 13.7944 14.8922 14.1084C14.1338 14.4223 13.3208 14.5837 12.5 14.5833ZM12.5 4.16667C12.1281 4.17186 11.7586 4.22719 11.4015 4.33116C11.6958 4.73119 11.8371 5.22347 11.7996 5.71873C11.7621 6.21398 11.5484 6.6794 11.1972 7.0306C10.846 7.38179 10.3806 7.5955 9.88537 7.63297C9.39012 7.67043 8.89784 7.52917 8.49781 7.23481C8.27001 8.07404 8.31113 8.96357 8.61538 9.77821C8.91962 10.5928 9.47167 11.2916 10.1938 11.776C10.916 12.2605 11.7719 12.5063 12.641 12.4788C13.5102 12.4514 14.3489 12.152 15.039 11.623C15.7291 11.0939 16.236 10.3617 16.4882 9.52951C16.7404 8.69729 16.7253 7.80693 16.445 6.98376C16.1647 6.16058 15.6333 5.44602 14.9256 4.94067C14.2179 4.43532 13.3696 4.16462 12.5 4.16667Z"></path></svg></div>
<!-- /wp:cozy-block/icon-picker -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"16px","bottom":"6px"}}},"cozyCustomFont":"Inter"} -->
<h4 class="wp-block-heading" style="margin-top:16px;margin-bottom:6px;font-size:18px;font-style:normal;font-weight:600"><?php esc_html_e( 'Our Mission', 'cozy-addons' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#646464"},"elements":{"link":{"color":{"text":"#646464"}}}}} -->
<p class="has-text-color has-link-color" style="color:#646464"><?php esc_html_e( 'Frustrated by a slow website? We’ll help you tame those speed demons.', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"0","bottom":"0"},"blockGap":"0"}},"cozyAnimation":{"type":"fade-up","easingFunction":"ease-in","anchorPlacement":"top-center","duration":1000}} -->
<div class="wp-block-column" style="padding-top:0;padding-bottom:0"><!-- wp:cozy-block/icon-picker {"blockClientId":"bd6f94bb-a81c-4a00-90d8-d914bfdf11d5","view":"stacked","iconSize":18,"iconViewBox":{"vx":"0","vy":"0","vw":"18","vh":"17"},"iconPath":"M8.25059 16.7125V15.2125C6.68809 15.0375 5.34746 14.3906 4.22871 13.2719C3.10996 12.1531 2.46309 10.8125 2.28809 9.24998H0.788086V7.74998H2.28809C2.46309 6.18748 3.10996 4.84685 4.22871 3.7281C5.34746 2.60935 6.68809 1.96248 8.25059 1.78748V0.287476H9.75059V1.78748C11.3131 1.96248 12.6537 2.60935 13.7725 3.7281C14.8912 4.84685 15.5381 6.18748 15.7131 7.74998H17.2131V9.24998H15.7131C15.5381 10.8125 14.8912 12.1531 13.7725 13.2719C12.6537 14.3906 11.3131 15.0375 9.75059 15.2125V16.7125H8.25059ZM9.00059 13.75C10.4506 13.75 11.6881 13.2375 12.7131 12.2125C13.7381 11.1875 14.2506 9.94998 14.2506 8.49998C14.2506 7.04998 13.7381 5.81248 12.7131 4.78748C11.6881 3.76248 10.4506 3.24998 9.00059 3.24998C7.55059 3.24998 6.31309 3.76248 5.28809 4.78748C4.26309 5.81248 3.75059 7.04998 3.75059 8.49998C3.75059 9.94998 4.26309 11.1875 5.28809 12.2125C6.31309 13.2375 7.55059 13.75 9.00059 13.75ZM9.00059 11.5C8.17559 11.5 7.46934 11.2062 6.88184 10.6187C6.29434 10.0312 6.00059 9.32498 6.00059 8.49998C6.00059 7.67498 6.29434 6.96873 6.88184 6.38123C7.46934 5.79373 8.17559 5.49998 9.00059 5.49998C9.82559 5.49998 10.5318 5.79373 11.1193 6.38123C11.7068 6.96873 12.0006 7.67498 12.0006 8.49998C12.0006 9.32498 11.7068 10.0312 11.1193 10.6187C10.5318 11.2062 9.82559 11.5 9.00059 11.5Z","iconColor":"#fffffe","boxStyles":{"padding":{"top":12,"right":12,"bottom":12,"left":12},"borderType":"none","borderWidth":1,"borderColor":"#000","borderColorHover":"","borderRadius":50,"bgColor":"#01ae8f","bgColorHover":"#f49805"}} -->
<div class="cozy-block-icon-picker stacked" id="cozyBlock_bd6f94bb_a81c_4a00_90d8_d914bfdf11d5"><svg width="18" height="18" viewBox="0 0 18 17" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#fffffe"><path d="M8.25059 16.7125V15.2125C6.68809 15.0375 5.34746 14.3906 4.22871 13.2719C3.10996 12.1531 2.46309 10.8125 2.28809 9.24998H0.788086V7.74998H2.28809C2.46309 6.18748 3.10996 4.84685 4.22871 3.7281C5.34746 2.60935 6.68809 1.96248 8.25059 1.78748V0.287476H9.75059V1.78748C11.3131 1.96248 12.6537 2.60935 13.7725 3.7281C14.8912 4.84685 15.5381 6.18748 15.7131 7.74998H17.2131V9.24998H15.7131C15.5381 10.8125 14.8912 12.1531 13.7725 13.2719C12.6537 14.3906 11.3131 15.0375 9.75059 15.2125V16.7125H8.25059ZM9.00059 13.75C10.4506 13.75 11.6881 13.2375 12.7131 12.2125C13.7381 11.1875 14.2506 9.94998 14.2506 8.49998C14.2506 7.04998 13.7381 5.81248 12.7131 4.78748C11.6881 3.76248 10.4506 3.24998 9.00059 3.24998C7.55059 3.24998 6.31309 3.76248 5.28809 4.78748C4.26309 5.81248 3.75059 7.04998 3.75059 8.49998C3.75059 9.94998 4.26309 11.1875 5.28809 12.2125C6.31309 13.2375 7.55059 13.75 9.00059 13.75ZM9.00059 11.5C8.17559 11.5 7.46934 11.2062 6.88184 10.6187C6.29434 10.0312 6.00059 9.32498 6.00059 8.49998C6.00059 7.67498 6.29434 6.96873 6.88184 6.38123C7.46934 5.79373 8.17559 5.49998 9.00059 5.49998C9.82559 5.49998 10.5318 5.79373 11.1193 6.38123C11.7068 6.96873 12.0006 7.67498 12.0006 8.49998C12.0006 9.32498 11.7068 10.0312 11.1193 10.6187C10.5318 11.2062 9.82559 11.5 9.00059 11.5Z"></path></svg></div>
<!-- /wp:cozy-block/icon-picker -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"16px","bottom":"6px"}}},"cozyCustomFont":"Inter"} -->
<h4 class="wp-block-heading" style="margin-top:16px;margin-bottom:6px;font-size:18px;font-style:normal;font-weight:600"><?php esc_html_e( 'Our Vision', 'cozy-addons' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#646464"},"elements":{"link":{"color":{"text":"#646464"}}}}} -->
<p class="has-text-color has-link-color" style="color:#646464"><?php esc_html_e( 'Frustrated by a slow website? We’ll help you tame those speed demons.', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->