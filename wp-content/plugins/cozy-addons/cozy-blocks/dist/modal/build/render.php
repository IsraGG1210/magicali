<?php
$client_id      = ! empty( $attributes['blockClientId'] ) ? str_replace( array( ';', '=', '(', ')', ' ' ), '', wp_strip_all_tags( $attributes['blockClientId'] ) ) : '';
$cozy_block_var = 'cozyModal_' . str_replace( '-', '_', $client_id );
wp_localize_script( 'cozy-block-scripts', $cozy_block_var, $attributes );
wp_add_inline_script( 'cozy-block-scripts', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockModalInit( "' . $client_id . '" ) }) ' );

$block_id = 'cozyBlock_' . str_replace( '-', '_', $client_id );

$color = array(
	'bg'         => isset( $attributes['backgroundColor'] ) ? $attributes['backgroundColor'] : '',
	'icon'       => isset( $attributes['iconStyles']['iconColor'] ) ? $attributes['iconStyles']['iconColor'] : '',
	'icon_hover' => isset( $attributes['iconStyles']['iconColorHover'] ) ? $attributes['iconStyles']['iconColorHover'] : '',
);

$button_color = array(
	'border'     => isset( $attributes['clickButtonStyles']['borderColor'] ) ? $attributes['clickButtonStyles']['borderColor'] : '',
	'text'       => isset( $attributes['clickButtonStyles']['color'] ) ? $attributes['clickButtonStyles']['color'] : '',
	'bg'         => isset( $attributes['clickButtonStyles']['bgColor'] ) ? $attributes['clickButtonStyles']['bgColor'] : '',
	'text_hover' => isset( $attributes['clickButtonStyles']['colorHover'] ) ? $attributes['clickButtonStyles']['colorHover'] : '',
	'bg_hover'   => isset( $attributes['clickButtonStyles']['bgColorHover'] ) ? $attributes['clickButtonStyles']['bgColorHover'] : '',
);

$block_styles = <<<BLOCK_STYLES
.cozy-modal-open[data-type="{$client_id}"] {
    padding: {$attributes['clickButtonStyles']['padding']['top']}px {$attributes['clickButtonStyles']['padding']['right']}px {$attributes['clickButtonStyles']['padding']['bottom']}px {$attributes['clickButtonStyles']['padding']['left']}px;
    border-style: {$attributes['clickButtonStyles']['borderType']};
    border-width: {$attributes['clickButtonStyles']['borderWidth']['top']}px {$attributes['clickButtonStyles']['borderWidth']['right']}px {$attributes['clickButtonStyles']['borderWidth']['bottom']}px {$attributes['clickButtonStyles']['borderWidth']['left']}px;
    border-color: {$button_color['border']};
    border-radius: {$attributes['clickButtonStyles']['borderRadius']}px;
    font-size: {$attributes['clickButtonStyles']['fontSize']}px;
    color: {$button_color['text']};
    background-color: {$button_color['bg']};
}
.cozy-modal-open[data-type="{$client_id}"]:hover {
    color: {$button_color['text_hover']};
    background-color: {$button_color['bg_hover']};
}
#$block_id {
    padding: {$attributes['padding']['top']}px {$attributes['padding']['right']}px {$attributes['padding']['bottom']}px {$attributes['padding']['left']}px;
    background-color: {$color['bg']};
}
#$block_id.type-default {
    width: {$attributes['boxWidth']}px;
}
#$block_id .close-icon-wrapper svg {
    margin: {$attributes['iconStyles']['verticalSpacing']}px {$attributes['iconStyles']['horizontalSpacing']}px;
    width: {$attributes['iconStyles']['iconSize']}px;
    height: {$attributes['iconStyles']['iconSize']}px;
    fill: {$color['icon']};
}
#$block_id .close-icon-wrapper:hover svg {
    fill: {$color['icon_hover']};
}
BLOCK_STYLES;

$output  = '<div class="cozy-block-wrapper" data-block="' . $client_id . '">';
$output .= '<style>' . $block_styles . '</style>';
$output .= $content;
$output .= '</div>';

echo $output;
