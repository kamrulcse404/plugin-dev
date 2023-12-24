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

if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
    require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

use Inc\Activate;
use Inc\Deactivate;
use Inc\Admin\AdminPages;


if (!class_exists('KamrulPlugin')) {


    class KamrulPlugin
    {

        public $plugin;

        function __construct()
        {
            add_action('init', array($this, 'custom_post_type'));


            $this->plugin = plugin_basename( __FILE__ );
        }

        function register()
        {
            add_action('admin_enqueue_scripts', array($this, 'enqueue'));
            add_action('admin_menu', array($this, 'add_admin_pages'));

            add_filter( "plugin_action_links_$this->plugin", array($this, 'settings_link') );
        }


        public function settings_link( $links )
        {
            // add custom settings link 

            $settings_link = '<a href="admin.php?page=kamrul_plugin">Settings</a>';
            array_push($links, $settings_link);
            return $links;
        }



        public function add_admin_pages()
        {
            add_menu_page('Kamrul Plugin', 'Kamrul', 'manage_options', 'kamrul_plugin', array($this, 'admin_index'), 'dashicons-admin-site-alt3' , 110 );
        }

        public function admin_index()
        {
            require_once plugin_dir_path(__FILE__) . 'templates/admin.php';
        }



        function custom_post_type()
        {
            register_post_type('book', ['public' => true, 'label' => 'Books']);
        }

        function enqueue()
        {
            // enqueue all our scripts
            wp_enqueue_style('mypluginstyle', plugins_url('/assets/style.css', __FILE__));
            wp_enqueue_script('mypluginscript', plugins_url('/assets/myscript.js', __FILE__));
        }

        function activate()
        {
            // require_once plugin_dir_path(__FILE__) . 'inc/kamrul-plugin-activate.php';
            Activate::activate();
        }

        function deactivate()
        {
            // require_once plugin_dir_path(__FILE__) . 'inc/kamrul-plugin-deactivate.php';
            Deactivate::deactivate();
        }
    }



    $kamrulPlugin = new KamrulPlugin();
    $kamrulPlugin->register();



    // activation 
    register_activation_hook(__FILE__, array($kamrulPlugin, 'activate'));

    // deactivation 
    register_deactivation_hook(__FILE__, array($kamrulPlugin, 'deactivate'));
}
