<?php
	/**
	 * Title: Portfolio section three with images animation
	 * Description: This is portfolio section with images grid and animation
	 * Slug: cozy-block-patterns/portfolio-three
	 * Categories: cozy-block-patterns, portfolio, gallery
	 */

	$images = array(
		CT_ASSETS_URL . 'images/portfolio_1_1.jpg',
		CT_ASSETS_URL . 'images/portfolio_1_2.jpg',
		CT_ASSETS_URL . 'images/portfolio_1_3.jpg',
	);
	?>

<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'Portfolio', 'cozy-addons' ); ?>"},"style":{"color":{"background":"#fffffe"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-background" style="background-color:#fffffe;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"80px","bottom":"80px","left":"16px","right":"16px"}}},"layout":{"type":"constrained","contentSize":"1180px"},"cozyCustomFont":"Public Sans"} -->
<div class="wp-block-group alignfull" style="padding-top:80px;padding-right:16px;padding-bottom:80px;padding-left:16px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"align":"center","style":{"color":{"text":"#3620be"},"elements":{"link":{"color":{"text":"#3620be"}}},"typography":{"fontSize":"14px","lineHeight":"1.2","fontStyle":"normal","fontWeight":"500","textTransform":"uppercase"}}} -->
<p class="has-text-align-center has-text-color has-link-color" style="color:#3620be;font-size:14px;font-style:normal;font-weight:500;line-height:1.2;text-transform:uppercase"><?php esc_html_e( 'Our Portfolio', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":4,"style":{"elements":{"link":{"color":{"text":"#090b10"}}},"typography":{"fontSize":"44px","lineHeight":"1.3","fontStyle":"normal","fontWeight":"600"},"color":{"text":"#090b10"}},"cozyCustomFont":"Inter"} -->
<h4 class="wp-block-heading has-text-align-center has-text-color has-link-color" style="color:#090b10;font-size:44px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e( 'Our Latest Works', 'cozy-addons' ); ?></h4>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:cozy-block/portfolio-gallery {"blockClientId":"7b177d8c-6f3e-49ca-adb2-6921207b48b1","portfolioCat":[6,8,7,10,9,11],"catInit":true,"gridOptions":{"displayColumn":3,"columnGap":18,"isotopeFilter":false,"masonryEnabled":false}} -->
<div class="wp-block-cozy-block-portfolio-gallery"><div class="cozy-block-portfolio-gallery source-default layout-grid  featured-image__position-before    hover-show     icon-view-default has-image-hover-effect " id="cozyBlock_7b177d8c_6f3e_49ca_adb2_6921207b48b1"><div class="cozy-layout-wrapper cozy-layout-grid "><!-- wp:cozy-block/grid -->
<div class="cozy-block-grid"><!-- wp:group {"cozyAnimation":{"type":"fade-up","easingFunction":"ease","anchorPlacement":"top-center","duration":800}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url( $images[0] ); ?>","id":488,"dimRatio":10,"customOverlayColor":"#090b10","isUserOverlayColor":true,"minHeight":360,"contentPosition":"center center","isDark":false,"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light" style="padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px;min-height:360px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-10 has-background-dim" style="background-color:#090b10"></span><img class="wp-block-cover__image-background wp-image-488" alt="" src="<?php echo esc_url( $images[0] ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group --></div>
<!-- /wp:cozy-block/grid -->

<!-- wp:cozy-block/grid -->
<div class="cozy-block-grid"><!-- wp:group {"cozyAnimation":{"type":"fade-down","easingFunction":"ease","anchorPlacement":"top-center","duration":800}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url( $images[1] ); ?>","id":488,"dimRatio":10,"customOverlayColor":"#090b10","isUserOverlayColor":true,"minHeight":360,"contentPosition":"center center","isDark":false,"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light" style="padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px;min-height:360px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-10 has-background-dim" style="background-color:#090b10"></span><img class="wp-block-cover__image-background wp-image-488" alt="" src="<?php echo esc_url( $images[1] ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group --></div>
<!-- /wp:cozy-block/grid -->

<!-- wp:cozy-block/grid -->
<div class="cozy-block-grid"><!-- wp:group {"cozyAnimation":{"type":"flip-right","easingFunction":"ease","anchorPlacement":"top-center","duration":800}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url( $images[2] ); ?>","id":488,"dimRatio":10,"customOverlayColor":"#090b10","isUserOverlayColor":true,"minHeight":360,"contentPosition":"center center","isDark":false,"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light" style="padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px;min-height:360px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-10 has-background-dim" style="background-color:#090b10"></span><img class="wp-block-cover__image-background wp-image-488" alt="" src="<?php echo esc_url( $images[2] ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group --></div>
<!-- /wp:cozy-block/grid -->

<!-- wp:cozy-block/grid -->
<div class="cozy-block-grid"><!-- wp:group {"cozyAnimation":{"type":"fade-left","easingFunction":"ease","anchorPlacement":"top-center","duration":800}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url( $images[2] ); ?>","id":488,"dimRatio":10,"customOverlayColor":"#090b10","isUserOverlayColor":true,"minHeight":360,"contentPosition":"center center","isDark":false,"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light" style="padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px;min-height:360px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-10 has-background-dim" style="background-color:#090b10"></span><img class="wp-block-cover__image-background wp-image-488" alt="" src="<?php echo esc_url( $images[2] ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group --></div>
<!-- /wp:cozy-block/grid -->

<!-- wp:cozy-block/grid -->
<div class="cozy-block-grid"><!-- wp:group {"cozyAnimation":{"type":"zoom-in-up","easingFunction":"ease","anchorPlacement":"top-center","duration":800}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url( $images[0] ); ?>","id":488,"dimRatio":10,"customOverlayColor":"#090b10","isUserOverlayColor":true,"minHeight":360,"contentPosition":"center center","isDark":false,"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light" style="padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px;min-height:360px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-10 has-background-dim" style="background-color:#090b10"></span><img class="wp-block-cover__image-background wp-image-488" alt="" src="<?php echo esc_url( $images[0] ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group --></div>
<!-- /wp:cozy-block/grid -->

<!-- wp:cozy-block/grid -->
<div class="cozy-block-grid"><!-- wp:group {"cozyAnimation":{"type":"fade-up","easingFunction":"ease","anchorPlacement":"top-center","duration":800}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url( $images[1] ); ?>","id":488,"dimRatio":10,"customOverlayColor":"#090b10","isUserOverlayColor":true,"minHeight":360,"contentPosition":"center center","isDark":false,"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light" style="padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px;min-height:360px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-10 has-background-dim" style="background-color:#090b10"></span><img class="wp-block-cover__image-background wp-image-488" alt="" src="<?php echo esc_url( $images[1] ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group --></div>
<!-- /wp:cozy-block/grid --></div></div></div>
<!-- /wp:cozy-block/portfolio-gallery --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->