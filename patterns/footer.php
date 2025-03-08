<?php
/**
 * Title: footer
 * Slug: fr-mirror/footer
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"25px"}},"color":{"background":"#9e1f2a00"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="background-color:#9e1f2a00;margin-top:25px"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-right:0;padding-left:0"><!-- wp:group {"metadata":{"categories":["footer"],"patternName":"core/fullwidth-footer-with-background-color-and-three-columns","name":"Fullwidth footer with background color and three columns"},"align":"full","className":"has-background-color is-style-rivedge-box-shadow","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"0","bottom":"var:preset|spacing|60","left":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"dimensions":{"minHeight":"40vh"}},"backgroundColor":"black","textColor":"white","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center","flexWrap":"wrap"}} -->
<div class="wp-block-group alignfull has-background-color is-style-rivedge-box-shadow has-white-color has-black-background-color has-text-color has-background has-link-color" style="min-height:40vh;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:0;padding-bottom:var(--wp--preset--spacing--60);padding-left:0"><!-- wp:columns {"align":"wide","style":{"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"small"} -->
<div class="wp-block-columns alignwide has-small-font-size"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e('Location', 'fr-mirror');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php /* Translators: 1. is a 'br' HTML element, 2. is a 'br' HTML element */ 
echo sprintf( esc_html__( '2020 Lomita Blvd, %1$sTorrance, CA 90101%2$sUnited States', 'fr-mirror' ), '<br>', '<br>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"24px"} -->
<div style="height:24px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e('Pages', 'fr-mirror');?></p>
<!-- /wp:paragraph -->

<!-- wp:navigation {"overlayMenu":"never","style":{"spacing":{"blockGap":"8px"}},"fontSize":"small","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","flexWrap":"nowrap"}} /-->

<!-- wp:spacer {"height":"24px"} -->
<div style="height:24px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e('Follow us', 'fr-mirror');?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sFacebook%2$s', 'fr-mirror' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sInstagram%2$s', 'fr-mirror' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sTwitter%2$s', 'fr-mirror' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"24px"} -->
<div style="height:24px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( ' Proudly powered by %1$sWordPress%2$s ', 'fr-mirror' ), '<a rel="nofollow" href="' . esc_url( 'https://wordpress.org' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->