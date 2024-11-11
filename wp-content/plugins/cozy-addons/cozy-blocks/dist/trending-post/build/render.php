<?php
$client_id = ! empty( $attributes['clientId'] ) ? str_replace( array( ';', '=', '(', ')', ' ' ), '', wp_strip_all_tags( $attributes['clientId'] ) ) : '';
$block_id  = 'cozyBlock_' . str_replace( '-', '_', $client_id );

$attributes['ajaxUrl'] = admin_url( 'admin-ajax.php' );
$attributes['nonce']   = wp_create_nonce( 'cozy_block_trending_posts_load_more' );
wp_localize_script( 'cozy-block-scripts', $block_id, $attributes );
wp_add_inline_script( 'cozy-block-scripts', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockTrendingPostsInit( "' . $client_id . '" ) }) ' );

$list = array(
	'column' => isset( $attributes['column'] ) ? $attributes['column'] : '',
	'gap'    => isset( $attributes['columnGap'] ) ? $attributes['columnGap'] : '',
);

$col1 = isset( $attributes['column'] ) && $attributes['column'] <= 3 ? $attributes['column'] : 3;
$col2 = isset( $attributes['column'] ) && $attributes['column'] <= 2 ? $attributes['column'] : 2;

$item_padding = cozy_render_TRBL( 'padding', $attributes['itemStyles']['padding'] );
$item_border  = isset( $attributes['itemStyles']['border'] ) ? cozy_render_TRBL( 'border', $attributes['itemStyles']['border'] ) : '';
$item_radius  = cozy_render_TRBL( 'border-radius', $attributes['itemStyles']['radius'] );
$item_styles  = array(
	'bg_color'           => isset( $attributes['itemStyles']['bgColor'] ) ? $attributes['itemStyles']['bgColor'] : '',
	'bg_color_hover'     => isset( $attributes['itemStyles']['bgColorHover'] ) ? $attributes['itemStyles']['bgColorHover'] : '',
	'border_color_hover' => isset( $attributes['itemStyles']['borderColorHover'] ) ? $attributes['itemStyles']['borderColorHover'] : '',
	'shadow_color'       => isset( $attributes['itemStyles']['boxShadow']['color'] ) ? $attributes['itemStyles']['boxShadow']['color'] : '',
);

$cat_padding = cozy_render_TRBL( 'padding', $attributes['categoryStyles']['padding'] );
$cat_border  = isset( $attributes['categoryStyles']['border'] ) ? cozy_render_TRBL( 'border', $attributes['categoryStyles']['border'] ) : '';
$cat_styles  = array(
	'color'              => isset( $attributes['categoryStyles']['color'] ) ? $attributes['categoryStyles']['color'] : '',
	'color_hover'        => isset( $attributes['categoryStyles']['colorHover'] ) ? $attributes['categoryStyles']['colorHover'] : '',
	'bg_color'           => isset( $attributes['categoryStyles']['bgColor'] ) ? $attributes['categoryStyles']['bgColor'] : '',
	'bg_color_hover'     => isset( $attributes['categoryStyles']['bgColorHover'] ) ? $attributes['categoryStyles']['bgColorHover'] : '',
	'border_color_hover' => isset( $attributes['categoryStyles']['borderColorHover'] ) ? $attributes['categoryStyles']['borderColorHover'] : '',
);

$title_styles = array(
	'color'       => isset( $attributes['titleStyles']['color'] ) ? $attributes['titleStyles']['color'] : '',
	'color_hover' => isset( $attributes['titleStyles']['colorHover'] ) ? $attributes['titleStyles']['colorHover'] : '',
);

$date_padding = cozy_render_TRBL( 'padding', $attributes['dateStyles']['padding'] );
$date_border  = isset( $attributes['dateStyles']['border'] ) ? cozy_render_TRBL( 'border', $attributes['dateStyles']['border'] ) : '';
$date_styles  = array(
	'color'              => isset( $attributes['dateStyles']['color'] ) ? $attributes['dateStyles']['color'] : '',
	'color_hover'        => isset( $attributes['dateStyles']['colorHover'] ) ? $attributes['dateStyles']['colorHover'] : '',
	'bg_color'           => isset( $attributes['dateStyles']['bgColor'] ) ? $attributes['dateStyles']['bgColor'] : '',
	'bg_color_hover'     => isset( $attributes['dateStyles']['bgColorHover'] ) ? $attributes['dateStyles']['bgColorHover'] : '',
	'border_color_hover' => isset( $attributes['dateStyles']['borderColorHover'] ) ? $attributes['dateStyles']['borderColorHover'] : '',
);

