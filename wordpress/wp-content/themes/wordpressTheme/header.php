<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="author" content="Luke Chapman">

<title>Luke's First Wordpress<?php wp_title(); ?></title>

<script src="https://kit.fontawesome.com/968a431ae4.js" crossorigin="anonymous"></script>

<!-- TELLS PHONES NOT TO LIE ABOUT THEIR WIDTH & stops the font from enlarging when a phone is turned sideways-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- STYLE SHEETS -->
<link href="<?php echo get_template_directory_uri(); ?>/css/styles.css" rel="stylesheet">
     
    

</head>
<body onload="handleImageSlider()">
<div id="pageWrapper">
<!-- HEADER HERE -->
<header>
    <figure class="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/imgs/logo0.png" alt="Logo"
        srcset="<?php echo get_template_directory_uri(); ?>/imgs/logo1.png 1x, <?php echo get_template_directory_uri(); ?>/imgs/logo2.png 2x, <?php echo get_template_directory_uri(); ?>/imgs/logo3.png 3x">
    </figure>
    <a href="tel:+18005551234"><h3 class="phone-header hide-small">1-800-555-1234</h3></a>
</header>
    
    
<!-- NAVIGATION HERE -->
<div id="navBackground">
    <div id="navWrapper">
        <nav>
            <button class="hamburger-btn" onclick="toggleMenu()">&#9776;</button>
            <div class="search-container">
                <form class="search-form" method="get" action="/wordpress">
                    <div class="search-button"> 
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </div>
                    <div class="search-bar">
                        <input type="search" name="s" placeholder="Search..">
                    </div>    
                </form>
            </div>
            <?php wp_nav_menu(array('menu_id' => 'nav-list')); ?>
        </nav>
    </div>
</div>  

    
<!-- CONTENT HERE -->
<main class="clearfix">