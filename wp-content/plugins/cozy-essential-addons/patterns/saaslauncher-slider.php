<?php

/**
 * Title: PRO: Slider
 * Slug: cozy-essential-addons/saaslauncher-slider
 * Categories: saaslauncher
 */
$ct_patterns_media = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/saaslauncher/hero-image-1.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/saaslauncher/hero-image-2.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cozy-block/slider {"blockClientId":"a6aeddf5-1169-42a7-92a8-c23b87a07c90","pagination":{"width":"10px","height":"10px","borderRadius":"100px","activeWidth":"10px","activeHeight":"10px","activeBorderRadius":"100px","bottom":24,"left":0,"right":0,"align":"center","gap":"4px","activeColor":"#AC5BFF","color":"#FFFFFE","activeColorHover":"#6967FF","colorHover":"#6967FF","dynamicBullets":false},"navigation":{"iconSize":15,"iconRotate":0,"iconBoxWidth":45,"iconBoxHeight":45,"borderRadius":50,"borderType":"none","borderWidth":1,"borderColor":"#000","borderColorHover":"","backgroundColor":"#fff","color":"#AC5BFF","backgroundColorHover":"#6967FF","colorHover":"#fff","padding":{"top":5,"right":5,"bottom":5,"left":5,"responsive":"desktop"},"arrowIconNext":"\u003csvg aria-hidden='true' focusable='false' data-prefix='fas' data-icon='0' class='svg-inline\u002d\u002dfa fa-0 ' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 320 512'\u003e\u003cpath fill='currentColor' d='M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z'\u003e\u003c/path\u003e\u003c/svg\u003e","arrowIconPrev":"\u003csvg aria-hidden='true' focusable='false' data-prefix='fas' data-icon='angle-left' class='svg-inline\u002d\u002dfa fa-angle-left ' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 320 512'\u003e\u003cpath fill='currentColor' d='M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z'\u003e\u003c/path\u003e\u003c/svg\u003e"},"thumbMedia":["",""]} -->
    <div class="wp-block-cozy-block-slider">
        <div class="cozy-block-slider swiper-container hover-show " id="cozyBlock_a6aeddf5_1169_42a7_92a8_c23b87a07c90">
            <div class="swiper-wrapper"><!-- wp:cozy-block/slide {"blockClientId":"5b73d5de-2f63-4368-81b2-2f0e45433169"} -->
                <!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[0]) ?>","id":9092,"dimRatio":0,"customOverlayColor":"#1c100e","minHeight":790,"contentPosition":"center center","layout":{"type":"constrained","contentSize":"1180px"}} -->
                <div class="wp-block-cover" style="min-height:790px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#1c100e"></span><img class="wp-block-cover__image-background wp-image-9092" alt="" src="<?php echo esc_url($ct_patterns_media[0]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"640px","justifyContent":"left"}} -->
                        <div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                            <div class="wp-block-group"><!-- wp:group {"className":"is-style-saaslauncher-gradient-border","style":{"spacing":{"padding":{"top":"8px","bottom":"8px","left":"24px","right":"24px"}},"border":{"radius":"60px","top":{"radius":"60px","width":"2px"},"right":{"radius":"60px","width":"2px"},"bottom":{"radius":"60px","width":"0px","style":"none"},"left":{"radius":"60px","width":"2px"}}},"backgroundColor":"dark-shade","layout":{"type":"constrained"}} -->
                                <div class="wp-block-group is-style-saaslauncher-gradient-border has-dark-shade-background-color has-background" style="border-radius:60px;border-top-width:2px;border-right-width:2px;border-bottom-style:none;border-bottom-width:0px;border-left-width:2px;padding-top:8px;padding-right:24px;padding-bottom:8px;padding-left:24px"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"normal"} -->
                                    <h5 class="wp-block-heading has-light-color-color has-text-color has-link-color has-normal-font-size"><?php esc_html_e('Welcome to SaasLauncher', 'cozy-essential-addons') ?></h5>
                                    <!-- /wp:heading -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"fontSize":"64px","fontStyle":"normal","fontWeight":"800","lineHeight":"1.2"}}} -->
                            <h1 class="wp-block-heading has-text-align-left" style="font-size:64px;font-style:normal;font-weight:800;line-height:1.2"><?php esc_html_e('Elevate Your Social Scene The', 'cozy-essential-addons') ?> <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color"><?php esc_html_e('Ultimate Encounter', 'cozy-essential-addons') ?></mark></h1>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph -->
                            <p><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'cozy-essential-addons') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:buttons {"className":"is-style-button-zoom-on-hover","style":{"spacing":{"margin":{"top":"40px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
                            <div class="wp-block-buttons is-style-button-zoom-on-hover" style="margin-top:40px"><!-- wp:button {"gradient":"gradient-twelve","style":{"border":{"radius":"60px"},"spacing":{"padding":{"left":"40px","right":"40px","top":"20px","bottom":"20px"}}},"fontSize":"medium"} -->
                                <div class="wp-block-button has-custom-font-size has-medium-font-size"><a class="wp-block-button__link has-gradient-twelve-gradient-background has-background wp-element-button" style="border-radius:60px;padding-top:20px;padding-right:40px;padding-bottom:20px;padding-left:40px"><?php esc_html_e('Start Free Trial', 'cozy-essential-addons') ?></a></div>
                                <!-- /wp:button -->
                            </div>
                            <!-- /wp:buttons -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                </div>
                <!-- /wp:cover -->
                <!-- /wp:cozy-block/slide -->

                <!-- wp:cozy-block/slide {"blockClientId":"c87eeb06-c207-4990-9552-ce16187cf173"} -->
                <!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[1]) ?>","id":9108,"dimRatio":0,"customOverlayColor":"#1a1918","minHeight":790,"contentPosition":"center center","layout":{"type":"constrained","contentSize":"1180px"}} -->
                <div class="wp-block-cover" style="min-height:790px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#1a1918"></span><img class="wp-block-cover__image-background wp-image-9108" alt="" src="<?php echo esc_url($ct_patterns_media[1]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"640px","justifyContent":"left"}} -->
                        <div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                            <div class="wp-block-group"><!-- wp:group {"className":"is-style-saaslauncher-gradient-border","style":{"spacing":{"padding":{"top":"8px","bottom":"8px","left":"24px","right":"24px"}},"border":{"radius":"60px","top":{"radius":"60px","width":"2px"},"right":{"radius":"60px","width":"2px"},"bottom":{"radius":"60px","width":"0px","style":"none"},"left":{"radius":"60px","width":"2px"}}},"backgroundColor":"dark-shade","layout":{"type":"constrained"}} -->
                                <div class="wp-block-group is-style-saaslauncher-gradient-border has-dark-shade-background-color has-background" style="border-radius:60px;border-top-width:2px;border-right-width:2px;border-bottom-style:none;border-bottom-width:0px;border-left-width:2px;padding-top:8px;padding-right:24px;padding-bottom:8px;padding-left:24px"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"normal"} -->
                                    <h5 class="wp-block-heading has-light-color-color has-text-color has-link-color has-normal-font-size"><?php esc_html_e('Welcome to SaasLauncher', 'cozy-essential-addons') ?></h5>
                                    <!-- /wp:heading -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"fontSize":"64px","fontStyle":"normal","fontWeight":"800","lineHeight":"1.2"}}} -->
                            <h1 class="wp-block-heading has-text-align-left" style="font-size:64px;font-style:normal;font-weight:800;line-height:1.2"><?php esc_html_e('Elevate Your Social Scene The', 'cozy-essential-addons') ?> <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color"><?php esc_html_e('Ultimate Encounter', 'cozy-essential-addons') ?></mark></h1>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph -->
                            <p><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'cozy-essential-addons') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:buttons {"className":"is-style-button-zoom-on-hover","style":{"spacing":{"margin":{"top":"40px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
                            <div class="wp-block-buttons is-style-button-zoom-on-hover" style="margin-top:40px"><!-- wp:button {"gradient":"gradient-twelve","style":{"border":{"radius":"60px"},"spacing":{"padding":{"left":"40px","right":"40px","top":"20px","bottom":"20px"}}},"fontSize":"medium"} -->
                                <div class="wp-block-button has-custom-font-size has-medium-font-size"><a class="wp-block-button__link has-gradient-twelve-gradient-background has-background wp-element-button" style="border-radius:60px;padding-top:20px;padding-right:40px;padding-bottom:20px;padding-left:40px"><?php esc_html_e('Start Free Trial', 'cozy-essential-addons') ?></a></div>
                                <!-- /wp:button -->
                            </div>
                            <!-- /wp:buttons -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                </div>
                <!-- /wp:cover -->
                <!-- /wp:cozy-block/slide -->
            </div>
            <div class="swiper-button-prev cozy-block-button-prev"></div>
            <div class="swiper-button-next cozy-block-button-next"></div>
            <div class="swiper-pagination cozy-pagination"></div>
        </div>
    </div>
    <!-- /wp:cozy-block/slider -->
</div>
<!-- /wp:group -->