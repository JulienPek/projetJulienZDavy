<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container-fluid">
      <?php
      if (function_exists('the_custom_logo')) {
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id);
        if (has_custom_logo()) {
          echo '<img src="' . esc_url($logo[0]) . '" name="' . get_bloginfo('name') . '" class="img-fluid logo" alt="">';
        } else {
          echo '<h1>' . get_bloginfo('name') . '</h1>';
        }
      }
      ?>
      <img src="" alt="" name="">
      <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name') ?></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <?php
        wp_nav_menu([
          'theme_location' => 'header',
          'container' => false,
          'menu_class' => 'navbar-nav mr-auto'
        ])
        ?>
        <!--
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      -->
      </div>
    </div>
  </nav>
  <div class="container">