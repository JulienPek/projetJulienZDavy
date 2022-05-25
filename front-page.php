<?php
get_header();
// get_template_part('template-parts/content', 'front-page');
$queryGame=new WP_Query([
    'post_type'=>'boardgame'
]);
$activeCarousel=true;
//var_dump($queryGame);


if (have_posts()) :
    while (have_posts()) : the_post();



?>
       
       
       <div class="container bg-light">
            <div class="row">
                <div class="col-5">
                    
                <div id="carouselExampleInterval" class="carousel slide " data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                            if  ($queryGame->have_posts()) :
                            while ($queryGame->have_posts()): $queryGame->the_post()
                        ?>
                        <div class="carousel-item <?php 
                        if($activeCarousel){
                            echo "active";
                            $activeCarousel=false;
                         }
                        ?> " data-bs-interval="3000">
                        <img src=" <?php
                        
                              echo get_the_post_thumbnail_url(); ?>" class="d-block w-100 card-img-top-V2" alt="...">
                        </div>
                        <?php
                        endwhile;
                        endif;
                        wp_reset_postdata();
                        ?>
                    </div>             
                    </div>
                </div>
                <div class="col-7">
                    <p class="text-center"><?php the_field('texte_a_droite') ?></p>
                    <p class="text-center"><?php the_field('text_droite') ?></p>
                </div>
                <div class="row">
                    <div class="col-6 offset-3"> 
                        <button type="button" class="enterBtn btn btn-primary w-100 p-3 my-5">Let's goooo !</button>
                    </div>
                </div>
            </div>

        </div>







<?php endwhile;
endif;

get_footer();
?>