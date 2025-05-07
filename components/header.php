<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Banff Gift Shop</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="default.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="jquery/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="jquery/jquery.slidertron-0.1.js"></script>
    <style type="text/css">@import "gallery.css";</style>
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <div id="logo">
                <h1><a href="#">Banff</a></h1>
                <h2><a>Where every view is a postcard</a></h2>
            </div>
            <div id="menu">
                <div<?php echo $page == 'index' ? ' class="active"' : ''; ?>><a href="index.php">Homepage</a></div>
                <div<?php echo $page == 'giftshop' ? ' class="active"' : ''; ?>><a href="giftshop.php">Gift Shop</a></div>
                <div<?php echo $page == 'about' ? ' class="active"' : ''; ?>><a href="about.php">About</a></div>
                <div<?php echo $page == 'hiking' ? ' class="active"' : ''; ?>><a href="hiking.php">Hiking</a></div>
                <div<?php echo $page == 'contact' ? ' class="active"' : ''; ?>><a href="contact.php">Contact</a></div>
            </div>
        </div>
