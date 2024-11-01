<?php
/**************************************************
* Img ProxyMe config
**************************************************/

/////////////////////////////////////////////////////////////////////////////////////////////
///////////Please do not modify the following two values unless you know/////////////////////
// regular expression of img url, like: '<img src="img.jpg" />' or '<a href="img.jpg">'
$img_pattern = '/<\s*(img|a)[^>]*(src|href)\s*=\s*"\s*([^"]*\/*[^"\s])+\s*"[^>]*>/';
// the number of parenthesis that img url in regular expression 
$x = 3;
/////////////////////////////////////////////////////////////////////////////////////////////


// The Proxy site which is base on Glype
// You can find more Proxy site in https://proxy.org/proxies_sorted.shtml
// eg: 'http://proxiesite.info/' (DO NOT FORGET "/")
$img_proxy_url = 'http://proxiesite.info/';

// "true" is to unlock Img ProxyMe, "false" is to lock Img ProxyMe
$img_proxy_switch = true;

// img url keyword, like: 'ggpht' (picasa), 'flickr' (flickr) and so on.
// so you can modify like this: $img_keyword = array('ggpht','flickr');
$img_keyword = array('ggpht');





/////////////////////////////////////////////////////////////////////////////////////////////
/**************************Youtube ProxyMe will be released later****************************
/	$proxy_youtube_url = 'https://www.sneakme.net/';
/	$youtube_switch = false;
/	$youtube_pattern = '';
/////////////////////////////////////////////////////////////////////////////////////////////	
?>