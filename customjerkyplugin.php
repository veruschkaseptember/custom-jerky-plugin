<?php

/**
 * Plugin Name:       Custom Jerky Plugin
 * Description:       Plugin allows for the dynamic replacement of words in the content on a post or page. Find and replace plugin.           
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Text Domain:       custom jerky plugin
 * Author:            Veruschka September
 */

 //Allow access through application only
if( !defined('ABSPATH') )
{
    exit;
}


function replace_content($content) {
    $search = array( 'Jerky', 'jerky ');
    $replace = array( 'Biltong', 'biltong' );
    return str_replace( $search, $replace, $content );
}
add_filter('the_content', 'filter_my_post');



?>



/*Replace text string if found in content of all posts and pages (including all custom post types)
add_filter('the_content', 'filter_my_post');
function filter_my_post($content){
   if ( is_singular() in_the_loop() is_main_query() ) { 
      $string = 'Jerky'; //your text string to be replaced
      $replace = 'Biltong';
      $content = str_replace( $string, $replace, $content );
   }
   return $content;
}
*/


/*
add_filter('the_content', 'filter_my_post');
$the_content = "Jerky";
$filter_my_post = "Jerky";

$replace_string = str_replace("Jerky", "Biltong", $the_content, $filter_my_post);

echo $replace_string;
*/



/*
//use string replace
function replace_content($content) {

    if ( is_singular() is_main_query() ) { 
    }

$content = str_replace('##Replace Old##', '##With New Text##',$content);
return $content;
}
add_filter('the_content','replace_content');*/



/*//Find the text to search for 

$myString = " 'Jerky' "
echo str_replace( 'Biltong', $myString, $num );
echo $num;*/



/*
if (strpos('Jerky', 'Jerky') !== false) {
	// String contains Jerky

str_replace('Biltong', 'Jerky', 'Biltong');
}*/



/*
// Input string
add_filter('the_content', 'filter_my_post');

$str = "You eat fruits, vegetables, fiber every day.";

// Array containing search string
$searchVal = array("jerky");

// Array containing replace string from search string
$replaceVal = array("biltong");

// Function to replace string
$res = str_replace($searchVal, $replaceVal, $str);
print_r($res);
*/




/*function replace_text($text) {
    $text = str_replace('word1', 'word2', $text);
    $text = str_replace('word3', 'word4', $text);
    
    return $text;
    }
    add_filter('the_content', 'replace_text'); */
    