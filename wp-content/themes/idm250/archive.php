<?php get_header(); ?>


<?php 
while(have_posts()) : the_post(); 
?>

<div class="">
    <div class="">
        <?php 
        
         the_archive_title();
        // echo 'this is the archive page';
        
        ?>
    </div>

    <?php the_post_thumbnail(); ?>

    <div class="idm_single_content">

        <!-- start content -->
        <?php the_content(); ?>
        <!-- end content -->

    </div>
</div>

<?php endwhile; ?>


<?php get_footer(); ?>