$nav_border = isset( $attributes['navigation']['border'] ) ? cozy_render_TRBL( 'border', $attributes['navigation']['border'] ) : '';
$nav_styles = array(
	'color'              => isset( $attributes['navigation']['color'] ) ? $attributes['navigation']['color'] : '',
	'color_hover'        => isset( $attributes['navigation']['colorHover'] ) ? $attributes['navigation']['colorHover'] : '',
	'bg_color'           => isset( $attributes['navigation']['bgColor'] ) ? $attributes['navigation']['bgColor'] : '',
	'bg_color_hover'     => isset( $attributes['navigation']['bgColorHover'] ) ? $attributes['navigation']['bgColorHover'] : '',
	'border_color_hover' => isset( $attributes['navigation']['borderColorHover'] ) ? $attributes['navigation']['borderColorHover'] : '',
);

$bullets = array(
	'width'  => isset( $attributes['pagination']['width'] ) ? $attributes['pagination']['width'] : '10px',
	'height' => isset( $attributes['pagination']['height'] ) ? $attributes['pagination']['height'] : '10px',
	'radius' => isset( $attributes['pagination']['radius'] ) ? $attributes['pagination']['radius'] : '10px',
	'gap'    => isset( $attributes['pagination']['gap'] ) ? $attributes['pagination']['gap'] : '4px',
	'active' => array(
		'width'   => isset( $attributes['pagination']['active']['width'] ) ? $attributes['pagination']['active']['width'] : '10px',
		'height'  => isset( $attributes['pagination']['active']['height'] ) ? $attributes['pagination']['active']['height'] : '10px',
		'radius'  => isset( $attributes['pagination']['active']['radius'] ) ? $attributes['pagination']['active']['radius'] : '10px',
		'outline' => isset( $attributes['pagination']['active']['border'] ) ? cozy_render_TRBL( 'outline', $attributes['pagination']['active']['border'] ) : '',
		'offset'  => isset( $attributes['pagination']['active']['offset'] ) ? $attributes['pagination']['active']['offset'] : '',
	),
	'color'  => array(
		'default'       => isset( $attributes['pagination']['color']['default'] ) ? $attributes['pagination']['color']['default'] : '',
		'default_hover' => isset( $attributes['pagination']['color']['defaultHover'] ) ? $attributes['pagination']['color']['defaultHover'] : '',
		'active'        => isset( $attributes['pagination']['color']['active'] ) ? $attributes['pagination']['color']['active'] : '',
		'active_hover'  => isset( $attributes['pagination']['color']['activeHover'] ) ? $attributes['pagination']['color']['activeHover'] : '',
	),
	'align'  => isset( $attributes['pagination']['align'] ) ? $attributes['pagination']['align'] : 'center',
	'top'    => isset( $attributes['pagination']['top'] ) ? $attributes['pagination']['top'] : '',
	'left'   => isset( $attributes['pagination']['align'], $attributes['pagination']['left'] ) && 'left' === $attributes['pagination']['align'] ? $attributes['pagination']['left'] : '',
	'right'  => isset( $attributes['pagination']['align'], $attributes['pagination']['right'] ) && 'right' === $attributes['pagination']['align'] ? $attributes['pagination']['right'] : '',
);

