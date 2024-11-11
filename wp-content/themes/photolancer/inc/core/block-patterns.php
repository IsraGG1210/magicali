<?php

/**
 * photolancer: Block Patterns
 *
 * @since photolancer 1.0.0
 */

/**
 * Registers pattern categories for photolancer
 *
 * @since photolancer 1.0.0
 *
 * @return void
 */
function photolancer_register_pattern_category()
{
	$block_pattern_categories = array(
		'photolancer' => array('label' => __('Photolancer Sections', 'photolancer')),
		'photolancer-homes' => array('label' => __('Homepage Templates', 'photolancer')),
		'photolancer-pages' => array('label' => __('Page Templates', 'photolancer')),
	);

	$block_pattern_categories = apply_filters('photolancer_block_pattern_categories', $block_pattern_categories);

	foreach ($block_pattern_categories as $name => $properties) {
		if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
			register_block_pattern_category($name, $properties); // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		}
	}
}
add_action('init', 'photolancer_register_pattern_category', 9);
