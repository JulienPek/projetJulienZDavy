<?php
get_header();
if (have_posts()) :
    while (have_posts()) : the_post();
        // Display post content
?>
        <h1><?php the_title(); ?></h1>
<?php
        the_category();
        the_author();
        the_time();
    endwhile;
endif;
get_footer();
?>