$loader = array(
	'label'        => isset( $attributes['ajaxLoader']['label'] ) ? $attributes['ajaxLoader']['label'] : '',
	'loading_text' => isset( $attributes['ajaxLoader']['loadingText'] ) ? $attributes['ajaxLoader']['loadingText'] : '',
	'min_width'    => isset( $attributes['ajaxLoader']['minWidth'] ) ? $attributes['ajaxLoader']['minWidth'] : '',
	'padding'      => isset( $attributes['ajaxLoader']['padding'] ) ? cozy_render_TRBL( 'padding', $attributes['ajaxLoader']['padding'] ) : '',
	'margin'       => array(
		'top'    => isset( $attributes['ajaxLoader']['margin']['top'] ) ? $attributes['ajaxLoader']['margin']['top'] : '',
		'bottom' => isset( $attributes['ajaxLoader']['margin']['bottom'] ) ? $attributes['ajaxLoader']['margin']['bottom'] : '',
	),
	'border'       => isset( $attributes['ajaxLoader']['border'] ) ? cozy_render_TRBL( 'border', $attributes['ajaxLoader']['border'] ) : '',
	'radius'       => isset( $attributes['ajaxLoader']['radius'] ) ? $attributes['ajaxLoader']['radius'] : '',
	'font'         => array(
		'size'   => isset( $attributes['ajaxLoader']['font']['size'] ) ? $attributes['ajaxLoader']['font']['size'] : '',
		'weight' => isset( $attributes['ajaxLoader']['font']['weight'] ) ? $attributes['ajaxLoader']['font']['weight'] : '',
		'family' => isset( $attributes['ajaxLoader']['font']['family'] ) ? $attributes['ajaxLoader']['font']['family'] : '',
	),
	'letter_case'  => isset( $attributes['ajaxLoader']['letterCase'] ) ? $attributes['ajaxLoader']['letterCase'] : '',
	'text_align'   => isset( $attributes['ajaxLoader']['textAlign'] ) ? $attributes['ajaxLoader']['textAlign'] : '',
	'color'        => array(
		'text'              => isset( $attributes['ajaxLoader']['color']['text'] ) ? $attributes['ajaxLoader']['color']['text'] : '',
		'text_hover'        => isset( $attributes['ajaxLoader']['color']['textHover'] ) ? $attributes['ajaxLoader']['color']['textHover'] : '',
		'spinner_primary'   => isset( $attributes['ajaxLoader']['color']['spinnerPrimary'] ) ? $attributes['ajaxLoader']['color']['spinnerPrimary'] : '',
		'spinner_secondary' => isset( $attributes['ajaxLoader']['color']['spinnerSecondary'] ) ? $attributes['ajaxLoader']['color']['spinnerSecondary'] : '',
		'bg'                => isset( $attributes['ajaxLoader']['color']['bg'] ) ? $attributes['ajaxLoader']['color']['bg'] : '',
		'bg_hover'          => isset( $attributes['ajaxLoader']['color']['bgHover'] ) ? $attributes['ajaxLoader']['color']['bgHover'] : '',
		'border_hover'      => isset( $attributes['ajaxLoader']['color']['borderHover'] ) ? $attributes['ajaxLoader']['color']['borderHover'] : '',
	),
);

$block_id = 'cozyBlock_' . str_replace( '-', '_', $client_id );

$block_styles = <<<BLOCK_STYLES
#$block_id.display-ticker {
    height: {$attributes['height']};
}

#$block_id.display-grid .cozy-block-trending-posts__grid-wrapper, #$block_id.display-list .cozy-block-trending-posts__list-wrapper {
	grid-template-columns: repeat({$list['column']}, 1fr);
	gap: {$list['gap']};
}
@media screen and (max-width: 1024px) {
	#$block_id.display-grid .cozy-block-trending-posts__grid-wrapper, #$block_id.display-list .cozy-block-trending-posts__list-wrapper {
		grid-template-columns: repeat({$col1}, 1fr);
	}
}
@media screen and (max-width: 767px) {
	#$block_id.display-grid .cozy-block-trending-posts__grid-wrapper, #$block_id.display-list .cozy-block-trending-posts__list-wrapper {
		grid-template-columns: repeat({$col2}, 1fr);
	}
}
@media screen and (max-width: 400px) {
	#$block_id.display-grid .cozy-block-trending-posts__grid-wrapper, #$block_id.display-list .cozy-block-trending-posts__list-wrapper {
		grid-template-columns: repeat(1, 1fr);
	}
}

#$block_id.display-list .cozy-block-trending-posts__item {
    margin-bottom: {$attributes['gap']};
}
#$block_id .cozy-block-trending-posts__item {
    {$item_padding}
    {$item_border}
    {$item_radius}
    background-color: {$item_styles['bg_color']};
}
#$block_id.item-has-box-shadow .cozy-block-trending-posts__item {
    box-shadow: {$attributes['itemStyles']['boxShadow']['horizontal']}px {$attributes['itemStyles']['boxShadow']['vertical']}px {$attributes['itemStyles']['boxShadow']['blur']}px {$attributes['itemStyles']['boxShadow']['spread']}px {$item_styles['shadow_color']} {$attributes['itemStyles']['boxShadow']['position']};
}
#$block_id .cozy-block-trending-posts__item:hover {
    border-color: {$item_styles['border_color_hover']};
    background-color: {$item_styles['bg_color_hover']};
}

