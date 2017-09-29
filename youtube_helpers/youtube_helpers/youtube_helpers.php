<?php 

d()->youtube_code = function($link){
	$res = array();
	preg_match ('/((https?:\/\/)?(?:youtu\.be\/|(?:[a-z]{2,3}\.)?youtube\.com\/v\/)([\w-]{11}).*|https?:\/\/(?:youtu\.be\/|(?:[a-z]{2,3}\.)?youtube\.com\/watch(?:\?|#\!)v=)([\w-]{11}).*)/i', $link, $res);
	return $res[4];
}; 
d()->youtube_embed_link = function($link){
	return 'https://www.youtube.com/embed/' . d()->youtube_code($link);
}; 