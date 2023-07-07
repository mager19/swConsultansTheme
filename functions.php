<?php

/**
 * swConsultans First functions and definitions
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package swConsultans
 */


/** Setup **/
require('inc/setup.php');

/** Enqueue scripts and styles.**/
require('inc/scripts.php');

/** Shortcodes Theme **/
require('inc/shortcodes.php');

/**  Custom Pagination Function **/
require('inc/pagination.php');

/**  Social Shared Icons Function **/
require('inc/shared-social.php');

/** Author Fields **/
require('inc/author-fields.php');

/** Yoast Meta Description and page titles **/
require('inc/yoast-meta-description.php');

/** CTA'S post type **/
require('inc/cta-post-type.php');


if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title'  => __('Theme Options'),
        'menu_title'  => __('Theme Options'),
        'redirect'    => false,
    ));
}

/** ACF Custom functions **/
require('inc/functions/custom-functions.php');


function custom_block_category($categories, $post)
{
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'swConsultansBlocks', // Reemplaza "mi-categoria" con el slug deseado para tu categoría
                'title' => 'swConsultans Blocks', // Reemplaza "Mi Categoría" con el nombre deseado para tu categoría
            ),
        )
    );
}
add_filter('block_categories', 'custom_block_category', 10, 2);

/**
 * Register ACF Blocks
 */
require get_template_directory() . '/blocks/register-blocks.php';