#$block_id .cozy-block-trending-posts__image  {
	max-height: {$attributes['imageStyles']['height']};
	min-width: {$attributes['imageStyles']['width']};
}
#$block_id .cozy-block-trending-posts__image img {
	height: {$attributes['imageStyles']['height']};
	border-radius: {$attributes['imageStyles']['radius']};
}

#$block_id .cozy-block-trending-posts__post-categories {
	gap: {$attributes['categoryStyles']['gap']};
	font-size: {$attributes['categoryStyles']['fontSize']};
	font-family: {$attributes['categoryStyles']['fontFamily']};
	font-weight: {$attributes['categoryStyles']['fontWeight']};
	margin-top: {$attributes['categoryStyles']['marginTop']};
	margin-bottom: {$attributes['categoryStyles']['marginBottom']};
}
#$block_id .cozy-block-trending-posts__post-categories a {
	{$cat_padding}
	{$cat_border}
	border-radius: {$attributes['categoryStyles']['radius']};
	color: {$cat_styles['color']};
	background-color: {$cat_styles['bg_color']};
}
#$block_id .cozy-block-trending-posts__post-categories a:hover {
	color: {$cat_styles['color_hover']};
	background-color: {$cat_styles['bg_color_hover']};
	border-color: {$cat_styles['border_color_hover']};
}

#$block_id .cozy-block-trending-posts__post-title {
	margin-top: {$attributes['titleStyles']['marginTop']};
	margin-bottom: {$attributes['titleStyles']['marginBottom']};
    font-size: {$attributes['titleStyles']['fontSize']};
    font-family: {$attributes['titleStyles']['fontFamily']};
    font-weight: {$attributes['titleStyles']['fontWeight']};
}
#$block_id .cozy-block-trending-posts__post-title a {
	color: {$title_styles['color']};
}
#$block_id .cozy-block-trending-posts__post-title a:hover {
	color: {$title_styles['color_hover']};
}

#$block_id .cozy-block-trending-posts__date {
	margin-top: {$attributes['dateStyles']['marginTop']};
	margin-bottom: {$attributes['dateStyles']['marginBottom']};
}
#$block_id .cozy-block-trending-posts__date a {
	{$date_padding}
	{$date_border}
	border-radius: {$attributes['dateStyles']['radius']};
	color: {$date_styles['color']};
	background-color: {$date_styles['bg_color']};
	font-size: {$attributes['dateStyles']['fontSize']};
	font-family: {$attributes['dateStyles']['fontFamily']};
	font-weight: {$attributes['dateStyles']['fontWeight']};
}
#$block_id .cozy-block-trending-posts__date a:hover {
	color: {$date_styles['color_hover']};
	background-color: {$date_styles['bg_color_hover']};
	border-color: {$date_styles['border_color_hover']};
}

#$block_id .cozy-block-trending-posts__ajax-loader-wrapper {
	margin-top: {$loader['margin']['top']};
	margin-bottom: {$loader['margin']['bottom']};
	text-align: {$loader['text_align']};
}
#$block_id .cozy-block-trending-posts__ajax-loader, #$block_id .scroll-spinner.has-loading-text {
	{$loader['padding']}
	{$loader['border']}
	border-radius: {$loader['radius']};
	font-size: {$loader['font']['size']};
	font-weight: {$loader['font']['weight']};
	font-family: {$loader['font']['family']};
	text-transform: {$loader['letter_case']};
	color: {$loader['color']['text']};
	background-color: {$loader['color']['bg']};
	min-width: {$loader['min_width']};
}
#$block_id .cozy-block-trending-posts__ajax-loader:hover {
	color: {$loader['color']['text_hover']};
	background-color: {$loader['color']['bg_hover']};
	border-color: {$loader['color']['border_hover']};
}
#$block_id .cozy-block-trending-posts__ajax-loader .spinner,
#$block_id .scroll-spinner {
	border-color: {$loader['color']['spinner_secondary']};
	border-top-color: {$loader['color']['spinner_primary']};
}

