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

 function get_time() {
 	$time_format = get_option('time_format');
 	$time = date("{$time_format}", current_time('timestamp'));

    if ($time < "12") {
        $greeting = "Good morning";
    } else

    if ($time >= "12" && $time < "17") {
        $greeting =  "Good afternoon";
    } else

    if ($time >= "17" && $time < "19") {
        $greeting =  "Good evening";
    } else

    if ($time >= "19") {
        $greeting =  "Good night";
    }

 	return $greeting;
 }

 function time_shortcode( $atts ) {
    $a = shortcode_atts( array(
       'time' => get_time()
    ), $atts );
    return $a['time'] . '!';
}

add_shortcode( 'displayTime', 'time_shortcode' );
