<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>Writer's Portfolio</title>
</head>
<body>
    <header>
        <div class="logo">RASAQ MALIK G.</div>
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