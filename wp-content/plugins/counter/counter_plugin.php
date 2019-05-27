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
     if (isset($_COOKIE['cookie_count'])){
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
$counter_answer = "lala ";

function making_cookie(){

    if (!isset($_COOKIE['cookie_count'])){
            $cookie = 0;
            setcookie("cookie_count", $cookie, strtotime( '+30 days' ));

            $GLOBALS['counter_answer']  =  "First time?";
            //$counter_answer ="First time?";
    }
    else if(isset($_COOKIE['cookie_count'])){

            $cookie = ++$_COOKIE['cookie_count'];
            setcookie("cookie_count", $cookie, strtotime( '+30 days' ));

            $GLOBALS['counter_answer'] = "You have viewed this page " . $_COOKIE['cookie_count'] . " times.";
            //$counter_answer = "You have viewed this page " . $_COOKIE['cookie_count'] . " times.";

    }else{
            $GLOBALS['counter_answer'] = "cookies not eneabled";
            //$counter_answer = "cookies not eneabled";
    }
    //var_dump(headers_sent());
    //var_dump($_COOKIE['cookie_count']);
    //return $counter_answer;

}

add_action( 'init', 'making_cookie');

function counter_shortcode( $atts ) {
   $a = shortcode_atts( array(
      'counter' => $GLOBALS['counter_answer']
   ), $atts );
   return $a['counter'];
}

add_shortcode( 'displayCounter', 'counter_shortcode' );
