<?php
get_header();

// $query = get_queried_object();
// var_dump($query);

if (have_posts()) :
    while (have_posts()) : the_post();
        // the_title('<h1>', '</h1>'); 
?>
        <h2>Nom du jeu : <?php the_title(); ?></h2>
<?php the_meta();
        the_terms(get_the_ID(), 'Gamecat');
    endwhile;
endif;
get_footer();
?>