#$block_id .swiper-button-prev::after,
#$block_id .swiper-button-next::after {
	font-size: {$attributes['navigation']['size']};
}
#$block_id .swiper-button-prev,
#$block_id .swiper-button-next {
	width: {$attributes['navigation']['boxWidth']};
	height: {$attributes['navigation']['boxHeight']};
	{$nav_border}
	border-radius: {$attributes['navigation']['radius']};
	color: {$nav_styles['color']};
	background-color: {$nav_styles['bg_color']};
}
#$block_id.display-ticker .swiper-button-prev,
#$block_id.display-ticker .swiper-button-next {
	top: {$attributes['navigation']['verticalPosition']}px;
}
#$block_id .swiper-button-prev:hover,
#$block_id .swiper-button-next:hover {
	color: {$nav_styles['color_hover']};
	background-color: {$nav_styles['bg_color_hover']};
	border-color: {$nav_styles['border_color_hover']};
}
#$block_id .swiper-button-prev {
    right: var(--swiper-navigation-sides-offset, {$attributes['navigation']['horizontalGap']});
}

#$block_id.display-carousel .swiper-pagination {
	bottom: {$bullets['top']}px;
	text-align: {$bullets['align']};
	padding-left: {$bullets['left']};
	padding-right: {$bullets['right']};
}
#$block_id.display-carousel .swiper-pagination-bullet {
	width: {$bullets['width']};
	height: {$bullets['height']};
	border-radius: {$bullets['radius']};
	background-color: {$bullets['color']['default']};
}
#$block_id.display-carousel .swiper-pagination-horizontal .swiper-pagination-bullet {
	margin: 0 var(--swiper-pagination-bullet-horizontal-gap, {$bullets['gap']});
}
#$block_id.display-carousel .swiper-pagination-bullet:hover {
	background-color: {$bullets['color']['default_hover']};
}
#$block_id.display-carousel .swiper-pagination-bullet-active {
	width: {$bullets['active']['width']};
	height: {$bullets['active']['height']};
	border-radius: {$bullets['active']['radius']};
	{$bullets['active']['outline']}
	outline-offset: {$bullets['active']['offset']};
	background-color: {$bullets['color']['active']};
}
#$block_id.display-carousel .swiper-pagination-bullet-active:hover {
	background-color: {$bullets['color']['active_hover']};
}
BLOCK_STYLES;


$classes   = array();
$classes[] = 'cozy-block-trending-posts';
$classes[] = 'display-' . $attributes['display'];
$classes[] = 'ticker' === $attributes['display'] || 'carousel' === $attributes['display'] ? 'swiper-container' : '';
$classes[] = isset( $attributes['ajaxLoader']['enabled'], $attributes['ajaxLoader']['type'] ) && $attributes['ajaxLoader']['enabled'] && 'scroll' === $attributes['ajaxLoader']['type'] ? 'has-infinite-scroll' : '';
$classes[] = 'carousel' === $attributes['display'] && isset( $attributes['navigation']['hoverEffect'] ) && $attributes['navigation']['hoverEffect'] ? 'has-nav-hover-show' : '';
$classes[] = $attributes['itemStyles']['boxShadow']['enabled'] ? 'item-has-box-shadow' : '';

$output       = '<div class="' . implode( ' ', $classes ) . '" id="' . $block_id . '">';
$ul_classes   = array();
$ul_classes[] = ( 'grid' === $attributes['display'] || 'list' === $attributes['display'] ) ? 'cozy-block-trending-posts__' . $attributes['display'] . '-wrapper' : 'swiper-wrapper';
if ( isset( $attributes['categoryStyles']['fontFamily'] ) && ! empty( $attributes['categoryStyles']['fontFamily'] ) ) {
	$output .= '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=' . $attributes['categoryStyles']['fontFamily'] . ':wght@300;400;500;600;700;800;900" />';
}
if ( isset( $attributes['titleStyles']['fontFamily'] ) && ! empty( $attributes['titleStyles']['fontFamily'] ) ) {
	$output .= '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=' . $attributes['titleStyles']['fontFamily'] . ':wght@300;400;500;600;700;800;900" />';
}
if ( isset( $attributes['dateStyles']['fontFamily'] ) && ! empty( $attributes['dateStyles']['fontFamily'] ) ) {
	$output .= '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=' . $attributes['dateStyles']['fontFamily'] . ':wght@300;400;500;600;700;800;900" />';
}
if ( isset( $attributes['ajaxLoader']['font']['family'] ) && ! empty( $attributes['ajaxLoader']['font']['family'] ) ) {
	$output .= '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=' . $attributes['ajaxLoader']['font']['family'] . ':wght@300;400;500;600;700;800;900" />';
}
$output .= '<ul class="' . implode( ' ', $ul_classes ) . '">';
$args    = array(
	'post_type'      => 'post',
	'orderby'        => 'cozy_trending_post_views',
	'order'          => 'DESC',
	'posts_per_page' => $attributes['perPage'], // Number of trending posts to retrieve.
	'meta_key'       => 'cozy_trending_post_views', // Replace with your popularity field.
	'meta_query'     => array(
		'relation' => 'AND',
		array(
			'key'     => 'cozy_trending_post_views',
			'compare' => 'EXISTS', // Check if the timestamp is greater than or equal to one week ago.
		),
		array(
			'key'     => 'cozy_trending_post_views',
			'value'   => '0',
			'compare' => '>', // Check if the timestamp is greater than or equal to one week ago.
		),
	),
);

