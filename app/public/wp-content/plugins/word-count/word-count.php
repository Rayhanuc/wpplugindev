<?php
/* 
Plugin Name: Word Count
Plugin URI: http://rayhanuddin.ml/
Description: Count Words From Any WordPress Post
Version: 1.0
Author: LWHH
Author URI: http://rayhanuddin.ml/
License: GPLv2 or later
Text Domain: word-count
Domain Path: /languages/
 */


/* function wordcount_activation_hook() {    
}
 register_activation_hook(__FILE__, "wordcount_activation_hook");

 function wordcount_deactivation_hook(){
 }
 register_deactivation_hook(__FILE__, "wordcount_deactivation_hook"); */

function wordcount_load_textdomain(){
    load_plugin_textdomain("word-count", false, dirname(__FILE__),"/languages/");
}
add_action("plugins_loaded","wordcount_load_textdomain");

function wordcount_count_words($content){
    $stripped_content = strip_tags($content);
    $wordn = str_word_count($stripped_content);
    $label = __("Total Number of Words","word-count");
    $label = apply_filters("wordcount_heading",$label);
    $tag = apply_filters('wordcount_tag','h2');
    $content .= sprintf('<%s style="color:blue;">%s: %s</%s>',$tag,$label,$wordn,$tag);
    return $content;
}
add_filter("the_content","wordcount_count_words");





