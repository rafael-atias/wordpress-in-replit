<?php
/**
 * Plugin Name:       My First ES5 Block
 * Description:       Example static block scaffolded with Create Block tool – no build step required.
 * Requires at least: 5.7
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       my-first-es5-block
 *
 * @package           helloblocks
 */

/**
 * Registers all block assets so that they can be enqueued through the block editor
 * in the corresponding context.
 *
 * @see https://developer.wordpress.org/block-editor/how-to-guides/block-tutorial/applying-styles-with-stylesheets/
 */
function helloblocks_my_first_es_5_block_block_init() {
	$dir = __DIR__;

	$index_js = 'index.js';
	wp_register_script(
		'helloblocks-my-first-es5-block-block-editor',
		plugins_url( $index_js, __FILE__ ),
		array(
			'wp-block-editor',
			'wp-blocks',
			'wp-i18n',
			'wp-element',
		),
		filemtime( "$dir/$index_js" )
	);
	wp_set_script_translations( 'helloblocks-my-first-es5-block-block-editor', 'my-first-es5-block' );

	$editor_css = 'editor.css';
	wp_register_style(
		'helloblocks-my-first-es5-block-block-editor',
		plugins_url( $editor_css, __FILE__ ),
		array(),
		filemtime( "$dir/$editor_css" )
	);

	$style_css = 'style.css';
	wp_register_style(
		'helloblocks-my-first-es5-block-block',
		plugins_url( $style_css, __FILE__ ),
		array(),
		filemtime( "$dir/$style_css" )
	);

	register_block_type(
		'helloblocks/my-first-es5-block',
		array(
			'editor_script' => 'helloblocks-my-first-es5-block-block-editor',
			'editor_style'  => 'helloblocks-my-first-es5-block-block-editor',
			'style'         => 'helloblocks-my-first-es5-block-block',
		)
	);
}
add_action( 'init', 'helloblocks_my_first_es_5_block_block_init' );
