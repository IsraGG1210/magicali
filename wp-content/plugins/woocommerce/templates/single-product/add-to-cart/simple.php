<?php
defined( 'ABSPATH' ) || exit;

global $product;

if ( ! $product->is_purchasable() ) {
    return;
}

echo wc_get_stock_html( $product );

if ( $product->is_in_stock() ) : ?>

    <?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>

    <form class="cart" method="post" enctype='multipart/form-data' id="solicitar-lectura-form">
        <?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

        <input type="hidden" name="product_id" value="<?php echo esc_attr( $product->get_id() ); ?>" />

        <a href="http://localhost/magiacali_orig/quiero-ser-suscriptor/">
            <button type="button" class="single_add_to_cart_button button alt btn-primary btn btn-md">
                Suscribirme
            </button>
        </a>

        <?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
    </form>

    <?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>

<?php endif; ?>

