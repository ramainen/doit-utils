<?php 

d()->purify=function($text){
	require_once("app/purifier/inc/HTMLPurifier.standalone.php");
	$config = HTMLPurifier_Config::createDefault();
	$config->set('Core', 'DefinitionCache', null);
	
	$purifier = new HTMLPurifier();
	
	return $purifier->purify($text);
};