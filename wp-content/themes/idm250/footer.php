<?php wp_footer(); 

$theme_root_uri = get_theme_root_uri();

?>

    <?php wp_nav_menu(['theme_location' => 'footer_menu']); ?>

    <?php
  $menu_name = 'footer_menu';
  $locations = get_nav_menu_locations();
  $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
  $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
  
?>

<nav id="footer-navigation">
<ul class="main-nav">
    <?php
    $count = 0;

    foreach( $menuitems as $item ):

        $link = $item->url;
        $title = $item->title;
        $new_title = str_replace(' ', '', $title);
        $image_name = strtolower($new_title);
    ?>


    <li class="item">
        <a href="<?php echo $link; ?>" id="<?php echo $new_title; ?>" target="_blank">
            <img src="<?php echo $theme_root_uri; ?>/idm250/footerImages/<?php echo $image_name; ?>.svg" alt="<?php echo $new_title; ?> Logo">

            <!-- Echo title of image -->
            <!-- <?php echo $title; ?> -->
        </a>
    </li>


<?php $count++; endforeach; ?>

</ul>
</nav>

</body>
</html>