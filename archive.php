<?php
get_header();
$query = get_queried_object();
// var_dump($query);
?>
<div class="container mb-2">
    <h1>Catégorie : <?php echo $query->name; ?></h1>
    <?php

    ?> <div class="row mx-auto"> <?php
                                    if (have_posts()) :
                                        while (have_posts()) : the_post();
                                            //the_title('<h1>', '</h1>');
                                    ?>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="card my-2" id="card" style="width: 18rem;">
                        <img src="<?php the_post_thumbnail_url() ?>" class="card-img-top p-2" style="height : 270px;" alt="...">
                        <div class="card-body" style="height : 300px;">
                            <h2 class="card-title"><?php the_title(); ?></h2>
                            <?php the_field('annee_de_publication') ?>
                            <p class="card-text"><?php the_excerpt(); ?></p>
                            <a href="<?php echo get_permalink() ?>" class="stretched-link"></a>
                        </div>
                        <div class="card-body">
                            <div class="z_link"><?php the_terms(get_the_ID(), 'gamecats'); ?></div>
                        </div>
                    </div>
                </div>

            <?php
                                        endwhile;
                                    else :
            ?>
            <p>Il n'y a pas de jeu dans cette catégorie actuellement</p>
        <?php
                                    endif;
        ?>
    </div>
</div> <?php
        get_footer();
        ?>