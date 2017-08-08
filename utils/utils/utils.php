<?php 
//Утилиты и хелперы
d()->utils_splitphone=function($phone){
	$arr= array();
	preg_match_all('#(.*?\))?\s*(.*)#',$phone,$arr);
	return array( $arr[1][0],$arr[2][0]);
	
	
};

d()->utils_mtime = function($url) {
  if (is_array($url)) {
    $url = $url[0];
  }
  return $url . '?t=' . filemtime($_SERVER['DOCUMENT_ROOT'] . $url);
};