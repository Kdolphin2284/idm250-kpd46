<?php
// https://developer.wordpress.org/reference/classes/wp_query/
$arg = [
    'category_name' => 'casestudy',
    'post_status' => 'publish',
    'posts_per_page' => 2,
    'order' => 'DESC'
];
$project_query = new WP_Query($arg);
?>

<section class="idm-project-container">
  <div class="idm-projects">
    <?php
    while ($project_query->have_posts()) : $project_query->the_post(); ?>
    <div class="idm-project-preview">
        <div class="idm-project-code-breadcrumbs">
          <p class="html_text"><?php the_field('used_html'); ?></p>
          <p class="css_text"><?php the_field('used_css'); ?></p>
          <p class="javascript_text"><?php the_field('used_js'); ?></p>
          <p class="php_text"><?php the_field('used_php'); ?></p>
          <p class="mysql_text"><?php the_field('used_mysql'); ?></p>
        </div>
        <div class="idm-project-info">
          <div class="idm-project-preview-text">
            <h2 class="idm-project-name"><?php the_field('project_name'); ?></h2>
            <p class="idm-project-subheading"><?php the_field('project_subheading'); ?></p>
            <p class="idm-project-blurb" style="border-color: <?php echo the_field('project_theme_color'); ?> "><?php the_field('blurb'); ?></p>
            <div class="idm-project-links">
              <a href="<?php the_field('link_to_project'); ?>" target="_blank" style="border-color: <?php echo the_field('project_theme_color'); ?>; background: <?php echo the_field('project_theme_color'); ?>;" >View Site</a>
              <a href="<?php the_permalink(); ?>" target="_blank" style="border-color: <?php echo the_field('project_theme_color'); ?>; background: <?php echo the_field('project_theme_color'); ?>;" >Case Study</a>
            </div>
          </div>
          <div class="idm-project-image">
            <?php the_post_thumbnail(); ?>
          </div>
        </div>
    </div>
    <?php
    endwhile;
    wp_reset_postdata();
  ?>
  </div>
</section>