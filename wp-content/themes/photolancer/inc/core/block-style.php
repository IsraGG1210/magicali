<?php

/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package photolancer
 * @since 1.0.0
 */

if (function_exists('register_block_style')) {
    /**
     * Register block styles.
     *
     * @since 0.1
     *
     * @return void
     */
    function photolancer_register_block_styles()
    {
        register_block_style(
            'core/columns',
            array(
                'name'  => 'photolancer-boxshadow',
                'label' => __('Box Shadow', 'photolancer')
            )
        );

        register_block_style(
            'core/column',
            array(
                'name'  => 'photolancer-boxshadow',
                'label' => __('Box Shadow', 'photolancer')
            )
        );
        register_block_style(
            'core/column',
            array(
                'name'  => 'photolancer-boxshadow-medium',
                'label' => __('Box Shadow Medium', 'photolancer')
            )
        );
        register_block_style(
            'core/column',
            array(
                'name'  => 'photolancer-boxshadow-large',
                'label' => __('Box Shadow Large', 'photolancer')
            )
        );

        register_block_style(
            'core/group',
            array(
                'name'  => 'photolancer-boxshadow',
                'label' => __('Box Shadow', 'photolancer')
            )
        );
        register_block_style(
            'core/group',
            array(
                'name'  => 'photolancer-boxshadow-medium',
                'label' => __('Box Shadow Medium', 'photolancer')
            )
        );
        register_block_style(
            'core/group',
            array(
                'name'  => 'photolancer-boxshadow-large',
                'label' => __('Box Shadow Larger', 'photolancer')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'photolancer-boxshadow',
                'label' => __('Box Shadow', 'photolancer')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'photolancer-boxshadow-medium',
                'label' => __('Box Shadow Medium', 'photolancer')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'photolancer-boxshadow-larger',
                'label' => __('Box Shadow Large', 'photolancer')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'photolancer-image-pulse',
                'label' => __('Iamge Pulse Effect', 'photolancer')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'photolancer-boxshadow-hover',
                'label' => __('Box Shadow on Hover', 'photolancer')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'photolancer-image-hover-pulse',
                'label' => __('Hover Pulse Effect', 'photolancer')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'photolancer-image-hover-rotate',
                'label' => __('Hover Rotate Effect', 'photolancer')
            )
        );
        register_block_style(
            'core/columns',
            array(
                'name'  => 'photolancer-boxshadow-hover',
                'label' => __('Box Shadow on Hover', 'photolancer')
            )
        );

        register_block_style(
            'core/column',
            array(
                'name'  => 'photolancer-boxshadow-hover',
                'label' => __('Box Shadow on Hover', 'photolancer')
            )
        );

        register_block_style(
            'core/group',
            array(
                'name'  => 'photolancer-boxshadow-hover',
                'label' => __('Box Shadow on Hover', 'photolancer')
            )
        );

        register_block_style(
            'core/post-terms',
            array(
                'name'  => 'categories-background-with-round',
                'label' => __('Background with round corner style', 'photolancer')
            )
        );
        register_block_style(
            'core/post-title',
            array(
                'name'  => 'title-hover-primary-color',
                'label' => __('Hover: Primary color', 'photolancer')
            )
        );
        register_block_style(
            'core/post-title',
            array(
                'name'  => 'title-hover-secondary-color',
                'label' => __('Hover: Secondary color', 'photolancer')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-primary-color',
                'label' => __('Hover: Primary Color', 'photolancer')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-secondary-color',
                'label' => __('Hover: Secondary Color', 'photolancer')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-primary-bgcolor',
                'label' => __('Hover: Primary color fill', 'photolancer')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-secondary-bgcolor',
                'label' => __('Hover: Secondary color fill', 'photolancer')
            )
        );

        register_block_style(
            'core/read-more',
            array(
                'name'  => 'readmore-hover-primary-color',
                'label' => __('Hover: Primary Color', 'photolancer')
            )
        );
        register_block_style(
            'core/read-more',
            array(
                'name'  => 'readmore-hover-secondary-color',
                'label' => __('Hover: Secondary Color', 'photolancer')
            )
        );
        register_block_style(
            'core/read-more',
            array(
                'name'  => 'readmore-hover-primary-fill',
                'label' => __('Hover: Primary Fill', 'photolancer')
            )
        );
        register_block_style(
            'core/read-more',
            array(
                'name'  => 'readmore-hover-secondary-fill',
                'label' => __('Hover: secondary Fill', 'photolancer')
            )
        );

        register_block_style(
            'core/list',
            array(
                'name'  => 'list-style-no-bullet',
                'label' => __('List Style: Hide bullet', 'photolancer')
            )
        );
        register_block_style(
            'core/list',
            array(
                'name'  => 'hide-bullet-list-link-hover-style-primary',
                'label' => __('Hover style with primary color and hide bullet', 'photolancer')
            )
        );
        register_block_style(
            'core/list',
            array(
                'name'  => 'hide-bullet-list-link-hover-style-secondary',
                'label' => __('Hover style with secondary color and hide bullet', 'photolancer')
            )
        );

        register_block_style(
            'core/gallery',
            array(
                'name'  => 'enable-grayscale-mode-on-image',
                'label' => __('Enable Grayscale Mode on Image', 'photolancer')
            )
        );
        register_block_style(
            'core/social-links',
            array(
                'name'  => 'social-icon-border',
                'label' => __('Border Style', 'photolancer')
            )
        );
        register_block_style(
            'core/page-list',
            array(
                'name'  => 'photolancer-page-list-bullet-hide-style',
                'label' => __('Hide Bullet Style', 'photolancer')
            )
        );
        register_block_style(
            'core/categories',
            array(
                'name'  => 'photolancer-categories-bullet-hide-style',
                'label' => __('Hide Bullet Style', 'photolancer')
            )
        );
        register_block_style(
            'core/cover',
            array(
                'name'  => 'photolancer-cover-unset-overflow',
                'label' => __('Unset Overflow', 'photolancer')
            )
        );
    }
    add_action('init', 'photolancer_register_block_styles');
}
