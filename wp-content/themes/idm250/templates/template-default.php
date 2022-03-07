
<?php
/*
Template Name: Default/General
*/
?>

<?php get_header(); ?>


<!-- This is a default/general template -->


<?php while(have_posts()) : the_post(); ?>

<div class="idm-default-template idm_content_container">
    <h1 class=""><?php the_title(); ?>
    </h1>

    <?php the_post_thumbnail(); ?>

    <div class="idm-default-content">

        <!-- start content -->
        <?php the_content(); ?>
        <!-- end content -->

    </div>
    
    <?php

    get_template_part('components/default-template-elements');

    ?>
</div>

<?php endwhile; ?>




<?php get_footer(); ?>