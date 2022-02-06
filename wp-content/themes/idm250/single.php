
<?php

// Gets header.php file
get_header();

?>



<?php 
while(have_posts()) : the_post(); 
?>

<div class="">
    <h1 class=""><?php the_title(); ?>
    </h1>

    <?php the_post_thumbnail(); ?>

    <div class="">

        <!-- start content -->
        <?php the_content(); ?>
        <!-- end content -->

    </div>
</div>

<?php endwhile; ?>

<?php

echo 'This is a single';

?>



<?php

// Gets footer.php file
get_footer();

?>