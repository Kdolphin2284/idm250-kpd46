
<?php
/*
Template Name: Search
*/
?>

<?php get_header(); ?>


<!-- This is a search template -->


<?php while(have_posts()) : the_post(); ?>

<div class="idm_search idm_content_container">
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




<?php get_footer(); ?>