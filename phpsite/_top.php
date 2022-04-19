<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="author" content="Luke Chapman">

<title>CABOT CRUISES: <?php echo $title; ?></title>

<script src="https://kit.fontawesome.com/968a431ae4.js" crossorigin="anonymous"></script>

<!-- TELLS PHONES NOT TO LIE ABOUT THEIR WIDTH & stops the font from enlarging when a phone is turned sideways-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- STYLE SHEETS -->
<link href="css/styles.css" rel="stylesheet">
     
</head>
<body onload="handleImageSlider()">
<div id="pageWrapper">
<!-- HEADER HERE -->
<header>
    <figure class="logo">
        <img src="imgs/logo0.png" alt="Logo"
        srcset="imgs/logo1.png 1x, imgs/logo2.png 2x, imgs/logo3.png 3x">
    </figure>
    <a href="tel:+18005551234"><h3 class="phone-header hide-small">1-800-555-1234</h3></a>
</header>
    
    
<!-- NAVIGATION HERE -->
<div id="navBackground">
    <div id="navWrapper">
        <nav>
            <button class="hamburger-btn" onclick="toggleMenu()">&#9776;</button>
            <div class="search-container">
                <form class="search-form">
                    <div class="search-button"> 
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </div>
                    <div class="search-bar">
                        <input type="search" placeholder="Search.." name="search">
                    </div>    
                </form>
            </div>
            <ul id="nav-list" class="hide-small">
                <li><a href="index.php">Home</a></li>
                <li><a href="cruises.php">Cruises</a></li>
                <li class="nav-parent" onclick="toggleSubMenu()"><a href="#">Agents</a>
                    <ul id="subnav-list" class="hide-sub">
                        <li><a href="sally.php">Sally Rogers</a></li>
                        <li><a href="buddy.php">Buddy Sorrell</a></li>
                    </ul>
                </li>
                <li><a href="book.php">Book</a></li>
            </ul>
        </nav>
    </div>
</div>  

    
<!-- CONTENT HERE -->
<main class="clearfix">