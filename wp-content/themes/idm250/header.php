<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IDM 250 | <?php the_title(); ?></title>


    <?php

        wp_head();

    ?>

    <?php

    // Body page specificiation
    $idm_lower_title = strtolower(get_the_title());
    $idm_page_specify = str_replace(' ', '-', $idm_lower_title);

    ?>

    
</head>
<body id="<?php echo $idm_page_specify; ?>"<?php body_class(); ?>>
<div id="mobile-hamburger">
    <div id="hamburger">
        <div class="hamburger-rectangles"></div>
        <div class="hamburger-rectangles"></div>
        <div class="hamburger-rectangles"></div>
    </div>
</div>
<div id="mobile-navigation">
    <?php wp_nav_menu(['theme_location' => 'primary_menu']); ?>
</div>



<?php

