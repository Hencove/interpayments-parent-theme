<?php

/**
 * This file adds functions to the Frost WordPress theme.
 *
 * @package Hencove Starter
 * @author  Hencove
 * @license GNU General Public License v2 or later
 * @link    https://hencove.com/
 */
// 
/**
 * 
 */
require_once(get_template_directory() . '/classes/setup-theme.php');
require_once(get_template_directory() . '/classes/registerBlockStyles.php');
require_once(get_template_directory() . '/classes/registerPatternCategories.php');
require_once(get_template_directory() . '/functions/apply-filters.php');
// 
require_once(get_template_directory() . '/functions/register-blocks.php');

// 
// 
// 

function add_custom_script_to_head() {
    if (function_exists('get_field')) {
        $custom_script = get_field('theme_settings_custom_scripts_in_head', 'option'); // Adjust the second parameter as needed

        if ($custom_script) {
            echo '<script>'.$custom_script.'</script>';
        }
    }
}
add_action('wp_head', 'add_custom_script_to_head');
