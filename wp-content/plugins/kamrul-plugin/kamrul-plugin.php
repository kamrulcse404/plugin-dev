<?php

/**
 * @package KamrulPlugin
 */

/*

Plugin Name: Kamrul Plugin
Plugin URI: https://github.com/kamrulcse404/plugin-dev
Description: My first plugin Development
Version: 1.0.0
Author: "Md Kamrul Hasan"
Author URI: https://github.com/kamrulcse404
License: GPLv2 or later
Text Domain: kamrul-plugin


*/



defined('ABSPATH') or die('you can\t access this file, you silly human');

class KamrulPlugin
{
    function __construct()
    {
        add_action( 'init', array($this, 'custom_post_type' ));
    }

    function register()
    {
        add_action( 'admin_enqueue_scripts', array($this, 'enqueue' ));
    }

    function activate()
    {
        // generated cpt 
        $this->custom_post_type();
        // flush rewrite rules 
        flush_rewrite_rules();
    }

    function deactivate()
    {
        // flush rewrite rules 
        flush_rewrite_rules();
    }

    function custom_post_type()
    {   
        register_post_type( 'book', [ 'public' => true, 'label' => 'Books'] );
    }

    function enqueue()
    {
        // enqueue all our scripts
        wp_enqueue_style( 'mypluginstyle', plugins_url( '/assets/style.css', __FILE__ ) );
        wp_enqueue_script( 'mypluginscript', plugins_url( '/assets/myscript.js', __FILE__ ) );
    }
}


if (class_exists('KamrulPlugin')) {
    $kamrulPlugin = new KamrulPlugin();
    $kamrulPlugin->register();
}


// activation 
register_activation_hook( __FILE__ , array($kamrulPlugin, 'activate') );

// deactivation 
register_deactivation_hook( __FILE__ , array($kamrulPlugin, 'deactivate') );

