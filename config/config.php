<?php

require_once 'database.php';
global $fullUrl;

$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$uri = $_SERVER['SCRIPT_NAME'];

$fullUrl = $protocol . '://' . $host . $uri;
$basename = basename($fullUrl);

$fullUrl = dirname($fullUrl).'/';

function getbaseHeader()
{
	echo '
	<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">


	';
}

function gettitleHeader($title,$keywords,$description)
{
	echo '
		<title>'.$title.'</title>
   <meta name="keywords" content="'.$keywords.'">
   <meta name="description" content="'.$description.'">

	';
}

function geturlHeader()
{
   
	echo '
		<!-- owl carousel style -->
   <link rel="stylesheet" type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.2.4/assets/owl.carousel.min.css" />
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="assets/css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="assets/css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="assets/images/khap-logo.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- owl stylesheets -->
   <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
   <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">
</head>
	';
}



?>