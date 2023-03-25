<?php

//Wordpress options
function get_excerpt(){
	$excerpt = get_the_content();
	$excerpt = preg_replace(" ([.*?])",'',$excerpt);
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$excerpt = substr($excerpt, 0, 100);
	$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
	$excerpt = $excerpt;
	return $excerpt;
}