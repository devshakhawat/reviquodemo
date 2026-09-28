<?php
/**
 * Theme setup for ReviQuo Demo.
 *
 * @package ReviQuoDemo
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Add front-end and editor styles.
 */
function reviewdemo_setup() {
	add_editor_style( 'assets/css/theme.css' );
}
add_action( 'after_setup_theme', 'reviewdemo_setup' );

/**
 * Enqueue the presentation layer separately from the theme metadata stylesheet.
 */
function reviewdemo_enqueue_assets() {
	$version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style(
		'reviewdemo-theme',
		get_theme_file_uri( 'assets/css/theme.css' ),
		array(),
		$version
	);

	wp_enqueue_script(
		'reviewdemo-theme',
		get_theme_file_uri( 'assets/js/theme.js' ),
		array(),
		$version,
		true
	);

	if ( reviewdemo_needs_documentation_styles() ) {
		wp_enqueue_style(
			'reviewdemo-documentation',
			get_theme_file_uri( 'assets/css/documentation.css' ),
			array( 'reviewdemo-theme' ),
			$version
		);
	}
}
add_action( 'wp_enqueue_scripts', 'reviewdemo_enqueue_assets' );

/**
 * Detect whether the current entry uses the documentation pattern.
 *
 * The pattern is no longer bound to a fixed page slug, so match the wrapper
 * class it renders instead of assuming where an editor placed it.
 *
 * @return bool
 */
function reviewdemo_needs_documentation_styles() {
	if ( ! is_singular() ) {
		return false;
	}

	$post = get_post();

	return $post instanceof WP_Post && false !== strpos( $post->post_content, 'wcr-doc-page' );
}

/**
 * Mark custom Navigation block links as current when their path matches the request.
 *
 * Core only adds the current-menu-item state when a Navigation Link has a post ID.
 * The theme header uses portable custom links, so add the equivalent state here.
 *
 * @param string $block_content Rendered Navigation Link markup.
 * @param array  $block         Parsed block data.
 * @return string
 */
function reviewdemo_mark_current_navigation_link( $block_content, $block ) {
	$link_url = $block['attrs']['url'] ?? '';

	if ( is_admin() || ! $link_url || ! isset( $_SERVER['REQUEST_URI'] ) ) {
		return $block_content;
	}

	$link_host = wp_parse_url( $link_url, PHP_URL_HOST );
	$home_host = wp_parse_url( home_url( '/' ), PHP_URL_HOST );

	if ( $link_host && strtolower( $link_host ) !== strtolower( (string) $home_host ) ) {
		return $block_content;
	}

	$link_path    = '/' . trim( (string) wp_parse_url( $link_url, PHP_URL_PATH ), '/' );
	$current_path = '/' . trim( (string) wp_parse_url( wp_unslash( $_SERVER['REQUEST_URI'] ), PHP_URL_PATH ), '/' );

	if ( $link_path !== $current_path || ! class_exists( 'WP_HTML_Tag_Processor' ) ) {
		return $block_content;
	}

	$processor = new WP_HTML_Tag_Processor( $block_content );

	if ( $processor->next_tag( 'li' ) ) {
		$processor->add_class( 'current-menu-item' );
	}

	if ( $processor->next_tag( 'a' ) ) {
		$processor->set_attribute( 'aria-current', 'page' );
	}

	return $processor->get_updated_html();
}
add_filter( 'render_block_core/navigation-link', 'reviewdemo_mark_current_navigation_link', 10, 2 );
