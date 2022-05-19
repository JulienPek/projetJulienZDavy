<?php
get_header();

// $query = get_queried_object();
// var_dump($query);
?>
<h1>Catégories</h1>
<?php

?> <div class="row"> <?php
                        if (have_posts()) :
                            while (have_posts()) : the_post();
                                //the_title('<h1>', '</h1>');
                        ?>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="<?php the_post_thumbnail_url() ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title"><?php the_title(); ?></h2>
                        <p class="card-text"><?php the_excerpt(); ?></p>
                        <a href="<?php echo get_permalink() ?>" class="stretched-link"></a>
                        <?php the_terms(get_the_ID(), 'Gamecat'); ?>
                    </div>

                </div>
            </div>
    <?php
                            endwhile;
                        endif;
    ?>
</div> <?php
        get_footer();
        ?>