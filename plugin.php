<?php
/**
 * Plugin Name:       Example Blocks
 * Description:       Troubleshooting block.json expectations.
 * Version:           1.0.0
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

namespace JF\ExampleBlocks;

add_action( 'init', __NAMESPACE__ . '\init' );
add_action( 'enqueue_block_assets', __NAMESPACE__ . '\register_block_assets' );

/**
 * Register the block using the metadata loaded from the `block.json` file.
 */
function init() {
	register_block_type_from_metadata(
		__DIR__ . '/example-one/'
	);

	register_block_type_from_metadata(
		__DIR__ . '/example-two/'
	);

	register_block_type_from_metadata(
		__DIR__ . '/example-three/'
	);

	register_block_type_from_metadata(
		__DIR__ . '/example-four/'
	);

	register_block_type_from_metadata(
		__DIR__ . '/example-five/',
		array(
			'render_callback' => __NAMESPACE__ . '\render_example_five',
		)
	);

	register_block_type_from_metadata(
		__DIR__ . '/example-six/',
		array(
			'render_callback' => __NAMESPACE__ . '\render_example_six',
		)
	);
}

function register_block_assets() {
	$asset_data = require_once __DIR__ . '/build/example-three-view.asset.php';

	wp_register_script(
		'example-three-view',
		plugin_dir_url( __FILE__ ) . 'build/example-three-view.js',
		$asset_data['dependencies'],
		$asset_data['version'],
		true
	);

	$asset_data = require_once __DIR__ . '/build/example-four-view.asset.php';

	wp_register_script(
		'example-four-view',
		plugin_dir_url( __FILE__ ) . 'build/example-four-view.js',
		$asset_data['dependencies'],
		$asset_data['version'],
		true
	);

	$asset_data = require_once __DIR__ . '/build/example-five-view.asset.php';

	wp_register_script(
		'example-five-view',
		plugin_dir_url( __FILE__ ) . 'build/example-five-view.js',
		$asset_data['dependencies'],
		$asset_data['version'],
		true
	);

	$asset_data = require_once __DIR__ . '/build/example-six-view.asset.php';

	wp_register_script(
		'example-six-view',
		plugin_dir_url( __FILE__ ) . 'build/example-six-view.js',
		$asset_data['dependencies'],
		$asset_data['version'],
		true
	);
}

function render_example_five() {
	return '<h1>Example Five Block</h1>';
}

function render_example_six() {
	wp_enqueue_script( 'example-six-view' );

	return '<h1>Example Six Block</h1>';
}
