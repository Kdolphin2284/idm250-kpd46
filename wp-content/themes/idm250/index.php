
<?php

// Gets header.php file
get_header();

// echo 'This is the index';
?>

<div class="idm_content_container">
<div id="all-projects-header">
    <h1>Search Results</h1>
    <p>Below are <b>search results</b> based off of the project you just tried to <b>find</b>. If you <b>don’t see</b> what you are looking for right away, try <b>typing it differently</b>.</p>
    <a href="<?php echo home_url(); ?>">Back to Home</a>
</div>

<?php

 $args = [
     's' => $_GET['s'],
     'post_type' => $_GET['post_type'],
 ];
 $search_query = new WP_Query($args)
?>

<div class="container project-display">
    <?php
  if ($search_query->have_posts()) {
      while ($search_query->have_posts()) : $search_query->the_post();
      get_template_part('components/archive-teaser');
      endwhile;
      // After looping through a separate query, this function restores the $post global to the current post in the main query.
      wp_reset_postdata();
  } else {
      // no results
      echo "<p class='no-search-luck'>Sorry, there are no results</p>";

      ?>
      <a class="no-search-luck" href="<?php echo home_url(); ?>">Back to Search</a>
      
      <?php
            
  }

?>
</div>
</div>

<?php

// Gets footer.php file
get_footer();

?>