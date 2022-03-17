<?php
/**
* The template used to display archive content.
* It is better to use specific templates like category.php, tag.php, date.php, author.php
* @link https://codex.wordpress.org/Creating_an_Archive_Index
* @link https://www.usablewp.com/learn-wordpress/building-the-blog/how-to-build-archive-pages-in-wordpress/
*/
get_header(); ?>

<div class="">
  <div class="idm_content_container">
    <h1 class="archive-title"><?php the_archive_title(); ?></h1>
    <?php
    while (have_posts()) : the_post();
      get_template_part('components/archive-teaser');
    endwhile;
    the_posts_pagination(
        [
            'mid_size' => 4,
            'prev_text' => 'Previous',
            'next_text' => 'Next'
        ]
    );
  ?>
  </div>
</div>

<?php get_footer();
