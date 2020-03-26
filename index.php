<?php

$Ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
$http_lang = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);
$fd = fopen("logs.txt", 'a+') or die("не удалось создать файл");
$date = date('d.m.Y, H:i:s');
$arr = $date.'/'.$_SERVER['HTTP_CF_IPCOUNTRY'].'/'.$http_lang.'/'.$_SERVER['HTTP_REFERER'].'/'.$_SERVER['HTTP_USER_AGENT'].'/'.$Ip." \r\n\n\n";
fwrite($fd, $arr);
fclose($fd);

$haystack = $Ip;
$needle   = 'face';

$pos      = strripos($haystack, $needle);

$lang_empty = !empty($http_lang);
$lang_noen = $http_lang !== 'en';
$server = $_SERVER['HTTP_USER_AGENT'];
$pos2     = strripos($server, $needle);


$countries = ['IS','GB','NO','SE','FI','PT','ES','IT','NL','DK','DE','CH','AT','CZ','HU','LT','EE','BA','SK','SI', 'BE', 'LU', 'LV', 'RU', 'KZ', 'UA'];



if (in_array($_SERVER['HTTP_CF_IPCOUNTRY'], $countries)) {
	if (!empty($referer)) {
		include 'oil/news/index.php';
	} elseif(empty($referer)) {
		if (($lang_empty == true AND $lang_noen == true) AND $pos === false AND $pos2 === false) {
			include 'oil/news/index.php';
		}else{
			include 'white.php';
		}
		
	}else {
		include 'white.php';
	}
} else {
	 include 'white.php';
}



?>