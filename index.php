<<<<<<< HEAD
<?php
=======
<<<<<<< .merge_file_a13952
<?php
get_header();

// $query = get_queried_object();
// var_dump($query);

if (have_posts()) :
    while (have_posts()) : the_post();
        // the_title('<h1>', '</h1>'); 
?>
        <h2><?php the_title() ?></h2>
        <span class="pills"><?php the_category() ?></span>
<?php
    endwhile;
endif;
get_footer();
=======
<?php 

>>>>>>> 2abd9a78837032d7a6246f1013e75f19a6097eed
get_header();

// $query = get_queried_object();
// var_dump($query);

if (have_posts()) :
    while (have_posts()) : the_post();
        // the_title('<h1>', '</h1>'); 
?>
        <h2><?php the_title() ?></h2>
        <span class="pills"><?php the_category() ?></span>
<?php
    endwhile;
endif;
get_footer();
<<<<<<< HEAD
=======
?>
>>>>>>> .merge_file_a08208
>>>>>>> 2abd9a78837032d7a6246f1013e75f19a6097eed
