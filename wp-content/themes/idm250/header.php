<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IDM 250</title>


    <?php

        wp_head();

    ?>

    
</head>
<body>
<div id="mobile-hamburger">
    <div id="hamburger">
        <div class="hamburger-rectangles"></div>
        <div class="hamburger-rectangles"></div>
        <div class="hamburger-rectangles"></div>
    </div>
</div>
<div id="mobile-navigation">
    <?php wp_nav_menu(['theme location' => 'primary_menu']); ?>
</div>



<?php