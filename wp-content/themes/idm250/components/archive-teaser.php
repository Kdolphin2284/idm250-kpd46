<?php

// Get project categories from this post ID
$project_categories = get_the_terms(get_the_ID(), 'idm-project-categories');

?>

<?php

$values = get_field( 'project_theme_color' );
if ( $values ) {
    echo 'A value is set';
} else {
    echo 'A value is not set';
}

?>




<div class="idm-archive-project">
    <div class="idm-archive-project-title">
        <h2><?php the_title(); ?></h2>
        <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail();
            } else { ?>
            <img src="https://wtwp.com/wp-content/uploads/2015/06/placeholder-image.png" />
            <?php } ?>
    </div>
    <div class="idm-archive-project-info">
        <p style="border-color: <?php echo the_field('project_theme_color'); ?>;"><?php the_field('blurb') ?></p>
        <a href="<?php the_permalink(); ?>" class="idm-archive-project-link" target="_blank" style="background: <?php echo the_field('project_theme_color'); ?>; border-color: <?php echo the_field('project_theme_color'); ?>;
        <?php

            $values = get_field( 'project_theme_color' );
            if ( $values ) {
                echo 'color: #fff;';
            } else {
                echo 'color: inherit;';
            }


        ?>">View Post</a>
    </div>
</div>