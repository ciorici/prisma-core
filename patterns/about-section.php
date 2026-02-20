<?php
/**
 * Title: About Section
 * Slug: prisma-core/about-section
 * Categories: prisma-core
 * Keywords: about, introduction, two columns
 * Viewport Width: 1200
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|large"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"fontSize":"max-36"} -->
<h2 class="wp-block-heading has-max-36-font-size"><?php esc_html_e( 'About Us', 'prisma-core' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"foreground","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}}} -->
<p class="has-foreground-color has-text-color" style="margin-top:var(--wp--preset--spacing--x-small)"><?php esc_html_e( 'We are a team of passionate designers and developers dedicated to creating beautiful, functional websites. Our goal is to help you make a lasting impression online.', 'prisma-core' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"foreground"} -->
<p class="has-foreground-color has-text-color"><?php esc_html_e( 'With years of experience in web design, we understand what it takes to build a website that not only looks great but also performs flawlessly.', 'prisma-core' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--small)"><!-- wp:button {"backgroundColor":"primary","textColor":"white"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background wp-element-button"><?php esc_html_e( 'Learn More', 'prisma-core' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"4px"},"color":{"duotone":"unset"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/patterns/placeholder-about.jpg" alt="<?php esc_attr_e( 'About us', 'prisma-core' ); ?>" style="border-radius:4px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
