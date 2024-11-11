<?php
/**
 * Title: Post Magazine section seven with grid
 * Description: This is post magazine section with and grid
 * Slug: cozy-block-patterns/post-magazine-seven
 * Categories: cozy-block-patterns, posts-and-magazine
 * Dynamic: true
 */

$images = array(
	CT_ASSETS_URL . 'images/post-magazine_7_1.jpg',
);
?>

<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'Posts and Magazine', 'cozy-addons' ); ?>"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"80px","bottom":"80px"},"blockGap":"0"},"color":{"background":"#fffffe"}},"className":"cozy-block-pattern__post-seven","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group alignfull cozy-block-pattern__post-seven has-background" style="background-color:#fffffe;margin-top:0;margin-bottom:0;padding-top:80px;padding-right:0;padding-bottom:80px;padding-left:0"><!-- wp:group {"style":{"border":{"bottom":{"color":"#d9dddc","width":"1px"}},"spacing":{"padding":{"right":"16px","left":"16px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="border-bottom-color:#d9dddc;border-bottom-width:1px;padding-right:16px;padding-left:16px"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"26px"}}},"layout":{"type":"constrained","contentSize":"1180px","justifyContent":"center"}} -->
<div class="wp-block-group" style="padding-bottom:26px"><!-- wp:group {"layout":{"type":"constrained","contentSize":"194px","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontSize":"20px"},"elements":{"link":{"color":{"text":"#090b10"}}},"color":{"text":"#090b10"}},"cozyCustomFont":"PT Serif"} -->
<h2 class="wp-block-heading has-text-align-left has-text-color has-link-color" style="color:#090b10;font-size:20px"><?php esc_html_e( 'Animals and Plant', 'cozy-addons' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"16px","left":"16px","top":"60px","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"1180px"},"cozyAnimation":{"type":"fade-up","easingFunction":"ease-in","anchorPlacement":"top-bottom","duration":600}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:60px;padding-right:16px;padding-bottom:0;padding-left:16px"><!-- wp:media-text {"mediaId":3828,"mediaLink":"<?php echo esc_url( $images[0] ); ?>","mediaType":"image","style":{"spacing":{"margin":{"bottom":"36px"}}}} -->
<div class="wp-block-media-text is-stacked-on-mobile" style="margin-bottom:36px"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-3828 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:group {"style":{"spacing":{"blockGap":"6px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"34px","lineHeight":"1.3"}},"cozyCustomFont":"Kaisei Opti"} -->
<h2 class="wp-block-heading" style="font-size:34px;line-height:1.3"><?php esc_html_e( 'Sustainable Travel:Exploring the World Responsibly', 'cozy-addons' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"placeholder":"Content…","style":{"typography":{"fontSize":"14px"},"elements":{"link":{"color":{"text":"#090b10"}}},"color":{"text":"#090b10"}},"cozyCustomFont":"Public Sans"} -->
<p class="has-text-color has-link-color" style="color:#090b10;font-size:14px"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"500","textDecoration":"none"},"spacing":{"margin":{"top":"26px"}}},"cozyCustomFont":"Inter"} -->
<div class="wp-block-buttons has-custom-font-size" style="margin-top:26px;font-size:16px;font-style:normal;font-weight:500;text-decoration:none"><!-- wp:button {"style":{"elements":{"link":{"color":{"text":"#fffffe"}}},"color":{"text":"#fffffe","background":"#f49805"},"spacing":{"padding":{"left":"36px","right":"36px","top":"14px","bottom":"14px"}},"border":{"radius":"100px"}},"cozyHoverStyles":{"bgColor":"#090b10","color":"#fffffe","borderColor":""}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background has-link-color wp-element-button" style="border-radius:100px;color:#fffffe;background-color:#f49805;padding-top:14px;padding-right:36px;padding-bottom:14px;padding-left:36px"><?php esc_html_e( 'Read More', 'cozy-addons' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:media-text -->

<!-- wp:cozy-block/post-carousel {"blockClientId":"6c3571fb-9469-4a18-a5cf-3db16c1f1055","layout":"grid","gridOptions":{"displayColumn":"4","masonryEnabled":false,"columnGap":30}} -->
<div class="cozy-block-post-grid-wrapper  hover-show" id="cozyBlock_6c3571fb_9469_4a18_a5cf_3db16c1f1055"><!-- wp:query {"queryId":1,"query":{"perPage":"4","postType":"post"},"lock":{"move":false,"remove":true},"className":"cozy-query swiper-container"} -->
<div class="wp-block-query cozy-query swiper-container"><!-- wp:post-template {"lock":{"move":false,"remove":true},"className":"cozy-layout-grid swiper-wrapper"} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"10px","margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"className":"position__relative","layout":{"type":"constrained"},"cozyCustomFont":"Gothic A1"} -->
<div class="wp-block-group position__relative" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-featured-image {"isLink":true,"height":"200px","style":{"border":{"radius":"0px"}}} /-->

<!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"#fffffe"}}},"color":{"text":"#fffffe"},"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"top":"12px","bottom":"12px","left":"12px","right":"12px"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"linkTarget":"_blank","style":{"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"},":hover":{"color":{"text":"#f49805"}}}},"typography":{"textTransform":"uppercase","fontSize":"18px"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"4px","padding":{"top":"0","bottom":"0"},"margin":{"top":"12px","bottom":"0"}},"color":{"text":"#afafaf"},"elements":{"link":{"color":{"text":"#afafaf"}}}},"layout":{"type":"flex","flexWrap":"nowrap"},"fontSize":"x-small","cozyCustomFont":"Public Sans"} -->
<div class="wp-block-group has-text-color has-link-color has-x-small-font-size" style="color:#afafaf;margin-top:12px;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:cozy-block/icon-picker {"blockClientId":"f408d865-f1e6-4039-98ff-24bb3c0f18c7","iconSize":14,"iconViewBox":{"vx":"0","vy":"0","vw":"25","vh":"25"},"iconPath":"M12.1094 0C5.41992 0 0 5.41992 0 12.1094C0 18.7988 5.41992 24.2188 12.1094 24.2188C18.7988 24.2188 24.2188 18.7988 24.2188 12.1094C24.2188 5.41992 18.7988 0 12.1094 0ZM14.8975 17.0947L10.5908 13.9648C10.4395 13.8525 10.3516 13.6768 10.3516 13.4912V5.27344C10.3516 4.95117 10.6152 4.6875 10.9375 4.6875H13.2812C13.6035 4.6875 13.8672 4.95117 13.8672 5.27344V11.9971L16.9678 14.2529C17.2314 14.4434 17.2852 14.8096 17.0947 15.0732L15.7178 16.9678C15.5273 17.2266 15.1611 17.2852 14.8975 17.0947Z","iconColor":"#afafaf"} -->
<div class="cozy-block-icon-picker default" id="cozyBlock_f408d865_f1e6_4039_98ff_24bb3c0f18c7"><svg width="14" height="14" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#afafaf"><path d="M12.1094 0C5.41992 0 0 5.41992 0 12.1094C0 18.7988 5.41992 24.2188 12.1094 24.2188C18.7988 24.2188 24.2188 18.7988 24.2188 12.1094C24.2188 5.41992 18.7988 0 12.1094 0ZM14.8975 17.0947L10.5908 13.9648C10.4395 13.8525 10.3516 13.6768 10.3516 13.4912V5.27344C10.3516 4.95117 10.6152 4.6875 10.9375 4.6875H13.2812C13.6035 4.6875 13.8672 4.95117 13.8672 5.27344V11.9971L16.9678 14.2529C17.2314 14.4434 17.2852 14.8096 17.0947 15.0732L15.7178 16.9678C15.5273 17.2266 15.1611 17.2852 14.8975 17.0947Z"></path></svg></div>
<!-- /wp:cozy-block/icon-picker -->

<!-- wp:post-date {"style":{"spacing":{"padding":{"top":"0","bottom":"3px"}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:cozy-block/post-carousel --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->