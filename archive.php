<?php
get_header();
$query = get_queried_object();
// var_dump($query);
?>
<div class="container mb-2">
    <h1>Catégorie : <?php echo $query->name; ?></h1>
    <?php

    ?> <div class="row"> <?php
                            if (have_posts()) :
                                while (have_posts()) : the_post();
                                    //the_title('<h1>', '</h1>');
                            ?>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="card animate__flipInY my-10 h-100" id="card">
                        <img src="<?php the_post_thumbnail_url() ?>" class="card-img-top p-2" alt="...">
                        <div class="card-body" style="height : 300px;">
                            <h2 class="card-title"><?php the_title(); ?></h2>
                            <?php echo substr(get_field('annee_de_publication'), -4); ?>
                            <p class="card-text"><?php the_excerpt(); ?></p>
                            <a href="<?php echo get_permalink() ?>" class="stretched-link"></a>
                        </div>
                        <div class="card-body d-flex align-items-end">
                            <div class="d-flex z_link"><?php the_terms(get_the_ID(), 'gamecats'); ?></div>
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