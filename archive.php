<?php
get_header();
$query = get_queried_object();
function excerpt($limit)
{
    return wp_trim_words(get_the_excerpt(), $limit);
}
$i = 1; // index pour rendre unique chaque card
?>
<div class="container mb-2">
    <h1 class="bg-secondary text-center text-light mb-5 pb-2 crotte">Catégorie : <?php echo $query->name; ?></h1>
    <?php

    ?> <div class="row g-3"> <?php
                                if (have_posts()) :
                                    while (have_posts()) : the_post();
                                ?>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="card animate__animated animate__flipInY mx-auto h-100" id="card">
                        <div class="overlay_container">
                            <?php if (empty(get_field('carousel_1'))) { ?>
                                <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top p-2" alt="...">
                            <?php } else {
                            ?>
                                <div id="<?php echo 'carou_' . $i; ?>" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-bs-interval="5000">
                                            <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top p-2 d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="5000">
                                            <img src="<?php the_field('carousel_1') ?>" class="card-img-top p-2 d-block w-100" alt="...">
                                        </div>
                                        <?php
                                            if (!empty(get_field('carousel_2'))) {
                                        ?>
                                            <div class="carousel-item">
                                                <img src="<?php the_field('carousel_2') ?>" class="card-img-top p-2 d-block w-100" alt="...">
                                            </div>
                                        <?php   } ?>
                                    </div>
                                    <button class="carousel-control-prev visually-hidden" type="button" data-bs-target="<?php echo '#carou_' . $i; ?>" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next visually-hidden" type="button" data-bs-target="<?php echo '#carou_' . $i; ?>" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            <?php
                                            $i++;
                                        }
                            ?>
                            <div class="card-body" style="height : 300px;">
                                <h2 class="card-title text-center"><?php the_title(); ?></h2>
                                <?php echo '<p class="text-center">' . substr(get_field('annee_de_publication'), -4) . '</p>'; ?>
                                <p class="card-text"><?php the_excerpt(); ?></p>
                                <a href="<?php echo get_permalink() ?>" class="stretched-link"></a>
                            </div>
                            <div class="overlay">
                                <div class="text"><?php the_field('resume_overlay'); ?></div>
                            </div>
                        </div>
                        <div class="card-footer h-100  z_index">
                            <div class="d-flex"><?php the_terms(get_the_ID(), 'gamecats', '<p>', '</p> <p>', '</p>'); ?></div>
                        </div>
                    </div>
                </div>

            <?php
                                    endwhile;
                                else :
            ?>
            <p class="text-center">Il n'y a pas de jeu dans cette catégorie actuellement</p>
        <?php
                                endif;
        ?>
    </div>
</div> <?php
        get_footer();
        ?>