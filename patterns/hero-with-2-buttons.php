<?php
/**
 * Title: Hero with Two Buttons
 * Slug: prisma-core/hero-with-2-buttons
 * Categories: prisma-core
 * Keywords: hero, banner, header, landing, buttons
 * Viewport Width: 1200
 */
?>
<!-- wp:cover {"overlayColor":"secondary","minHeight":600,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--medium);min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"750px"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"textColor":"white","fontSize":"x-large"} -->
<h1 class="wp-block-heading has-text-align-center has-white-color has-text-color has-x-large-font-size"><?php esc_html_e( 'Your Story Starts Here', 'prisma-core' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"white","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}},"typography":{"fontSize":"18px"}}} -->
<p class="has-text-align-center has-white-color has-text-color" style="margin-top:var(--wp--preset--spacing--small);font-size:18px"><?php esc_html_e( 'A powerful, flexible theme that adapts to your vision. Whether you are building a blog, portfolio, or business site.', 'prisma-core' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"},"blockGap":"15px"}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--small)"><!-- wp:button {"backgroundColor":"primary","textColor":"white"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background wp-element-button"><?php esc_html_e( 'Get Started', 'prisma-core' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"white","textColor":"secondary"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-secondary-color has-white-background-color has-text-color has-background wp-element-button"><?php esc_html_e( 'Learn More', 'prisma-core' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
