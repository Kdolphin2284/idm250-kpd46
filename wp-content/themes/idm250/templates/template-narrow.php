
<?php
/*
Template Name: Narrow
*/
?>


<?php

// Gets header.php file
get_header();

?>



<?php 
while(have_posts()) : the_post(); 
?>

<div class="idm-default-page idm_content_container">
    <h1 class=""><?php the_title(); ?>
    </h1>

    <?php the_post_thumbnail(); ?>

    <div class="narrow-template" style="max-width: 600px; width: 100%;">

        <!-- start content -->
        <?php the_content(); ?>
        <!-- end content -->

    </div>
</div>

<?php endwhile; ?>

<!-- <?php

echo 'This is a page';

?> -->



<?php

// Gets footer.php file
get_footer();

?>