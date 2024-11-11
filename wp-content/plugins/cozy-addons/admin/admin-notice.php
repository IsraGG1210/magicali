<?php

/**
 * Adding Admin Notice for recommended plugins
 */
if ( ! function_exists( 'cozy_addons_activation_admin_notice' ) ) :
	function cozy_addons_activation_admin_notice() {
		global $submenu;

		$main_menu = 'cozy-addons';
		global $pagenow;
		$current_screen = get_current_screen();

		if ( is_admin() ) {
			if ( is_network_admin() ) {
				return;
			}
			if ( ! current_user_can( 'manage_options' ) ) {
				return;
			}
			if ( get_option( 'cozy_dashboard_dismissed_notice' ) ) {
				return;
			} ?>
			<div class="notice notice-info is-dismissible cozy-addons-admin-notice">
				<div class="notice-content">
					<div class="notice-holder">
						<h4><?php echo __( 'Welcome to the Cozy Blocks!', 'cozy-addons' ); ?></h4>
						<!-- plugins list need to be install -->
						<h1>
							<?php echo __( 'Optimize your workflow effortlessly! Cozy Blocks pairs perfectly with our 30+ Advanced Blocks.', 'cozy-addons' ); ?>
						</h1>
						<p>
							<?php echo __( 'Supercharge your website design with Cozy Blocks Premium! Access up to 30+ advanced blocks, enjoy regular updates, and receive priority support. Upgrade now for an ad-free, seamless editing experience! ', 'cozy-addons' ); ?> 🚀</p>
						<a href="<?php echo admin_url(); ?>admin.php?page=_cozy_companions" class="cozy-btns btns-more"><?php echo __( 'Explore Cozy Blocks', 'cozy-addons' ); ?></a>
						<a href="https://cozythemes.com/cozy-addons/" class="cozy-btns btns-more checkout-btn" target="_blank"><?php echo __( 'Checkout Pro', 'cozy-addons' ); ?></a>
					</div>
				</div>
				<div class="pluign-screen">
					<img src="<?php echo COZY_ADDONS_PLUGIN_URL . '/admin/images/cozy-blocks-notice-image.png'; ?>" />
				</div>
			</div>
			<?php
		}
	}

endif;
add_action( 'admin_notices', 'cozy_addons_activation_admin_notice' );

if ( ! function_exists( 'cozy_addons_invalid_theme_type_notice' ) ) :
	function cozy_addons_invalid_theme_type_notice() {
		// echo '<pre>            Oops your theme is not a block theme!</pre>';
		if ( is_admin() ) {
			if ( cozy_addons_is_block_theme() ) {
				return;
			}

			if ( is_network_admin() ) {
				return;
			}
			if ( ! current_user_can( 'manage_options' ) ) {
				return;
			}
			if ( get_option( 'cozy_addons_block_theme' ) ) {
				return;
			}
			?>
			<div class="fs-notice notice fs-has-title notice-warning is-dismissible cozy-blocks-admin-notice">
				<label class="fs-plugin-title">Cozy Blocks</label>
				<div class="notice-content">
					<div class="notice-holder">
						<p>
							<strong><?php echo __( 'Uh-oh!', 'cozy-addons' ); ?></strong><?php echo __( ' Cozy Blocks is tailored for Full Site Editing (FSE), however addons compatible with Elementor are available for use.', 'cozy-addons' ); ?></p>
					</div>
				</div>
			</div>
			<?php
		}
	}
	endif;
	add_action( 'admin_notices', 'cozy_addons_invalid_theme_type_notice' );
