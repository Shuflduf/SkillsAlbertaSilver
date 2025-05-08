<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banff Gift Shop</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="default.css" rel="stylesheet" type="text/css" />
    <link href="mobile.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="jquery/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="jquery/jquery.slidertron-0.1.js"></script>
    <style type="text/css">@import "gallery.css";</style>
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <div id="logo">
                <a href="index.php"><div class="img-wrapper"><img src="images/logo.png" alt="Banff Gift Shop" class="logo-image" /></div></a>
                <h2><a>Where every view is a postcard</a></h2>
                <button class="mobile-menu-button" aria-label="Toggle menu">☰</button>
            </div>
            <div id="menu">
                <div<?php echo $page == 'index' ? ' class="active"' : ''; ?>><a href="index.php">Homepage</a></div>
                <div<?php echo $page == 'giftshop' ? ' class="active"' : ''; ?>><a href="giftshop.php">Gift Shop</a></div>
                <div<?php echo $page == 'about' ? ' class="active"' : ''; ?>><a href="about.php">About</a></div>
                <div<?php echo $page == 'hiking' ? ' class="active"' : ''; ?>><a href="hiking.php">Hiking</a></div>
                <div<?php echo $page == 'contact' ? ' class="active"' : ''; ?>><a href="contact.php">Contact</a></div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('.mobile-menu-button').click(function(e) {
            e.preventDefault();
            $('#menu').toggleClass('active');
            $(this).text($('#menu').hasClass('active') ? '×' : '☰');
        });
    });
</script>
</html>
