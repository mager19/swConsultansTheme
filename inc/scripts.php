<?php
function swConsultans_scripts()
{
    wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Poppins:wght@300;400;700;800&display=swap');
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/dist/css/app.css', array(), '1.0', 'all');
    wp_enqueue_script('theme-scripts', get_template_directory_uri() . '/assets/dist/js/app.js', array('jquery'), '0.1', true);
}
add_action('wp_enqueue_scripts', 'swConsultans_scripts');

add_action('enqueue_block_editor_assets', function () {
    wp_enqueue_style('editorStyles', get_template_directory_uri() . '/assets/dist/css/editor.css', array(), '1.0', 'all');
    wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Poppins:wght@300;400;700;800&display=swap');
});
