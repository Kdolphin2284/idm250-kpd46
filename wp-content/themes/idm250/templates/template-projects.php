
<?php
/*
Template Name: Projects
*/
?>

<?php get_header(); ?>


<!-- This is a portfolio listing template -->


<?php while(have_posts()) : the_post(); ?>

<div class="idm_portfolio_listing idm_projects_template idm_content_container">
    <h1 class=""><?php the_title(); ?>
    </h1>

    <?php the_post_thumbnail(); ?>

    <div class="">

        <!-- start content -->
        <?php the_content(); ?>
        <!-- end content -->

    </div>

    <div id="idm-projects-container">
    <?php

        get_template_part('components/recent-projects');

    ?>
    </div>
</div>

<?php endwhile; ?>




<?php get_footer(); ?>