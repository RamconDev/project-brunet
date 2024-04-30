<?php
    /********* Enqueue Files *********/
    include_once 'includes/custom-post-types.php';

    /********* Custom Post Types *********/
    include_once 'includes/enqueue-files.php';

    // Add Thumbnail Theme Support.
    add_theme_support( 'post-thumbnails' );

    // Register Menu
    function wpb_custom_new_menu() {
        register_nav_menu('custom-menu',__( 'Principal Menu' ));
    }
    add_action( 'init', 'wpb_custom_new_menu' );