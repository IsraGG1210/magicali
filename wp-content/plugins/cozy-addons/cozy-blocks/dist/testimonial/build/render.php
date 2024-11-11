<?php
$client_id     = ! empty( $attributes['blockClientId'] ) ? str_replace( array( ';', '=', '(', ')', ' ' ), '', wp_strip_all_tags( $attributes['blockClientId'] ) ) : '';
$cozy_block_var = 'cozyTestimonial_' . str_replace( '-', '_', $client_id );
wp_localize_script( 'cozy-block-scripts', $cozy_block_var, $attributes );
wp_add_inline_script( 'cozy-block-scripts', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockTestimonialInit( "' . $client_id . '" ) }) ' );

$block_id = 'cozyBlock_' . str_replace( '-', '_', $client_id );

$width1 = $attributes['gridOptions']['displayColumn'] <= 3 ? $attributes['gridOptions']['displayColumn'] : 3;
$width2 = $attributes['gridOptions']['displayColumn'] <= 2 ? $attributes['gridOptions']['displayColumn'] : 2;

$block_styles = <<<BLOCK_STYLES
@media screen and (max-width: 1024px) {
    #$block_id.display-grid:not(.has-masonry) .cozy-block-grid-wrapper {
        grid-template-columns: repeat(
            $width1,
            1fr
        ) !important;
    }
    #$block_id.display-grid.has-masonry .cozy-block-grid-wrapper {
        column-count: $width1 !important;
    }
}

@media screen and (max-width: 767px) {
    #$block_id.display-grid:not(.has-masonry) .cozy-block-grid-wrapper {
        grid-template-columns: repeat(
            $width2,
            1fr
        ) !important;
    }
    #$block_id.display-grid.has-masonry .cozy-block-grid-wrapper {
        column-count: $width2 !important;
    }
}

@media screen and (max-width: 400px) {
    #$block_id.display-grid:not(.has-masonry) .cozy-block-grid-wrapper {
        grid-template-columns: repeat(
            1,
            1fr
        ) !important;
    }
    #$block_id.display-grid.has-masonry .cozy-block-grid-wrapper {
        column-count: 1 !important;
    }
}
BLOCK_STYLES;

$output  = '<div class="cozy-block-wrapper">';
$output  .= '<style>' . $block_styles . '</style>';
$output .= $content;
$output .= '</div>';

echo $output;
