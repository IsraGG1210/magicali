<?php
/**
 * Title: Features section two with images and icon
 * Description: This is features section with images and icon
 * Slug: cozy-block-patterns/features-two
 * Categories: cozy-block-patterns, features
 */

$images = array(
	CT_ASSETS_URL . 'images/features_2_1.jpg',
);
?>

<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'Features', 'cozy-addons' ); ?>"},"align":"full","style":{"color":{"background":"#fffffe"},"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#fffffe;margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"60px","bottom":"60px","left":"16px","right":"16px"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:60px;padding-right:16px;padding-bottom:60px;padding-left:16px"><!-- wp:columns {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"26px","left":"44px"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column {"width":"","style":{"spacing":{"blockGap":"0"}},"cozyAnimation":{"type":"zoom-in","easingFunction":"ease","anchorPlacement":"top-bottom","duration":900}} -->
<div class="wp-block-column"><!-- wp:image {"id":2028,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-2028"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"","style":{"elements":{"link":{"color":{"text":"#646464"}}},"color":{"text":"#646464"},"typography":{"fontSize":"14px"},"spacing":{"blockGap":"var:preset|spacing|80","padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"cozyCustomFont":"Public Sans"} -->
<div class="wp-block-column is-vertically-aligned-top has-text-color has-link-color" style="color:#646464;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:14px"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"#0d5fff"}}},"color":{"text":"#0d5fff"},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"500","lineHeight":"1.2","textTransform":"uppercase"}}} -->
<p class="has-text-align-left has-text-color has-link-color" style="color:#0d5fff;font-size:14px;font-style:normal;font-weight:500;line-height:1.2;text-transform:uppercase"><?php esc_html_e( 'Features', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"lineHeight":"1.2","fontSize":"44px","fontStyle":"normal","fontWeight":"500"},"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}},"spacing":{"margin":{"top":"0","bottom":"4px"}}},"cozyCustomFont":"Inter","cozyAnimation":{"type":"flip-up","easingFunction":"ease-in","anchorPlacement":"top-bottom","duration":600}} -->
<h2 class="wp-block-heading has-text-align-left has-text-color has-link-color" style="color:#090b10;margin-top:0;margin-bottom:4px;font-size:44px;font-style:normal;font-weight:500;line-height:1.2"><?php esc_html_e( 'Driving Digital Evolution, One Brand at a Time.', 'cozy-addons' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"1.5"}}} -->
<p class="has-text-align-left" style="line-height:1.5"><?php esc_html_e( 'Far far away, behind the word mountains, far from the countries Vocalic and Consonantal, there live the blind texts. Separated they live in Bookmarks grove right at the coast of the Semantics, a large language ocean.', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"36px","bottom":"0px"}}},"cozyAnimation":{"type":"zoom-in-up","easingFunction":"ease","anchorPlacement":"top-center","duration":1000}} -->
<div class="wp-block-columns" style="margin-top:36px;margin-bottom:0px"><!-- wp:column {"width":"","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column"><!-- wp:cozy-block/icon-picker {"blockClientId":"a65186c0-5104-418b-a330-e9e9206396ff","view":"stacked","iconSize":30,"iconViewBox":{"vx":"0","vy":"0","vw":"24","vh":"24"},"iconPath":"M12.0051 2.79999C8.7251 2.79999 6.0051 5.52 6.0051 8.86C6.0051 10.9 6.8051 12.54 8.4051 13.64V15.6C8.4051 15.82 8.5451 16.04 8.7051 16.18C8.8451 16.32 9.06511 16.4 9.26511 16.4C9.28511 16.4 9.32509 16.4 9.34509 16.4L14.8451 15.96C15.2651 15.92 15.6251 15.58 15.6251 15.16V13.66C17.0251 12.64 18.0251 10.88 18.0251 8.86C18.0051 5.52 15.2851 2.79999 12.0051 2.79999ZM14.4051 12.5C14.1451 12.64 14.0051 12.92 14.0051 13.2V14.42L10.0051 14.74V13.2C10.0051 12.92 9.88509 12.66 9.64509 12.5C8.26509 11.7 7.62509 10.5 7.62509 8.86C7.62509 6.4 9.6051 4.39999 12.0051 4.39999C14.4251 4.39999 16.4051 6.4 16.4051 8.86C16.3851 10.46 15.6651 11.82 14.4051 12.5ZM15.5251 17.66C15.5651 18.1 15.2251 18.48 14.7851 18.52L9.32509 18.92C9.30509 18.92 9.28511 18.92 9.26511 18.92C8.84511 18.92 8.50511 18.6 8.46511 18.18C8.42511 17.74 8.7651 17.36 9.2051 17.32L14.6651 16.92C15.1251 16.88 15.5051 17.22 15.5251 17.66ZM13.7851 20.18C13.8251 20.62 13.4851 21 13.0451 21.04L11.0651 21.2C11.0451 21.2 11.0251 21.2 11.0051 21.2C10.5851 21.2 10.2451 20.88 10.2051 20.46C10.1651 20.02 10.5051 19.64 10.9451 19.6L12.9251 19.44C13.3851 19.42 13.7651 19.74 13.7851 20.18ZM15.1851 8.86C15.1451 9.22 14.8451 9.49999 14.4851 9.49999C14.4651 9.49999 14.4451 9.49999 14.4251 9.49999C14.0451 9.45999 13.7651 9.11998 13.8051 8.73998C13.9251 7.59998 12.9251 7.17998 12.8051 7.13998C12.4451 6.99998 12.2651 6.59998 12.3851 6.23998C12.5051 5.87998 12.9051 5.68001 13.2651 5.82001C14.0051 6.06001 15.3651 7.04 15.1851 8.86Z","iconColor":"#fffffe","boxStyles":{"padding":{"top":14,"right":14,"bottom":14,"left":14},"borderType":"none","borderWidth":1,"borderColor":"#000","borderColorHover":"","borderRadius":50,"bgColor":"#0d5fff","bgColorHover":"#f49805"}} -->
<div class="cozy-block-icon-picker stacked" id="cozyBlock_a65186c0_5104_418b_a330_e9e9206396ff"><svg width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#fffffe"><path d="M12.0051 2.79999C8.7251 2.79999 6.0051 5.52 6.0051 8.86C6.0051 10.9 6.8051 12.54 8.4051 13.64V15.6C8.4051 15.82 8.5451 16.04 8.7051 16.18C8.8451 16.32 9.06511 16.4 9.26511 16.4C9.28511 16.4 9.32509 16.4 9.34509 16.4L14.8451 15.96C15.2651 15.92 15.6251 15.58 15.6251 15.16V13.66C17.0251 12.64 18.0251 10.88 18.0251 8.86C18.0051 5.52 15.2851 2.79999 12.0051 2.79999ZM14.4051 12.5C14.1451 12.64 14.0051 12.92 14.0051 13.2V14.42L10.0051 14.74V13.2C10.0051 12.92 9.88509 12.66 9.64509 12.5C8.26509 11.7 7.62509 10.5 7.62509 8.86C7.62509 6.4 9.6051 4.39999 12.0051 4.39999C14.4251 4.39999 16.4051 6.4 16.4051 8.86C16.3851 10.46 15.6651 11.82 14.4051 12.5ZM15.5251 17.66C15.5651 18.1 15.2251 18.48 14.7851 18.52L9.32509 18.92C9.30509 18.92 9.28511 18.92 9.26511 18.92C8.84511 18.92 8.50511 18.6 8.46511 18.18C8.42511 17.74 8.7651 17.36 9.2051 17.32L14.6651 16.92C15.1251 16.88 15.5051 17.22 15.5251 17.66ZM13.7851 20.18C13.8251 20.62 13.4851 21 13.0451 21.04L11.0651 21.2C11.0451 21.2 11.0251 21.2 11.0051 21.2C10.5851 21.2 10.2451 20.88 10.2051 20.46C10.1651 20.02 10.5051 19.64 10.9451 19.6L12.9251 19.44C13.3851 19.42 13.7651 19.74 13.7851 20.18ZM15.1851 8.86C15.1451 9.22 14.8451 9.49999 14.4851 9.49999C14.4651 9.49999 14.4451 9.49999 14.4251 9.49999C14.0451 9.45999 13.7651 9.11998 13.8051 8.73998C13.9251 7.59998 12.9251 7.17998 12.8051 7.13998C12.4451 6.99998 12.2651 6.59998 12.3851 6.23998C12.5051 5.87998 12.9051 5.68001 13.2651 5.82001C14.0051 6.06001 15.3651 7.04 15.1851 8.86Z"></path></svg></div>
<!-- /wp:cozy-block/icon-picker -->

<!-- wp:group {"style":{"spacing":{"blockGap":"6px","padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"16px","bottom":"0"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:16px;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600","lineHeight":"1.3"},"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}}},"cozyCustomFont":"Inter"} -->
<h3 class="wp-block-heading has-text-color has-link-color" style="color:#090b10;font-size:20px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e( 'Identity Design', 'cozy-addons' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Lorem ipsum dolor sit amet, vet elit at consectetur adipiscing elit. liqua vel cur magna at enisus', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column"><!-- wp:cozy-block/icon-picker {"blockClientId":"f5bd7e37-2627-4231-a215-9192c4403db5","view":"stacked","iconSize":20,"iconViewBox":{"vx":"0","vy":"0","vw":"29","vh":"26"},"iconPath":"M3.24512 25.2506C2.55762 25.2506 1.96908 25.0058 1.47949 24.5162C0.989909 24.0267 0.745117 23.4381 0.745117 22.7506V7.75061C0.745117 7.06311 0.989909 6.47457 1.47949 5.98499C1.96908 5.4954 2.55762 5.25061 3.24512 5.25061H7.18262L9.49512 2.75061H16.9951V5.25061H10.5889L8.30762 7.75061H3.24512V22.7506H23.2451V11.5006H25.7451V22.7506C25.7451 23.4381 25.5003 24.0267 25.0107 24.5162C24.5212 25.0058 23.9326 25.2506 23.2451 25.2506H3.24512ZM23.2451 7.75061V5.25061H20.7451V2.75061H23.2451V0.25061H25.7451V2.75061H28.2451V5.25061H25.7451V7.75061H23.2451ZM13.2451 20.8756C14.8076 20.8756 16.1357 20.3287 17.2295 19.235C18.3232 18.1412 18.8701 16.8131 18.8701 15.2506C18.8701 13.6881 18.3232 12.36 17.2295 11.2662C16.1357 10.1725 14.8076 9.62561 13.2451 9.62561C11.6826 9.62561 10.3545 10.1725 9.26074 11.2662C8.16699 12.36 7.62012 13.6881 7.62012 15.2506C7.62012 16.8131 8.16699 18.1412 9.26074 19.235C10.3545 20.3287 11.6826 20.8756 13.2451 20.8756ZM13.2451 18.3756C12.3701 18.3756 11.6305 18.0735 11.0264 17.4694C10.4222 16.8652 10.1201 16.1256 10.1201 15.2506C10.1201 14.3756 10.4222 13.636 11.0264 13.0319C11.6305 12.4277 12.3701 12.1256 13.2451 12.1256C14.1201 12.1256 14.8597 12.4277 15.4639 13.0319C16.068 13.636 16.3701 14.3756 16.3701 15.2506C16.3701 16.1256 16.068 16.8652 15.4639 17.4694C14.8597 18.0735 14.1201 18.3756 13.2451 18.3756Z","iconColor":"#fffffe","boxStyles":{"padding":{"top":19,"right":19,"bottom":19,"left":19},"borderType":"none","borderWidth":1,"borderColor":"#000","borderColorHover":"","borderRadius":50,"bgColor":"#0d5fff","bgColorHover":"#f49805"}} -->
<div class="cozy-block-icon-picker stacked" id="cozyBlock_f5bd7e37_2627_4231_a215_9192c4403db5"><svg width="20" height="20" viewBox="0 0 29 26" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#fffffe"><path d="M3.24512 25.2506C2.55762 25.2506 1.96908 25.0058 1.47949 24.5162C0.989909 24.0267 0.745117 23.4381 0.745117 22.7506V7.75061C0.745117 7.06311 0.989909 6.47457 1.47949 5.98499C1.96908 5.4954 2.55762 5.25061 3.24512 5.25061H7.18262L9.49512 2.75061H16.9951V5.25061H10.5889L8.30762 7.75061H3.24512V22.7506H23.2451V11.5006H25.7451V22.7506C25.7451 23.4381 25.5003 24.0267 25.0107 24.5162C24.5212 25.0058 23.9326 25.2506 23.2451 25.2506H3.24512ZM23.2451 7.75061V5.25061H20.7451V2.75061H23.2451V0.25061H25.7451V2.75061H28.2451V5.25061H25.7451V7.75061H23.2451ZM13.2451 20.8756C14.8076 20.8756 16.1357 20.3287 17.2295 19.235C18.3232 18.1412 18.8701 16.8131 18.8701 15.2506C18.8701 13.6881 18.3232 12.36 17.2295 11.2662C16.1357 10.1725 14.8076 9.62561 13.2451 9.62561C11.6826 9.62561 10.3545 10.1725 9.26074 11.2662C8.16699 12.36 7.62012 13.6881 7.62012 15.2506C7.62012 16.8131 8.16699 18.1412 9.26074 19.235C10.3545 20.3287 11.6826 20.8756 13.2451 20.8756ZM13.2451 18.3756C12.3701 18.3756 11.6305 18.0735 11.0264 17.4694C10.4222 16.8652 10.1201 16.1256 10.1201 15.2506C10.1201 14.3756 10.4222 13.636 11.0264 13.0319C11.6305 12.4277 12.3701 12.1256 13.2451 12.1256C14.1201 12.1256 14.8597 12.4277 15.4639 13.0319C16.068 13.636 16.3701 14.3756 16.3701 15.2506C16.3701 16.1256 16.068 16.8652 15.4639 17.4694C14.8597 18.0735 14.1201 18.3756 13.2451 18.3756Z"></path></svg></div>
<!-- /wp:cozy-block/icon-picker -->

<!-- wp:group {"style":{"spacing":{"blockGap":"6px","padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"16px","bottom":"0"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:16px;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600","lineHeight":"1.3"},"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}}},"cozyCustomFont":"Inter"} -->
<h3 class="wp-block-heading has-text-color has-link-color" style="color:#090b10;font-size:20px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e( 'Creative Images', 'cozy-addons' ); ?></h3>
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