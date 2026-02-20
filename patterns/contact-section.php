<?php
/**
 * Title: Contact Section
 * Slug: prisma-core/contact-section
 * Categories: prisma-core
 * Keywords: contact, information, address, email
 * Viewport Width: 1200
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:heading {"textAlign":"center","fontSize":"max-36"} -->
<h2 class="wp-block-heading has-text-align-center has-max-36-font-size"><?php esc_html_e( 'Get in Touch', 'prisma-core' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"foreground","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|medium"}}}} -->
<p class="has-text-align-center has-foreground-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--medium)"><?php esc_html_e( 'Have a question or want to work together? We would love to hear from you.', 'prisma-core' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|large"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Contact Information', 'prisma-core' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"foreground"} -->
<p class="has-foreground-color has-text-color"><?php esc_html_e( 'Feel free to reach out to us through any of the following channels.', 'prisma-core' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"var:preset|spacing|small"}}}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--small)"><!-- wp:paragraph {"textColor":"foreground"} -->
<p class="has-foreground-color has-text-color"><strong><?php esc_html_e( 'Address', 'prisma-core' ); ?></strong><br><?php esc_html_e( '123 Main Street, Suite 100', 'prisma-core' ); ?><br><?php esc_html_e( 'New York, NY 10001', 'prisma-core' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"foreground"} -->
<p class="has-foreground-color has-text-color"><strong><?php esc_html_e( 'Email', 'prisma-core' ); ?></strong><br><?php esc_html_e( 'hello@example.com', 'prisma-core' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"foreground"} -->
<p class="has-foreground-color has-text-color"><strong><?php esc_html_e( 'Phone', 'prisma-core' ); ?></strong><br><?php esc_html_e( '+1 (555) 123-4567', 'prisma-core' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Send a Message', 'prisma-core' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"foreground"} -->
<p class="has-foreground-color has-text-color"><?php esc_html_e( 'Use the form below or email us directly. We typically respond within 24 hours.', 'prisma-core' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--small)"><!-- wp:button {"backgroundColor":"primary","textColor":"white"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background wp-element-button" href="mailto:hello@example.com"><?php esc_html_e( 'Send Email', 'prisma-core' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
