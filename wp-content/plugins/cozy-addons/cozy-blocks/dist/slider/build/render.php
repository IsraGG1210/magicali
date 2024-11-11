<?php

$client_id     = ! empty( $attributes['blockClientId'] ) ? str_replace( array( ';', '=', '(', ')', ' ' ), '', wp_strip_all_tags( $attributes['blockClientId'] ) ) : '';
$slider_var = 'slider_' . str_replace( '-', '_', $client_id );
wp_localize_script( 'cozy-block-scripts', $slider_var, $attributes );
wp_add_inline_script( 'cozy-block-scripts', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockSliderInit( "' . $client_id . '" ) }) ' );

$wrapper_attributes = get_block_wrapper_attributes();

$output = '<div class="cozy-block-wrapper cozy-block-slider-wrapper"><div ' . $wrapper_attributes . '>';

$output .= $content;

$output .= '</div></div>';

echo $output;
