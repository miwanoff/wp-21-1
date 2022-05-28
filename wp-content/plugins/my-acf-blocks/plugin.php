<?php
/**
 * Plugin Name: My ACF blocks
 * Description: Creating the Guttenberg blocks
 * Version: 1.0
 * Author: M.A.I.
 */

function mab_register_acf_block_types()
{
    acf_register_block_type([
        'name' => 'blockquote',
        'title' => __('Blockquote'),
        'description' => __('My blockquote block.'),
        'render_template' => dirname(__file__) . '/blocks/blockquote/blockquote.php',
        'category' => 'formatting',
        'icon' => 'format-quote',
        'enqueue_style' => plugin_dir_url(__FILE__) . '/blocks/blockquote/blockquote.css',
    ]);
}

if (function_exists('acf_register_block_type')) {
    add_action('acf/init', 'mab_register_acf_block_types');
}