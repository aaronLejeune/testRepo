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

//greeting good... [displayTime]
 function get_time() {
     if (isset($_COOKIE['count'])){
        $welcome ="Welcome back!";
     }else {
        $welcome = "";
     }


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

    $welcome_text = $greeting . "! " . $welcome;

 	return $welcome_text;
 }

 function time_shortcode( $atts ) {
    $a = shortcode_atts( array(
       'time' => get_time()
    ), $atts );
    return $a['time'];
}
add_shortcode( 'displayTime', 'time_shortcode' );

//cookies counter [displayCounter]
function get_counter(){

    if (!isset($_COOKIE['count'])){
            $cookie = 1;
            setcookie("count", $cookie);

            $counter ="First time?";

    }else if(isset($_COOKIE['count'])){

            $cookie = ++$_COOKIE['count'];
            setcookie("count", $cookie);

            $counter =" You have viewed this page " . $_COOKIE['count'] . " times.";

    }else{
            $counter ="cookies not eneabled";
    }
    return $counter;
}

function counter_shortcode( $atts ) {
   $a = shortcode_atts( array(
      'counter' => get_counter()
   ), $atts );
   return $a['counter'];
}
add_shortcode( 'displayCounter', 'counter_shortcode' );
