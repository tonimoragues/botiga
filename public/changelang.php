<?php
//echo $_SERVER['HTTP_REFERER']	;
$lang=$_GET['lang'];
setcookie('lang', $lang);
//echo "Location: ".$_SERVER['HTTP_REFERER'];
header("Location: ".$_SERVER['HTTP_REFERER']);
