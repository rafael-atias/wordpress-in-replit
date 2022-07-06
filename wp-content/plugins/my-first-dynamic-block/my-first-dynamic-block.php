<?php
/**
 * Plugin Name:       helloblocks
 * Requires at least: 5.8
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       my-first-dynamic-block
 *
 * @package           helloblocks
 */

function helloblocks_my_first_dynamic_block_block_init() {

	register_block_type(
		plugin_dir_path( __FILE__ ) . 'build',
		array(
			'render_callback' => 'helloblocks_my_first_dynamic_block_render_callback',
		)
	);
}
add_action( 'init', 'helloblocks_my_first_dynamic_block_block_init' );


function helloblocks_my_first_dynamic_block_render_callback( $atts, $content, $block) {
	ob_start();
	require plugin_dir_path( __FILE__ ) . 'build/template.php';
	return ob_get_clean();
}