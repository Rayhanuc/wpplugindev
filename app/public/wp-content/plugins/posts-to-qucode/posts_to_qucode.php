<?php
/* 
Plugin Name: Posts To QR Code
Plugin URI: http://rayhanuddin.ml/
Description: Display QR Code Under Every Posts
Version: 1.0
Author: Rayhan Uddin Chowdhury
Author URI: http://rayhanuddin.ml/
License: GPLv2 or later
Text Domain: posts-to-qrcode
Domain Path: /languages/
 */


/* function wordcount_activation_hook() {    
}
 register_activation_hook(__FILE__, "wordcount_activation_hook");

 function wordcount_deactivation_hook(){
 }
 register_deactivation_hook(__FILE__, "wordcount_deactivation_hook"); */

 function posts_to_qucode_load_textdomain(){
    load_plugin_textdomain("posts-to-qrcode", false, dirname(__FILE__),"/languages/");
}
add_action("plugins_loaded","posts_to_qucode_load_textdomain");

function pqrc_display_qu_code($content){
    $current_post_id = get_the_ID(  );
    $current_post_title = get_the_title( $current_post_id );
    $current_post_url = urlencode(get_the_permalink($current_post_id));
    $image_src = sprintf('https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=%s',$current_post_url);
    $content .= sprintf("<div class='qrcode'><img src='%s' alt='%s'></div>",$image_src,$current_post_title);
    return $content;
}
add_filter('the_content', 'pqrc_display_qu_code');