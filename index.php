<?php
get_header();
if (have_posts()) :
    while (have_posts()) : the_post();
        // Display post content
?>
        <h1><?php the_title(); ?></h1>
        <?php the_content();
        the_category(); ?>
<?php
    endwhile;
endif;
get_footer();
?>