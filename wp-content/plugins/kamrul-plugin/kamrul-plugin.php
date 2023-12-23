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

    function uninstall()
    {
        // delete cpt 
        // delete all data from the DB 
    }

    function custom_post_type()
    {   
        register_post_type( 'book', [ 'public' => true, 'label' => 'Books'] );
    }
}


if (class_exists('KamrulPlugin')) {
    $kamrulPlugin = new KamrulPlugin();
}


// activation 
register_activation_hook( __FILE__ , array($kamrulPlugin, 'activate') );

// deactivation 
register_deactivation_hook( __FILE__ , array($kamrulPlugin, 'deactivate') );

// uninstall 
register_uninstall_hook( __FILE__ , array($kamrulPlugin, 'uninstall') );
