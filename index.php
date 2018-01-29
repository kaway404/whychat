<!DOCTYPE html>
<html>
<head>
	<title>WhyChat</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/static/css/style.css"/>
</head>
<body onload="chatrealtime()">
<?php
if(isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession'])) and (isset($_COOKIE['thecry']))){
	require 'static/php/dashboard.php';
}
else{
require 'static/php/header.php';
require 'static/php/home.php';
}
?>
</body>
</html>