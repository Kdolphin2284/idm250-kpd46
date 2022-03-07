
<?php get_header(); ?>

<!-- <?php echo 'This is the front page'; ?> -->

<?php while(have_posts()) : the_post(); ?>

<div class="<?php echo the_title();?>">
    <h1 class="idm_page_title"><?php the_title(); ?>
    </h1>

    <?php the_post_thumbnail(); ?>

    <div class="idm_content_container">

        <!-- start content -->
        <?php the_content(); ?>
        <!-- end content -->

        <?php

        get_template_part('components/home-projects');

        ?>

    </div>

</div>

<?php endwhile; ?>

<?php get_footer(); ?>