
<?php
/*
Template Name: Portfolio Listing
*/
?>

<?php get_header(); ?>


<!-- This is a portfolio listing template -->


<?php while(have_posts()) : the_post(); ?>

<div class="idm_portfolio_listing idm_content_container">
<div id="search-results-header">
    <h1>All Projects</h1>
    <p>Below are <b>search results</b> based off of the project you just tried to <b>find</b>. If you <b>don’t see</b> what you are looking for right away, try <b>typing it differently</b>.</p>
    <a href="#projects">View Projects</a>
</div>

    

    <div class="">

        <!-- start content -->
        <?php the_content(); ?>
        <!-- end content -->

    </div>
    <div id="projects">
    <?php
      // https://developer.wordpress.org/reference/classes/wp_query/
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

      $arg = [
          'post_type' => 'post',
          'post_status' => 'publish',
          'posts_per_page' => 2,
          'order' => 'DESC',
          'paged' => $paged

      ];
      $project_query = new WP_Query($arg);

      ?>
    <?php
        while ($project_query->have_posts()) : $project_query->the_post();
            get_template_part('components/archive-teaser');
        endwhile;
        // After looping through a separate query, this function restores the $post global to the current post in the main query.
        wp_reset_postdata();
        $big = 999999999; // need an unlikely integer
        echo paginate_links([
            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format' => '?paged=%#%',
            'current' => max(1, get_query_var('paged')),
            'total' => $project_query->max_num_pages
        ]);
        // echo '<nav></nav>';
      ?>
  </div>
</div>

<?php endwhile; ?>




<?php get_footer(); ?>