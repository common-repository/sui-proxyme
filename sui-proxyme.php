<?php
/*
Plugin Name: Sui-ProxyMe
Plugin URI: http://www.suibiana.org/sui-proxyme
Description: To show the pictures which are from picasa, flickr or any other site that have been blocked in your country
Version: 0.1
Author: jKey
Author URI:http://www.suibiana.com
*/

include(dirname(__FILE__).'/config.php');

if(!function_exists("suiproxyme") && $img_proxy_switch)
{
	function suiproxyme($content)
	{
		global $img_proxy_url, $img_pattern, $x, $img_keyword;
		preg_match_all($img_pattern, $content, $matches);
		$img_url_count = count($matches[$x]);
		$y = 0;
		$img_keyword_count = count($img_keyword);
		while( $y < $img_url_count )
		{
			for($i = 0; $i < $img_keyword_count; $i++)
			{
				if(substr_count($matches[$x][$y], $img_keyword[$i]) > 0)
				{
					$replace_url = $img_proxy_url.'browse.php?u='.base64_encode(substr($matches[$x][$y], 4));
					$content = str_replace($matches[$x][$y],$replace_url ,$content);
					break;
				}
			}
			$y ++;
		}	
		return $content;
	}
	add_filter("the_content","suiproxyme");
	add_filter("comment_text","suiproxyme");
}



?>