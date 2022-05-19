<?php
get_header();

if (have_posts()) :
    while (have_posts()) : the_post();
?>


        <div class="container py-3">
            
            <div class="row">
                <div class="col-5 pe-3">
                    <img src="<?php the_post_thumbnail_url(); ?>">
                </div>    
                <div class="col-7 ps-5">
                    <div class="row">
                        <h2 class="text-center text-decoration-underline fs-1 fw-bold"><?php the_title() ?></h2>
                    </div>
                    <div class="row">
                        <div class="text-center pb-5">date de publication : <?php the_field("date_de_publication") ?></div>
                    </div>
                    <div class="row">
                        <div class="col-4 text-center">
                            <i class="bi bi-people-fill display-6"></i><p>Nombre de joueur : <?php the_field("nombre_de_joueur") ?></p>    
                        </div>
                        <div class="col-4 text-center">
                        <i class="bi bi-exclamation-triangle text-success display-6"></i>
                            <p>age : <?php the_field("age") ?></p>
                        </div>
                        <div class="col-4 text-center">
                        </i><i class="bi bi-clock display-6"></i><p>Duree d'une partie : <?php the_field("duree_de_la_partie") ?></p>
                        </div>
                    </div>
                </div>    
            </div>
            <div class="row py-5">
                <div class="col-5 text-center"><?php the_terms(get_the_ID(), 'Gamecat'); ?></div>
                <div class="col-7"></div>
            </div>
            <div class="row py-5">
                <h2 class="text-center py-3 text-decoration-underline">Description</h2>
                <div><?php the_content() ?></div>
            </div>
            
            
                
        </div>
<?php endwhile;
endif;

get_footer();
?>