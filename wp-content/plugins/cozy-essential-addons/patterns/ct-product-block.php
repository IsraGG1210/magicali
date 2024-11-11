<?php

/**
 * Title: PRO: Product Block
 * Slug: cozy-essential-addons/ct-product-block
 * Categories: ct-patterns, fotawp-products
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","bottom":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
    <div class="wp-block-group" style="padding-right:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase","letterSpacing":"1px"},"spacing":{"margin":{"bottom":"0"}}},"textColor":"foreground","fontSize":"xx-small"} -->
        <h3 class="wp-block-heading has-text-align-center has-foreground-color has-text-color has-xx-small-font-size" style="margin-bottom:0;font-style:normal;font-weight:500;letter-spacing:1px;text-transform:uppercase">Latest Products</h3>
        <!-- /wp:heading -->

        <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"large"} -->
        <h3 class="wp-block-heading has-text-align-center has-large-font-size" style="font-style:normal;font-weight:500">Visit our store to grab trending fashion kits</h3>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:query {"queryId":177,"query":{"perPage":"8","pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"displayLayout":{"type":"flex","columns":4},"className":"ct-products-block"} -->
    <div class="wp-block-query ct-products-block"><!-- wp:post-template -->
        <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30"},"blockGap":"0","margin":{"top":"0","bottom":"0"}},"border":{"radius":"7px","width":"0px","style":"none"}},"className":"is-style-fotawp-boxshadow","layout":{"type":"constrained"}} -->
        <div class="wp-block-group is-style-fotawp-boxshadow" style="border-style:none;border-width:0px;border-radius:7px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":10,"minHeight":280,"contentPosition":"top right","isDark":false,"className":"ct-product-featured-image-holder is-style-fotawp-cover-round-style"} -->
            <div class="wp-block-cover is-light has-custom-content-position is-position-top-right ct-product-featured-image-holder is-style-fotawp-cover-round-style" style="min-height:280px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-10 has-background-dim"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:woocommerce/product-sale-badge {"isDescendentOfQueryLoop":true} /--></div>
            </div>
            <!-- /wp:cover -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"0","bottom":"var:preset|spacing|40","left":"0"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-right:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group" style="margin-top:0"><!-- wp:post-title {"textAlign":"center","level":4,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"className":"is-style-title-hover-secondary-color","fontSize":"medium"} /-->

                    <!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center"} /-->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:post-template -->

        <!-- wp:query-no-results -->
        <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
        <p></p>
        <!-- /wp:paragraph -->
        <!-- /wp:query-no-results -->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->