<?php

/**
 * Title: Photo Gallery
 * Slug: photolancer/photo-gallery
 * Categories: photolancer
 */
$photolancer_url = trailingslashit(get_template_directory_uri());
$photolancer_images = array(
    $photolancer_url . 'assets/images/g1.jpg',
    $photolancer_url . 'assets/images/g2.jpg',
    $photolancer_url . 'assets/images/g3.jpg',
    $photolancer_url . 'assets/images/g4.jpg',
    $photolancer_url . 'assets/images/g5.jpg',
    $photolancer_url . 'assets/images/g6.jpg',
    $photolancer_url . 'assets/images/g7.jpg',
    $photolancer_url . 'assets/images/g8.jpg',
    $photolancer_url . 'assets/images/g9.jpg',
    $photolancer_url . 'assets/images/g10.jpg',
    $photolancer_url . 'assets/images/g11.jpg',
    $photolancer_url . 'assets/images/g12.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"100px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-light-color-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:100px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"0","bottom":"60px"}}},"layout":{"type":"constrained","contentSize":"680px"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:60px"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"xx-large"} -->
        <h1 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:700"><?php esc_html_e('Most Recent', 'photolancer') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'photolancer') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:gallery {"columns":4,"linkTarget":"_blank","linkTo":"media","sizeSlug":"full","className":"photolancer-gallery","style":{"spacing":{"blockGap":{"top":"5px","left":"5px"}}}} -->
    <figure class="wp-block-gallery has-nested-images columns-4 is-cropped photolancer-gallery">
        <?php foreach ($photolancer_images as $photolancer_image_url) : ?>
            <!-- wp:image {"sizeSlug":"full","linkDestination":"media"} -->
            <figure class="wp-block-image size-full">
                <a href="<?php echo esc_url($photolancer_image_url); ?>" target="_blank">
                    <img src="<?php echo esc_url($photolancer_image_url); ?>" alt="" />
                </a>
            </figure>
            <!-- /wp:image -->
        <?php endforeach; ?>
    </figure>
    <!-- /wp:gallery -->

    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"64px","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons" style="margin-top:64px;margin-bottom:0"><!-- wp:button {"backgroundColor":"dark-shade","className":"is-style-button-hover-primary-bgcolor","style":{"spacing":{"padding":{"left":"44px","right":"44px","top":"24px","bottom":"24px"}},"border":{"radius":"60px"},"typography":{"fontSize":"18px"}}} -->
        <div class="wp-block-button has-custom-font-size is-style-button-hover-primary-bgcolor" style="font-size:18px"><a class="wp-block-button__link has-dark-shade-background-color has-background wp-element-button" style="border-radius:60px;padding-top:24px;padding-right:44px;padding-bottom:24px;padding-left:44px"><?php esc_html_e('Explore More Photos', 'photolancer') ?></a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</div>
<!-- /wp:group -->