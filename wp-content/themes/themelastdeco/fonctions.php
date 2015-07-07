<?php

if (!function_exists( 'lastdeco_init' )):

  function lastdeco_init() {
    // register_post_type(
    // 'projet',
    // array(
    //   'label' => 'Projets',
    //   'labels' => array(
    //     'name' => 'Projets',
    //     'singular_name' => 'Projet',
    //     'all_items' => 'Tous les projets',
    //     'add_new_item' => 'Ajouter un projet',
    //     'edit_item' => 'Éditer le projet',
    //     'new_item' => 'Nouveau projet',
    //     'view_item' => 'Voir le projet',
    //     'search_items' => 'Rechercher parmi les projets',
    //     'not_found' => 'Pas de projet trouvé',
    //     'not_found_in_trash'=> 'Pas de projet dans la corbeille'
    //   ),
    //   'public' => true,
    //   'capability_type' => 'post',
    //   'supports' => array('title', 'editor', 'thumbnail'),
    //   'has_archive' => true
    // ));

    // register_taxonomy('type','projet', array(
    //   'label' => 'Types',
    //   'labels' => array(
    //     'name' => 'Types',
    //     'singular_name' => 'Type',
    //     'all_items' => 'Tous les types',
    //     'edit_item' => 'Éditer le type',
    //     'view_item' => 'Voir le type',
    //     'update_item' => 'Mettre à jour le type',
    //     'add_new_item' => 'Ajouter un type',
    //     'new_item_name' => 'Nouveau type',
    //     'search_items' => 'Rechercher parmi les types',
    //     'popular_items' => 'Types les plus utilisés'
    //   ),
    //   'hierarchical' => true
    // ));
    // register_taxonomy('couleur','projet', array(
    //   'label' => 'Couleurs',
    //   'labels' => array(
    //     'name' => 'Couleurs',
    //     'singular_name' => 'Couleur',
    //     'all_items' => 'Toutes les couleurs',
    //     'edit_item' => 'Éditer la couleur',
    //     'view_item' => 'Voir la couleur',
    //     'update_item' => 'Mettre à jour la couleur',
    //     'add_new_item' => 'Ajouter une couleur',
    //     'new_item_name' => 'Nouvelle couleur',
    //     'search_items' => 'Rechercher parmi les couleurs',
    //     'popular_items' => 'Couleurs les plus utilisées'
    //   ),
    //   'hierarchical' => false
    // ));
    // register_taxonomy_for_object_type( 'type', 'projet' );
    // register_taxonomy_for_object_type( 'couleur', 'projet' );

    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    register_nav_menus( array(
      'primary' => __( 'Primary Menu',      'lastdeco' ),
      'social'  => __( 'Social Links Menu', 'lastdeco' ),
      ) );

      add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
      ) );

      add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
      ) );

    }
  endif;
  add_action('init', 'lastdeco_init');

  // function lastdeco_add_menu()  {
  //   register_nav_menu('main_menu', 'Menu principal');
  // }
  // add_action('init', 'lastdeco_add_menu');

  function lastdeco_widgets_init() {
    register_sidebar( array(
      'name'          => 'Widget Area',
      'id'            => 'sidebar-1',
      'description'   => 'Add widgets here to appear in your sidebar.',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
    ));
  }
  add_action( 'widgets_init', 'lastdeco_widgets_init');
