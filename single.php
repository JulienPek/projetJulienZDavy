<?php
require 'script.js';
get_header();

if (have_posts()) :
    while (have_posts()) : the_post();
?>


        <div class="bg-light container py-3">
            <div class="row">
                <div class="col-5 pe-3 slit-in-vertical">

                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top-V2 d-block w-100" alt="...">
                        </div>
                        <?php
                        if(!empty(get_field('carousel_1'))){
                        ?>
                        <div class="carousel-item">
                        <img src="<?php the_field('carousel_1'); ?>" class="card-img-top-V2 d-block w-100" alt="...">
                        </div>
                        <?php
                        }
                         ?>
                        <?php
                        if(!empty(get_field('carousel_2'))){
                        ?>
                        <div class="carousel-item">
                        <img src="<?php the_field('carousel_2'); ?>" class="card-img-top-V2 d-block w-100" alt="...">
                        <?php
                        }
                         ?>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    </div>


                </div>    






                <div class="col-7 ps-5">
                    
                    <div class="row bounce-in-right">
                        <h2 class="text-center text-decoration-underline fs-1 fw-bold"><?php the_title() ?></h2>
                    </div>
                    <div class="row bounce-in-right">
                        <div class="text-center pb-5">date de publication : <?php the_field("date_de_publication") ?></div>
                    </div>
                    <div class="row">
                        <div class="col-4 text-center roll-in-left">
                            <i class="bi bi-people-fill display-6"></i><p>Nombre de joueur : <?php the_field("nombre_de_joueurs") ?></p>    
                        </div>
                        <div class="col-4 text-center roll-in-top">
                        <i class="bi bi-exclamation-triangle text-success display-6"></i>
                            <p>age : <?php the_field("age") ?></p>
                        </div>
                        <div class="col-4 text-center roll-in-right">
                        </i><i class="bi bi-clock display-6"></i><p>Duree d'une partie : <?php the_field("duree_de_la_partie") ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-5">
                <div class="col-5 text-center"><?php
$terms = get_the_terms( $post->ID, 'gamecats' );
if ($terms && ! is_wp_error($terms)): ?>
    <?php foreach($terms as $term): ?>
        <a href="<?php echo get_term_link( $term->slug, 'gamecats'); ?>" rel="tag" class="AwpBtn btn btn-primary flip-horizontal-fwd cursedCursor"><?php echo $term->name; ?></a>
    <?php endforeach; ?>
<?php endif; ?></div>
                
                <div class="col-7"></div>
            </div>
            <div class="row py-5 singleArticleDescriptionBox slide-in-elliptic-bottom-fwd">
                <h2 class="text-center py-3 text-decoration-underline">Description</h2>
                <div><?php the_content() ?></div>
            </div>
            
            
            <?php $catz=get_the_terms(get_the_ID(),'gamecats');
             ?>               
        </div>
<?php endwhile;
endif;

get_footer();
?>