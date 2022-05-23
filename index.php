<?php get_header(); ?>

<?php // wp_list_categories(['taxonomy' => 'sport', 'title_li' => '']); 
?>
<?php $gamecats = get_terms(['taxonomy' => 'gamecats']); ?>
<ul class="nav nav-pills my-4">
    <?php foreach ($gamecats as $gamecat) : ?>
        <li class="nav-item">
            <a href="<?= get_term_link($gamecat) ?>" class="nav-link <?= is_tax('gamecat', $gamecat->term_id) ? 'active' : '' ?>"><?= $gamecat->name ?></a>
        </li>
    <?php endforeach; ?>
</ul>

<?php if (have_posts()) : ?> 
    <div class="row">

        <?php while (have_posts()) : the_post(); ?>
            <div class="col-sm-4">
                <?php get_template_part('parts/card', 'post'); ?>
            </div>
        <?php endwhile ?>
    </div>
    <?php montheme_pagination() ?>
    <?php echo paginate_links(); ?>
<?php else : ?>
    <h1>Pas d'articles</h1>
<?php endif; ?>

<?php get_footer(); ?>