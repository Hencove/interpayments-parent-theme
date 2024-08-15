<?php
//
//
// register_block_type( get_template_directory().'/blocks/lottie-player/block.json' );




function register_block_variations()
{

	wp_enqueue_script(
		'block-variations',
		get_template_directory_uri() . '/_build/js/block-variations.js',
		array('wp-blocks'),
		filemtime(get_template_directory() . '/_build/js/block-variations.js'),
		true
	);
}
add_action('enqueue_block_editor_assets', 'register_block_variations');