if ( ! function_exists( 'get_cozy_block_trending_posts_data' ) ) {
	function get_cozy_block_trending_posts_data( $args = array() ) {
		if ( ! empty( $args ) ) {
			$popular_posts        = new \WP_Query( $args );
			$additional_post_data = array();

			foreach ( $popular_posts->posts as $post_data ) {
				$post_image_url = get_the_post_thumbnail_url( $post_data->ID );
				$post_link      = get_permalink( $post_data->ID );
				$postid         = $post_data->ID;
				// Get categories and their links.
				$categories      = get_the_category( $post_data->ID );
				$post_categories = array();

				$post_data                   = (array) $post_data; // Convert WP_Post object to an array.
				$post_data['post_image_url'] = $post_image_url;

				foreach ( $categories as $category ) {
					$post_categories[] = array(
						'name'        => $category->name,
						'link'        => get_category_link( $category->term_id ),
						'count'       => $category->count,
						'description' => $category->description,
						'slug'        => $category->slug,
						'taxonomy'    => $category->taxonomy,
						'parent'      => $category->parent,
					);
				}
				$post_data['post_categories'] = $post_categories;

				$post_data['post_link']           = $post_link;
				$post_data['post_date_formatted'] = get_the_date( '', $postid );
				$additional_post_data[]           = $post_data;
			}

			wp_reset_postdata();

			return $additional_post_data;
		}

		return array();
	}
}

$additional_post_data = get_cozy_block_trending_posts_data( $args );

foreach ( $additional_post_data as $post_data ) {
	$item_classes   = array();
	$item_classes[] = 'cozy-block-trending-posts__item';
	$item_classes[] = 'ticker' === $attributes['display'] || 'carousel' === $attributes['display'] ? 'swiper-slide' : '';
	$output        .= '<li class="' . implode( ' ', $item_classes ) . '">';

	if ( 'list' === $attributes['display'] ) {
		$output .= '<div class="item__flex" style="display:flex;gap:' . $attributes['imageStyles']['gap'] . '">';
	}

	// Post Image.
	if ( $attributes['enableOptions']['image'] && ! empty( $post_data['post_image_url'] ) ) {
		$figure_classes   = array();
		$figure_classes[] = 'cozy-block-trending-posts__image';
		$figure_classes[] = $attributes['imageStyles']['hoverEffect'] ? 'has-hover-effect' : '';
		$output          .= '<figure class="' . implode( ' ', $figure_classes ) . '">';
		$output          .= '<a href="' . esc_url( $post_data['post_link'] ) . '" rel="noopener" target="_blank">';
		$output          .= '<img alt="' . esc_html_x( $post_data['post_title'], 'cozy-addons' ) . '" src="' . $post_data['post_image_url'] . '" />';
		$output          .= '</a>';
		$output          .= '</figure>';
	}

	$output .= '<div>';
	// Post Category.
	if ( $attributes['enableOptions']['category'] ) {
		$category_classes   = array();
		$category_classes[] = 'cozy-block-trending-posts__post-categories';
		$category_classes[] = $attributes['categoryStyles']['hoverEffect'] ? 'has-hover-effect' : '';
		$output            .= '<div class="' . implode( ' ', $category_classes ) . '">';
		foreach ( $post_data['post_categories'] as $cat_data ) {
			$output .= '<a href="' . esc_url( $cat_data['link'] ) . '" rel="noopener" target="_blank">';
			$output .= esc_html_x( $cat_data['name'], 'cozy-addons' );
			$output .= '</a>';
		}
		$output .= '</div>';
	}

	// Post Title.
	$output .= '<h4 class="cozy-block-trending-posts__post-title"><a href="' . esc_url( $post_data['post_link'] ) . '" rel="noopener" target="_blank">' . esc_html_x( $post_data['post_title'], 'cozy-addons' ) . '</a></h4>';

	// Post Excerpt
	if ( $attributes['enableOptions']['content'] ) {
		$output .= '<p class="cozy-block-trending-posts__content">';
		$output .= cozy_create_excerpt( $post_data['post_content'], $attributes['enableOptions']['excerpt'] );
		$output .= '</p>';
	}

	// Post Date.
	if ( $attributes['enableOptions']['date'] ) {
		$output .= '<p class="cozy-block-trending-posts__date">';
		$output .= '<a href="' . esc_url( $post_data['post_link'] ) . '" rel="noopener" target="_blank">' . esc_html_x( $post_data['post_date_formatted'], 'cozy-addons' ) . '</a>';
		$output .= '</p>';
	}
	$output .= '</div>';

	if ( 'list' === $attributes['display'] ) {
		$output .= '</div>';
	}
	$output .= '</li>';
}
$output .= '</ul>';

