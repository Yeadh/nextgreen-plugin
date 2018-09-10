<?php
/**
 * Plugin Name: nextgreen-plugin
 * Plugin URI: https://nexttheme.org/
 * Description: After install the nextgreen WordPress Theme, you must need to install this "nextgreen-plugin" first to get all functions of nextgreen WP Theme.
 * Version: 1.0.0
 * Author: CodeCorns
 * Author URI: http://nexttheme.org/
 * Text Domain: nextgreen
 * License: GPL/GNU.
 /*Copyright 2018 nextgreen(email:support@nexttheme.org)
    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


//define
define( 'PLG_URL', plugins_url() );
define( 'PLG_DIR', dirname( __FILE__ ) ); 

/**----------------------------------------------------------------*/
/* Include all file
/*-----------------------------------------------------------------*/  
include_once(PLG_DIR. '/inc/custom-posts.php');
include_once(PLG_DIR. '/inc/shortcodes.php');
include_once(PLG_DIR. '/inc/vc_shortcodes.php');

/*--------- JS / CSS ----------*/
function nextgreen_core_enqueue_script() {   
    wp_enqueue_style( 'nextgreen-core-style', plugin_dir_url( __FILE__ ). 'assets/css/style.css' );
}
add_action('wp_enqueue_scripts', 'nextgreen_core_enqueue_script');