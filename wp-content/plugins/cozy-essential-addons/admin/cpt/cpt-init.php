<?php
if (cozythemes_demo_importer_premium_access()) {
    $options = get_option('ct_custom_options_settings');
    /**
     *Initilize and includes custok post type for the plugin
     */

    if (isset($options['portfolio_enabled']) && $options['portfolio_enabled'] == 1) {
        require_once COZY_ESSENTIAL_ADDONS_PATH . 'admin/cpt/cea-portfolio.php';
    }
    if (isset($options['testimonial_enabled']) && $options['testimonial_enabled'] == 1) {
        require_once COZY_ESSENTIAL_ADDONS_PATH . 'admin/cpt/cea-testimonial.php';
    }
    if (isset($options['team_enabled']) && $options['team_enabled'] == 1) {
        require_once COZY_ESSENTIAL_ADDONS_PATH . 'admin/cpt/cea-team.php';
    }
    if (isset($options['service_enabled']) && $options['service_enabled'] == 1) {
        require_once COZY_ESSENTIAL_ADDONS_PATH . 'admin/cpt/cea-service.php';
    }
    if (isset($options['faq_enabled']) && $options['faq_enabled'] == 1) {
        require_once COZY_ESSENTIAL_ADDONS_PATH . 'admin/cpt/cea-faq.php';
    }
    if (isset($options['promotion_enabled']) && $options['promotion_enabled'] == 1) {
        require_once COZY_ESSENTIAL_ADDONS_PATH . 'admin/cpt/cea-promotion.php';
    }
} else {
    require_once COZY_ESSENTIAL_ADDONS_PATH . 'admin/cpt/cea-portfolio.php';
    require_once COZY_ESSENTIAL_ADDONS_PATH . 'admin/cpt/cea-testimonial.php';
    require_once COZY_ESSENTIAL_ADDONS_PATH . 'admin/cpt/cea-team.php';
    require_once COZY_ESSENTIAL_ADDONS_PATH . 'admin/cpt/cea-faq.php';
    require_once COZY_ESSENTIAL_ADDONS_PATH . 'admin/cpt/cea-promotion.php';
    require_once COZY_ESSENTIAL_ADDONS_PATH . 'admin/cpt/cea-service.php';
}