if ( ( 'ticker' === $attributes['display'] || 'carousel' === $attributes['display'] ) && $attributes['navigation']['enabled'] ) {
	$output .= '<div class="swiper-button-prev"></div>';
	$output .= '<div class="swiper-button-next"></div>';
}
if ( 'carousel' === $attributes['display'] && isset( $attributes['pagination'], $attributes['pagination']['enabled'] ) && $attributes['pagination']['enabled'] ) {
	$output .= '<div class="swiper-pagination"></div>';
}

if ( isset( $attributes['ajaxLoader']['enabled'] ) && $attributes['ajaxLoader']['enabled'] ) {
	if ( isset( $attributes['ajaxLoader']['type'] ) && 'default' === $attributes['ajaxLoader']['type'] ) {
		$args['posts_per_page'] = -1;
		$all_posts              = get_cozy_block_trending_posts_data( $args );

		$remaining_posts = array_udiff(
			$all_posts,
			$additional_post_data,
			function ( $a, $b ) {
				return $a['ID'] - $b['ID'];
			}
		);

		$classes   = array();
		$classes[] = 'cozy-block-trending-posts__ajax-loader';
		$classes[] = empty( $remaining_posts ) ? 'display-none' : '';
		$output   .= '<div class="cozy-block-trending-posts__ajax-loader-wrapper">';
		$output   .= '<button class="' . implode( ' ', $classes ) . '">';
		$output   .= '<span>' . esc_html_x( $loader['label'], 'cozy-addons' ) . '</span>';

		$classes   = array();
		$classes[] = 'spinner';
		$classes[] = isset( $attributes['ajaxLoader']['loadingText'] ) && ! empty( $attributes['ajaxLoader']['loadingText'] ) ? 'has-loading-text' : '';
		$output   .= '<div class="' . implode( ' ', $classes ) . '">';
		$output   .= esc_html_x( $loader['loading_text'], 'cozy-addons' );
		$output   .= '<span class="cozy-block-trending-posts__dots"></span>';
		$output   .= '</div>';

		$output .= '</button>';
		$output .= '</div>';
	}

	if ( isset( $attributes['ajaxLoader']['type'] ) && 'scroll' === $attributes['ajaxLoader']['type'] ) {
		$output   .= '<div style="text-align: center;">';
		$classes   = array();
		$classes[] = 'scroll-spinner';
		$classes[] = 'display-none';
		$classes[] = isset( $attributes['ajaxLoader']['loadingText'] ) && ! empty( $attributes['ajaxLoader']['loadingText'] ) ? 'has-loading-text' : '';
		$output   .= '<div class="' . implode( ' ', $classes ) . '">';
		if ( isset( $attributes['ajaxLoader']['loadingText'] ) && ! empty( $attributes['ajaxLoader']['loadingText'] ) ) {
			$output .= esc_html_x( $loader['loading_text'], 'cozy-addons' );
			$output .= '<span class="cozy-block-trending-posts__dots"></span>';
		}
		$output .= '</div>';
		$output .= '</div>';
	}
}

$output .= '</div>';

$wrapper_attributes = get_block_wrapper_attributes();

$render = sprintf( '<div class="cozy-block-wrapper cozy-block-trending-posts-wrapper"><div %1$s><style>%2$s</style> %3$s</div></div>', $wrapper_attributes, $block_styles, $output );
echo $render;
