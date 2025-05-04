<!DOCTYPE html>
<html lang="en">
<head>
 <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta property="og:title" content="Rasaq Malik Gbolahan" />
	<meta property="og:type" content="website" />
	<meta property="og:description" content="<?php if(is_page('home')) { echo "Rasaq Malik Gbolahan—Nigerian Poet and Translator"; } else { echo get_the_title();}; ?>" />
	<meta property="og:url" content="https://www.rasaqmalikgbolahan.com/" />
	<meta property="og:image" content="<?php echo get_theme_file_uri('/android-chrome-512x512.png'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Rasaq Malik Gbolahan—Nigerian Poet and Translator">
    <meta name="keywords" content="Nigerian Poet and Translator">
    <meta name="author" content="Rasaq Malik Gbolahan">
    <meta name="twitter:site" content="@rasaq_malik">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:creator" content="@rasaq_malik">
	<meta name="twitter:image:src" content="<?php echo get_theme_file_uri('/android-chrome-512x512.png'); ?>">
    <meta name="description" content="Rasaq Malik Gbolahan's Website">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_theme_file_uri('/favicon-32x32.png'); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_theme_file_uri('/favicon-16x16.png'); ?>">
    <link rel="manifest" href="<?php echo get_theme_file_uri('/site.webmanifest'); ?>">
    <link rel="icon" type="image/x-icon" href="<?php echo get_theme_file_uri('/favicon.ico'); ?>">
    <link rel="stylesheet" href="./assets/main.css">
    <title>Rasaq Malik Gbolahan—Nigerian Poet and Translator</title>
</head>
<body>
    <header>
        <div class="logo">RMG</div>
        <nav id="nav">
            <ul>
                <li><a href="<?php echo site_url('/'); ?>">Home</a></li>
                <li><a href="<?php echo site_url('/about'); ?>">About</a></li>
                <li><a href="<?php echo site_url('#books'); ?>">Books</a></li>
                <li><a href="<?php echo site_url('/publications'); ?>">Publications</a></li>
                <li><a href="<?php echo site_url('#performances'); ?>">Performances</a></li>
                <li><a href="<?php echo site_url('/contact'); ?>">Contact</a></li>
            </ul>
        </nav>
        <div class="hamburger" id="hamburger">
            <span class="line"></span>
            <span class="line"></span>
        </div>
    </header>