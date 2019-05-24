<?php
/**
 * Plugin Name: counter plugin
 * Plugin URI: http://1819.aaron.lejeune.nxtmediatech.eu/counter_plugin
 * Description: Display counter on visit
 * Version: 1.0
 * Author: Aaron Lejeune
 * Author URI: http://1819.aaron.lejeune.nxtmediatech.eu
 */
 add_action( 'the_content', 'my_thank_you_text' );

function my_thank_you_text ( $content ) {
    return $content .= '<p>Thank you for reading!</p>';
}
