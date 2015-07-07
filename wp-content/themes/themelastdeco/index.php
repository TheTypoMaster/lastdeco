<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Last Déco</title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
</head>
<body>
  <h1>Bienvenue sur le site <?php bloginfo('name'); ?></h1>
  <p><?php bloginfo('description'); ?></p>
  <?php
  get_header();
  get_template_part('loop');
  get_sidebar();
  get_footer(); ?>
</body>
</html>
