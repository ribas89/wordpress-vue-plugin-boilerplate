<?php

/**
 * Plugin Name:         wp-vue-quiz
 * Plugin URI:          https://ribas89.dev
 * Description:         Vue quiz inside wordpress
 * Version:             1.0.0
 * Author:              Ribas89
 * Author URI:          https://ribas89.dev
 * 
 * Be sure to rename the folder this file is in and this file to match what your plugin will be called. The names must be the same so WordPress knows where to look.
 */
function getFile($path, $name, $ext)
{
    $scan = scandir(WP_PLUGIN_DIR . '/wp-vue-quiz/dist/' . $path);
    foreach ($scan as $file) {
        if (!is_dir("/wp-vue-quiz/dist/" . $path . "$file") && preg_match('/^' . $name . '.+' . $ext . '$/', $file)) {
            return $file;
        }
    }
}

function load_vuescripts()
{
    wp_enqueue_style('vue_wp_styles', plugin_dir_url(__FILE__) . 'dist/css/' . getFile('css/', 'app', 'css'));
    wp_register_script('vue_wp_compiled', plugin_dir_url(__FILE__) . 'dist/js/' . getFile('js/', 'app', 'js'), true);
    wp_register_script('vue_wp_dependencies', plugin_dir_url(__FILE__) . 'dist/js/' . getFile('js/', 'chunk-vendors', 'js'), true);
}

add_action('wp_enqueue_scripts', 'load_vuescripts');

function attach_vue()
{
    wp_enqueue_script('vue_wp_compiled');
    wp_enqueue_script('vue_wp_dependencies');

    return '<div id="wp-vue-quiz"></div>';
}

add_shortcode('wp-vue-quiz', 'attach_vue');
