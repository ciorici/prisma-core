<?php
/**
 * Prisma Core Theme JSON Class.
 *
 * Dynamically filters theme.json data to sync with Customizer settings.
 *
 * @package  Prisma Core
 * @author   Prisma Core Team
 * @since    1.3.2
 */

/**
 * Do not allow direct script access.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Prisma_Core_Theme_JSON' ) ) :

	/**
	 * Prisma Core Theme JSON Class.
	 */
	class Prisma_Core_Theme_JSON {

		/**
		 * Singleton instance of the class.
		 *
		 * @since 1.3.2
		 * @var object
		 */
		private static $instance;

		/**
		 * Main Prisma_Core_Theme_JSON Instance.
		 *
		 * @since 1.3.2
		 * @return Prisma_Core_Theme_JSON
		 */
		public static function instance() {

			if ( ! isset( self::$instance ) && ! ( self::$instance instanceof Prisma_Core_Theme_JSON ) ) {
				self::$instance = new self();
			}
			return self::$instance;
		}

		/**
		 * Primary class constructor.
		 *
		 * @since 1.3.2
		 */
		public function __construct() {

			// Only register filters on WP 6.1+ where wp_theme_json_data_theme exists.
			if ( version_compare( get_bloginfo( 'version' ), '6.1', '>=' ) ) {
				add_filter( 'wp_theme_json_data_theme', array( $this, 'filter_theme_json' ) );
			}
		}

		/**
		 * Filter theme.json data to sync Customizer values.
		 *
		 * @since 1.3.2
		 * @param WP_Theme_JSON_Data $theme_json_data The theme.json data object.
		 * @return WP_Theme_JSON_Data
		 */
		public function filter_theme_json( $theme_json_data ) {

			$theme_json = $theme_json_data->get_data();

			// Sync container width.
			$container_width = intval( prisma_core_option( 'container_width' ) );

			if ( $container_width ) {
				$content_size = $container_width - 100;
				$theme_json['settings']['layout']['contentSize'] = $content_size . 'px';
				$theme_json['settings']['layout']['wideSize']    = $container_width . 'px';
			}

			// Sync color palette from Customizer.
			$accent_color   = prisma_core_option( 'accent_color' );
			$text_color     = prisma_core_option( 'content_text_color' );
			$headings_color = prisma_core_option( 'headings_color' );
			$bg_color       = prisma_core_option( 'boxed_content_background_color' );

			if ( isset( $theme_json['settings']['color']['palette'] ) ) {
				foreach ( $theme_json['settings']['color']['palette'] as &$entry ) {
					if ( ! isset( $entry['slug'] ) ) {
						continue;
					}
					switch ( $entry['slug'] ) {
						case 'primary':
							if ( $accent_color ) {
								$entry['color'] = $accent_color;
							}
							break;
						case 'secondary':
							if ( $headings_color ) {
								$entry['color'] = $headings_color;
							}
							break;
						case 'foreground':
							if ( $text_color ) {
								$entry['color'] = $text_color;
							}
							break;
						case 'background':
							if ( $bg_color ) {
								$entry['color'] = $bg_color;
							}
							break;
					}
				}
				unset( $entry );
			}

			$theme_json_data->update_with( $theme_json );
			return $theme_json_data;
		}
	}

endif;

/**
 * The function which returns the one Prisma_Core_Theme_JSON instance.
 *
 * @since 1.3.2
 * @return object
 */
function prisma_core_theme_json() {
	return Prisma_Core_Theme_JSON::instance();
}

prisma_core_theme_json();
