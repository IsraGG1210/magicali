<?php
/**
 * Title: Features section one with images and icon
 * Description: This is features section with images and icon
 * Slug: cozy-block-patterns/features-one
 * Categories: cozy-block-patterns, features
 * Premium: true
 */

$images = array(
	CT_ASSETS_URL . 'images/features_1_1.jpg',
);
?>

<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'Features', 'cozy-addons' ); ?>"},"align":"full","style":{"color":{"background":"#fffffe"},"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#fffffe;padding-top:0;padding-bottom:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"60px","bottom":"60px","left":"16px","right":"16px"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:60px;padding-right:16px;padding-bottom:60px;padding-left:16px"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"782px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"#0d5fff"}}},"color":{"text":"#0d5fff"},"typography":{"fontSize":"14px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"500","lineHeight":"1.2"}}} -->
<p class="has-text-align-center has-text-color has-link-color" style="color:#0d5fff;font-size:14px;font-style:normal;font-weight:500;line-height:1.2;text-transform:uppercase"><?php esc_html_e( 'Features', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":"1.3","fontSize":"44px","fontStyle":"normal","fontWeight":"500"},"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}},"spacing":{"margin":{"top":"0","bottom":"0"}}},"cozyCustomFont":"Inter","cozyAnimation":{"type":"flip-up","easingFunction":"ease-in","anchorPlacement":"top-bottom","duration":600}} -->
<h2 class="wp-block-heading has-text-align-center has-text-color has-link-color" style="color:#090b10;margin-top:0;margin-bottom:0;font-size:44px;font-style:normal;font-weight:500;line-height:1.3"><?php esc_html_e( 'Latest Features', 'cozy-addons' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5","fontSize":"14px"},"color":{"text":"#646464"},"elements":{"link":{"color":{"text":"#646464"}}},"spacing":{"margin":{"top":"6px"}}}} -->
<p class="has-text-align-center has-text-color has-link-color" style="color:#646464;margin-top:6px;font-size:14px;line-height:1.5"><?php esc_html_e( 'Far far away, behind the word mountains, far from the countries Vocalic and Consonantal, there live the blind texts. Separated they live in Bookmarks grove right at the coast of the Semantics', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"36px","bottom":"0"},"blockGap":{"top":"26px","left":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns" style="margin-top:36px;margin-bottom:0"><!-- wp:column {"width":"50%","style":{"spacing":{"blockGap":"0"}},"cozyAnimation":{"type":"fade-up-right","easingFunction":"ease","anchorPlacement":"top-bottom","duration":900}} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:image {"id":1990,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-1990"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"elements":{"link":{"color":{"text":"#646464"}}},"color":{"text":"#646464"},"typography":{"fontSize":"14px"},"spacing":{"blockGap":"0","padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"cozyCustomFont":"Public Sans"} -->
<div class="wp-block-column is-vertically-aligned-center has-text-color has-link-color" style="color:#646464;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:14px;flex-basis:50%"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"50%","style":{"spacing":{"blockGap":"0"}},"cozyAnimation":{"type":"fade-down-right","easingFunction":"ease-in","anchorPlacement":"top-center","duration":1000}} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:cozy-block/icon-picker {"blockClientId":"864801f0-18e9-441b-b97a-00361aa0f67b","view":"stacked","iconSize":24,"iconViewBox":{"vx":"0","vy":"0","vw":"24","vh":"24"},"iconPath":"M12.0051 2.79999C8.7251 2.79999 6.0051 5.52 6.0051 8.86C6.0051 10.9 6.8051 12.54 8.4051 13.64V15.6C8.4051 15.82 8.5451 16.04 8.7051 16.18C8.8451 16.32 9.06511 16.4 9.26511 16.4C9.28511 16.4 9.32509 16.4 9.34509 16.4L14.8451 15.96C15.2651 15.92 15.6251 15.58 15.6251 15.16V13.66C17.0251 12.64 18.0251 10.88 18.0251 8.86C18.0051 5.52 15.2851 2.79999 12.0051 2.79999ZM14.4051 12.5C14.1451 12.64 14.0051 12.92 14.0051 13.2V14.42L10.0051 14.74V13.2C10.0051 12.92 9.88509 12.66 9.64509 12.5C8.26509 11.7 7.62509 10.5 7.62509 8.86C7.62509 6.4 9.6051 4.39999 12.0051 4.39999C14.4251 4.39999 16.4051 6.4 16.4051 8.86C16.3851 10.46 15.6651 11.82 14.4051 12.5ZM15.5251 17.66C15.5651 18.1 15.2251 18.48 14.7851 18.52L9.32509 18.92C9.30509 18.92 9.28511 18.92 9.26511 18.92C8.84511 18.92 8.50511 18.6 8.46511 18.18C8.42511 17.74 8.7651 17.36 9.2051 17.32L14.6651 16.92C15.1251 16.88 15.5051 17.22 15.5251 17.66ZM13.7851 20.18C13.8251 20.62 13.4851 21 13.0451 21.04L11.0651 21.2C11.0451 21.2 11.0251 21.2 11.0051 21.2C10.5851 21.2 10.2451 20.88 10.2051 20.46C10.1651 20.02 10.5051 19.64 10.9451 19.6L12.9251 19.44C13.3851 19.42 13.7651 19.74 13.7851 20.18ZM15.1851 8.86C15.1451 9.22 14.8451 9.49999 14.4851 9.49999C14.4651 9.49999 14.4451 9.49999 14.4251 9.49999C14.0451 9.45999 13.7651 9.11998 13.8051 8.73998C13.9251 7.59998 12.9251 7.17998 12.8051 7.13998C12.4451 6.99998 12.2651 6.59998 12.3851 6.23998C12.5051 5.87998 12.9051 5.68001 13.2651 5.82001C14.0051 6.06001 15.3651 7.04 15.1851 8.86Z","iconColor":"#fffffe","boxStyles":{"padding":{"top":12,"right":12,"bottom":12,"left":12},"borderType":"none","borderWidth":1,"borderColor":"#000","borderColorHover":"","borderRadius":50,"bgColor":"#0d5fff","bgColorHover":"#f49805"}} -->
<div class="cozy-block-icon-picker stacked" id="cozyBlock_864801f0_18e9_441b_b97a_00361aa0f67b"><svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#fffffe"><path d="M12.0051 2.79999C8.7251 2.79999 6.0051 5.52 6.0051 8.86C6.0051 10.9 6.8051 12.54 8.4051 13.64V15.6C8.4051 15.82 8.5451 16.04 8.7051 16.18C8.8451 16.32 9.06511 16.4 9.26511 16.4C9.28511 16.4 9.32509 16.4 9.34509 16.4L14.8451 15.96C15.2651 15.92 15.6251 15.58 15.6251 15.16V13.66C17.0251 12.64 18.0251 10.88 18.0251 8.86C18.0051 5.52 15.2851 2.79999 12.0051 2.79999ZM14.4051 12.5C14.1451 12.64 14.0051 12.92 14.0051 13.2V14.42L10.0051 14.74V13.2C10.0051 12.92 9.88509 12.66 9.64509 12.5C8.26509 11.7 7.62509 10.5 7.62509 8.86C7.62509 6.4 9.6051 4.39999 12.0051 4.39999C14.4251 4.39999 16.4051 6.4 16.4051 8.86C16.3851 10.46 15.6651 11.82 14.4051 12.5ZM15.5251 17.66C15.5651 18.1 15.2251 18.48 14.7851 18.52L9.32509 18.92C9.30509 18.92 9.28511 18.92 9.26511 18.92C8.84511 18.92 8.50511 18.6 8.46511 18.18C8.42511 17.74 8.7651 17.36 9.2051 17.32L14.6651 16.92C15.1251 16.88 15.5051 17.22 15.5251 17.66ZM13.7851 20.18C13.8251 20.62 13.4851 21 13.0451 21.04L11.0651 21.2C11.0451 21.2 11.0251 21.2 11.0051 21.2C10.5851 21.2 10.2451 20.88 10.2051 20.46C10.1651 20.02 10.5051 19.64 10.9451 19.6L12.9251 19.44C13.3851 19.42 13.7651 19.74 13.7851 20.18ZM15.1851 8.86C15.1451 9.22 14.8451 9.49999 14.4851 9.49999C14.4651 9.49999 14.4451 9.49999 14.4251 9.49999C14.0451 9.45999 13.7651 9.11998 13.8051 8.73998C13.9251 7.59998 12.9251 7.17998 12.8051 7.13998C12.4451 6.99998 12.2651 6.59998 12.3851 6.23998C12.5051 5.87998 12.9051 5.68001 13.2651 5.82001C14.0051 6.06001 15.3651 7.04 15.1851 8.86Z"></path></svg></div>
<!-- /wp:cozy-block/icon-picker -->

<!-- wp:group {"style":{"spacing":{"blockGap":"6px","padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"16px","bottom":"16px"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:16px;margin-bottom:16px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600","lineHeight":"1.3"},"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}}},"cozyCustomFont":"Inter"} -->
<h3 class="wp-block-heading has-text-color has-link-color" style="color:#090b10;font-size:20px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e( 'Identity Design', 'cozy-addons' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Lorem ipsum dolor sit amet, vet elit at consectetur adipiscing elit. liqua vel cur magna at enisus', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%","style":{"spacing":{"blockGap":"0"}},"cozyAnimation":{"type":"fade-down-left","easingFunction":"ease-in","anchorPlacement":"top-center","duration":1000}} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:cozy-block/icon-picker {"blockClientId":"79f28947-7e3c-426a-8007-ac1999843ee2","view":"stacked","iconSize":16,"iconViewBox":{"vx":"0","vy":"0","vw":"38","vh":"38"},"iconPath":"M4.41667 37.75C3.27083 37.75 2.28993 37.342 1.47396 36.526C0.657986 35.7101 0.25 34.7292 0.25 33.5833V4.41667C0.25 3.27083 0.657986 2.28993 1.47396 1.47396C2.28993 0.657986 3.27083 0.25 4.41667 0.25H23.1667V4.41667H4.41667V33.5833H33.5833V14.8333H37.75V33.5833C37.75 34.7292 37.342 35.7101 36.526 36.526C35.7101 37.342 34.7292 37.75 33.5833 37.75H4.41667ZM29.4167 12.75V8.58333H25.25V4.41667H29.4167V0.25H33.5833V4.41667H37.75V8.58333H33.5833V12.75H29.4167ZM6.5 29.4167H31.5L23.6875 19L17.4375 27.3333L12.75 21.0833L6.5 29.4167Z","iconColor":"#fffffe","boxStyles":{"padding":{"top":16,"right":16,"bottom":16,"left":16},"borderType":"none","borderWidth":1,"borderColor":"#000","borderColorHover":"","borderRadius":50,"bgColor":"#0d5fff","bgColorHover":"#f49805"}} -->
<div class="cozy-block-icon-picker stacked" id="cozyBlock_79f28947_7e3c_426a_8007_ac1999843ee2"><svg width="16" height="16" viewBox="0 0 38 38" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#fffffe"><path d="M4.41667 37.75C3.27083 37.75 2.28993 37.342 1.47396 36.526C0.657986 35.7101 0.25 34.7292 0.25 33.5833V4.41667C0.25 3.27083 0.657986 2.28993 1.47396 1.47396C2.28993 0.657986 3.27083 0.25 4.41667 0.25H23.1667V4.41667H4.41667V33.5833H33.5833V14.8333H37.75V33.5833C37.75 34.7292 37.342 35.7101 36.526 36.526C35.7101 37.342 34.7292 37.75 33.5833 37.75H4.41667ZM29.4167 12.75V8.58333H25.25V4.41667H29.4167V0.25H33.5833V4.41667H37.75V8.58333H33.5833V12.75H29.4167ZM6.5 29.4167H31.5L23.6875 19L17.4375 27.3333L12.75 21.0833L6.5 29.4167Z"></path></svg></div>
<!-- /wp:cozy-block/icon-picker -->

<!-- wp:group {"style":{"spacing":{"blockGap":"6px","padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"16px","bottom":"16px"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:16px;margin-bottom:16px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600","lineHeight":"1.3"},"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}}},"cozyCustomFont":"Inter"} -->
<h3 class="wp-block-heading has-text-color has-link-color" style="color:#090b10;font-size:20px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e( 'Creative Images', 'cozy-addons' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Lorem ipsum dolor sit amet, vet elit at consectetur adipiscing elit. liqua vel cur magna at enisus', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"26px"}}}} -->
<div class="wp-block-columns" style="margin-top:26px"><!-- wp:column {"width":"50%","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"},"cozyAnimation":{"type":"fade-up-right","easingFunction":"ease-in","anchorPlacement":"top-center","duration":1000}} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:cozy-block/icon-picker {"blockClientId":"5c89bac9-2181-4c10-82c6-afc9a3cca864","view":"stacked","iconSize":16,"iconViewBox":{"vx":"0","vy":"0","vw":"23","vh":"24"},"iconPath":"M2.75 23.25C2.0625 23.25 1.47396 23.0052 0.984375 22.5156C0.494792 22.026 0.25 21.4375 0.25 20.75V0.75H2.75V20.75H22.75V23.25H2.75ZM4 19.5V8.25H9V19.5H4ZM10.25 19.5V2H15.25V19.5H10.25ZM16.5 19.5V13.25H21.5V19.5H16.5Z","iconColor":"#fffffe","boxStyles":{"padding":{"top":16,"right":16,"bottom":16,"left":16},"borderType":"none","borderWidth":1,"borderColor":"#000","borderColorHover":"","borderRadius":50,"bgColor":"#0d5fff","bgColorHover":"#f49805"}} -->
<div class="cozy-block-icon-picker stacked" id="cozyBlock_5c89bac9_2181_4c10_82c6_afc9a3cca864"><svg width="16" height="16" viewBox="0 0 23 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#fffffe"><path d="M2.75 23.25C2.0625 23.25 1.47396 23.0052 0.984375 22.5156C0.494792 22.026 0.25 21.4375 0.25 20.75V0.75H2.75V20.75H22.75V23.25H2.75ZM4 19.5V8.25H9V19.5H4ZM10.25 19.5V2H15.25V19.5H10.25ZM16.5 19.5V13.25H21.5V19.5H16.5Z"></path></svg></div>
<!-- /wp:cozy-block/icon-picker -->

<!-- wp:group {"style":{"spacing":{"blockGap":"6px","padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"16px","bottom":"16px"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:16px;margin-bottom:16px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600","lineHeight":"1.3"},"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}}},"cozyCustomFont":"Inter"} -->
<h3 class="wp-block-heading has-text-color has-link-color" style="color:#090b10;font-size:20px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e( 'Data Analysis', 'cozy-addons' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Lorem ipsum dolor sit amet, vet elit at consectetur adipiscing elit. liqua vel cur magna at enisus', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%","style":{"spacing":{"blockGap":"0"}},"cozyAnimation":{"type":"fade-up-left","easingFunction":"ease-in","anchorPlacement":"top-center","duration":1000}} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:cozy-block/icon-picker {"blockClientId":"85fdd3e5-a487-4422-873a-50eb1510788e","view":"stacked","iconSize":16,"iconViewBox":{"vx":"0","vy":"0","vw":"19","vh":"20"},"iconPath":"M3.25 20V17.5H0.75V2.5H3.25V0H5.75V2.5H8.25V17.5H5.75V20H3.25ZM3.25 15H5.75V5H3.25V15ZM13.25 20V13.75H10.75V5H13.25V0H15.75V5H18.25V13.75H15.75V20H13.25ZM13.25 11.25H15.75V7.5H13.25V11.25Z","iconColor":"#fffffe","boxStyles":{"padding":{"top":16,"right":16,"bottom":16,"left":16},"borderType":"none","borderWidth":1,"borderColor":"#000","borderColorHover":"","borderRadius":50,"bgColor":"#0d5fff","bgColorHover":"#f49805"}} -->
<div class="cozy-block-icon-picker stacked" id="cozyBlock_85fdd3e5_a487_4422_873a_50eb1510788e"><svg width="16" height="16" viewBox="0 0 19 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#fffffe"><path d="M3.25 20V17.5H0.75V2.5H3.25V0H5.75V2.5H8.25V17.5H5.75V20H3.25ZM3.25 15H5.75V5H3.25V15ZM13.25 20V13.75H10.75V5H13.25V0H15.75V5H18.25V13.75H15.75V20H13.25ZM13.25 11.25H15.75V7.5H13.25V11.25Z"></path></svg></div>
<!-- /wp:cozy-block/icon-picker -->

<!-- wp:group {"style":{"spacing":{"blockGap":"6px","padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"16px","bottom":"16px"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:16px;margin-bottom:16px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600","lineHeight":"1.3"},"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}}},"cozyCustomFont":"Inter"} -->
<h3 class="wp-block-heading has-text-color has-link-color" style="color:#090b10;font-size:20px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e( 'Easy Modules', 'cozy-addons' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Lorem ipsum dolor sit amet, vet elit at consectetur adipiscing elit. liqua vel cur magna at enisus', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->