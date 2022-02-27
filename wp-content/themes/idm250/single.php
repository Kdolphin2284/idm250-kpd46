
<?php

// Gets header.php file
get_header();

?>



<?php
while(have_posts()) : the_post(); 
?>

<div class="idm_single">
    <div class="idm_single_hero">
        <h1 class="idm_single_title"><?php the_title(); ?>
        </h1>
    </div>

    <?php the_post_thumbnail(); ?>

    <div class="idm_single_content">

        <!-- start content -->
        <?php the_content(); ?>
        <!-- end content -->

    </div>
</div>

<?php endwhile; ?>

<!-- <?php

echo 'This is a single';

?> -->



<?php

// Gets footer.php file
get_footer();

?>