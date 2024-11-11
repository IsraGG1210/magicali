<?php
$output     = '<div class="cozy-block-wrapper">';
$typography = $attributes['typography'];
$style      = '--cozyFontSize: ' . $typography['fontSize'] . 'px;';
$style     .= ' --cozyFontWeight: ' . $typography['fontWeight'] . ';';
$style     .= ' --cozyFontFamily: ' . str_replace( '"', '', $typography['fontFamily'] ) . ';';
$style     .= ' --cozyColor: ' . $typography['color'] . ';';
$style     .= ' --cozyLinkColor: ' . $typography['linkColor'] . ';';
$style     .= ' --cozyHoverColor: ' . $typography['hoverColor'] . ';';

$client_id = ! empty( $attributes['blockClientId'] ) ? str_replace( array( ';', '=', '(', ')', ' ' ), '', wp_strip_all_tags( $attributes['blockClientId'] ) ) : '';
$block_id  = str_replace( '-', '_', $client_id );

if ( ! is_home() ) {
	$output .= '<p class="cozy-block-breadcrumb" id="cozyBreadcrumb_ ' . $block_id . '" style=" ' . $style . '">';
	$output .= '<a href="' . home_url( '/' ) . '">Home</a> / ';
	if ( is_category() ) {
		$category = single_cat_title( '', false );
		$output  .= $category;
	} elseif ( is_single() ) {
		$categories = get_the_category();
		if ( is_single() && $categories ) {
			$output .= '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a> / ';
		}
		$output .= get_the_title();
	} elseif ( is_page() ) {
		$output .= the_title( '', '', false );
	}

	$output .= '</p>';
}

$output .= '</div>';

echo $output;
