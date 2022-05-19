<?php wp_head(); ?>

<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand pt-2" href="<?php bloginfo('url'); ?>">
            <img src="<?php echo esc_url(wp_get_attachment_url(get_theme_mod('custom_logo'))); ?>" alt="logo" width="55" height="24" class="d-inline-block align-text-top">
            <?php bloginfo('name'); ?>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php wp_nav_menu(array(
                'menu' => 'main',
                'container' => false,
                'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0'
            )); ?>
        </div>
    </div>
</nav>



 

        