<?php
get_header();

// $query = get_queried_object();
// var_dump($query);
?>
<div class="container mb-2">
    <?php

    ?> <div class="row justify-content-between"> <?php
                                                    if (have_posts()) :
                                                        while (have_posts()) : the_post();
                                                            //the_title('<h1>', '</h1>');
                                                    ?>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="card" id="card" style="width: 18rem;">
                        <img src="<?php the_post_thumbnail_url() ?>" class="card-img-top p-2" style="height : 270px;" alt="...">
                        <div class="card-body" style="height : 300px;">
                            <h2 class="card-title"><?php the_title(); ?></h2>
                            <p class="card-text"><?php the_excerpt(); ?></p>
                            <a href="<?php echo get_permalink() ?>" class="stretched-link"></a>
                            <p class="display-inline_end"><?php the_terms(get_the_ID(), 'Gamecat'); ?></p>
                        </div>

                    </div>
                </div>
        <?php
                                                        endwhile;
                                                    endif;
        ?>
    </div>
</div> <?php
        get_footer();
        ?>