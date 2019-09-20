<?php
/**
 * Plugin Name: Disable JQmigrate
 * Plugin URI: https://en.guydumais.digital/disable-jquery-migrate-in-wordpress/
 * Github plugin URI: https://github.com/Blindeman/disable-jqmigrate
 * Description: Don't load JQmigrate if you don't need it
 * Version: 0.0.1
 * Author: Guy Dumais
 * Author URI: https://en.guydumais.digital/
 * License: GNU General Public License 3
 * License URI: https://www.gnu.org/licenses/gpl-3.html
 */
 
/* Just putting it here so I can use it on other projects too */
 
defined( 'ABSPATH' ) or die;

add_filter( 'wp_default_scripts', $bw = static function( &$scripts) {
    if(!is_admin()) {
        $scripts->remove( 'jquery');
        $scripts->add( 'jquery', false, array( 'jquery-core' ), '1.12.4' );
    }    
}, PHP_INT_MAX );
unset( $bw );
