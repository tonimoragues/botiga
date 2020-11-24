<?php
//echo $_SERVER['HTTP_REFERER']	;
$lang=$_GET['lang'];
setcookie('lang', $lang);
header("Location: ".$_SERVER['HTTP_REFERER']);
