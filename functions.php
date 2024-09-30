<?php

    function scripts(){
        // add the style
        wp_register_style('style',get_template_directory_uri().'/dist/app.css',array(),1,'all');
        wp_enqueue_style('style');
        // add the script
        wp_register_script('script',get_template_directory_uri().'/dist/app.js',array('jquery'),false,true);
        wp_enqueue_script('script');

    }
    add_action('wp_enqueue_scripts','scripts');