<?php
// ? silence is golden
// ? code is poetry

// Exit if accessed directly.
if (!defined('ABSPATH')) {
	exit;
}



class RegisterBlockStyles
{

	/**
	 * Holds the instance.
	 */
	private static $instance;


	/**
	 * Init Main Instance.
	 *
	 * Insures that only one instance exists in memory at any one
	 * time. Also prevents needing to define globals all over the place.
	 */
	public static function instance()
	{

		// manage state to keep only one instace in memory
		if (!isset(self::$instance) && !(self::$instance instanceof RegisterBlockStyles)) {

			self::$instance = new RegisterBlockStyles();
			self::$instance->includes();
		}

		// return new instance
		return self::$instance;
	}



	private function includes()
	{

		add_action('init', function () {

			// ... require_once template files here
			$block_styles = array(
				'core/columns' => array(
					'columns-reverse' => __('Reverse', 'hencovestarter'),
				),
				'core/group' => array(
					'shadow-light' => __('Shadow', 'hencovestarter'),
					'shadow-solid' => __('Solid', 'hencovestarter'),
				),
				'core/heading' => array(
					'display' => __('Display', 'hencovestarter'),
				),
				'core/image' => array(
					'shadow-light' => __('Shadow', 'hencovestarter'),
					'shadow-solid' => __('Solid', 'hencovestarter'),
				),
				'core/list' => array(
					'no-disc' => __('No Disc', 'hencovestarter'),
					'checkmarks' => __('Checkmarks', 'hencovestarter'),
					'numbermarks' => __('Numbermarks', 'hencovestarter'),
				),
				'core/quote' => array(
					'shadow-light' => __('Shadow', 'hencovestarter'),
					'shadow-solid' => __('Solid', 'hencovestarter'),
				),
				'core/social-links' => array(
					'outline' => __('Outline', 'hencovestarter'),
				),
				'core/paragraph' => array(
					'subheadings' => __('Subheadings', 'hencovestarter'),
				),
				'core/post-terms' => array(
					'subheadings' => __('Subheadings', 'hencovestarter'),
				),
				'core/query' => array(
					'uses-flexbox' => __('Uses Flexbox', 'hencovestarter'),
				),
				'core/post-template' => array(
					'post-template-1' => __('Standard Post Template', 'hencovestarter'),
					'post-template-2' => __('Wide Post Template', 'hencovestarter'),
				),
				'ghub/query-taxonomy' => array(
					'the-latest-posts' => __('Latest Posts', 'hencovestarter'),
				),
				'kadence/accordion' => array(
					'large-cols-1' => __('Large 1-Column', 'hencovestarter'),
				),
				'ub/tabbed-content-block' => array(
					'clear' => __('Clear', 'hencovestarter'),
				)
			);

			foreach ($block_styles as $block => $styles) {
				foreach ($styles as $style_name => $style_label) {
					register_block_style(
						$block,
						array(
							'name'  => $style_name,
							'label' => $style_label,
						)
					);
				}
			}
		});
	}
}

RegisterBlockStyles::instance();
