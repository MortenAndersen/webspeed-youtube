<?php
add_action('acf/init', 'youtube_block');
function youtube_block() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a Spalter block.
        acf_register_block_type(array(
            'name'              => 'youtubewebspeed',
            'title'             => __('Youtube WEB'),
            'description'       => __('Youtube lazy loading'),
            'render_template'   => plugin_dir_path(__FILE__) . 'youtubehtml.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'WEB', 'Youtube' ),
            'mode'              => 'edit',
        ));
    }
}