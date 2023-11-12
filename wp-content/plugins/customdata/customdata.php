<?php

/**
 * 
 * Plugin Name: Custom Data Management
 * Description: Manage Custom Post Type, Wordpress redirects & API integration. Exclusively built for IKONIC Solutions as an assessment task.
 * Version: 1.0.0
 * Author: Ubaid Rahim
 * Author URI: https://www.github.com/ubaidrahim/
 * Text Domain: customdata
 * 
 */

 if(!defined('ABSPATH')){
    die('Direct Access not allowed.');
 }

 if(!class_exists('CustomDataMngt')){

    class CustomDataMngt {
        
        public function __construct(){
            
            define('CDMT_PLUGIN_PATH' , plugin_dir_path( __FILE__ ));
            define('CDMT_PLUGIN_VERSION' , '1.0.0');

        }

        public function initialize(){

            require_once CDMT_PLUGIN_PATH . 'inc/wp-redirect.php';
            require_once CDMT_PLUGIN_PATH . 'inc/custom-posttype.php';
            require_once CDMT_PLUGIN_PATH . 'inc/ajax-endpoint.php';
            require_once CDMT_PLUGIN_PATH . 'inc/get-a-coffee.php';
            require_once CDMT_PLUGIN_PATH . 'inc/get-quotes.php';
            
        }


    }


    $custom_data = new CustomDataMngt;
    $custom_data->initialize();

 }