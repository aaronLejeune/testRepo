<?php
/**
 * Plugin Name: counter plugin
 * Plugin URI: http://1819.aaron.lejeune.nxtmediatech.eu/counter_plugin
 * Description: Display counter on visit
 * Version: 1.0
 * Author: Aaron Lejeune
 * Author URI: http://1819.aaron.lejeune.nxtmediatech.eu
 */
 //add_action( 'wp_loaded', 'my_thank_you_text' );

 //$_SESSION['counter'];

 function torque_hello_world_shortcode( $atts ) {
    $a = shortcode_atts( array(
       'name' => 'world'
    ), $atts );
    return 'Hello ' . $a['name'] . '!';
}

add_shortcode( 'helloworld', 'torque_hello_world_shortcode' );
