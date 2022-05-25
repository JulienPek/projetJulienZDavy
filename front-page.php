<?php
get_header();
// get_template_part('template-parts/content', 'front-page');

if (have_posts()) :
    while (have_posts()) : the_post();
?>
       
       
       <div class="container">
            <h2><?php the_title() ?></h2>
            <div><?php the_content() ?></div>
            <div class="row">
                <div class="col-5">
                    <img class="img-fluid" src="<?php the_field('image_gauche') ?>" alt="">
                </div>
                <div class="col-7">
                    <p class="text-left"><?php the_field('text_droite') ?></p>
                </div>
            </div>

        </div>







<?php endwhile;
endif;

get_footer();
?>