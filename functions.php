<!--
  This file is where you can override and initiate different wordpress
  features.
-->
<?php
  /*
    Use tb_ (theme boilderplate, this can be anything you'd like) prefix as to
    not conflict with stock wordpress function names.
  */
  function tb_theme_support() {
    // Add dynamic title tag support.
    add_theme_support( 'title-tag' );
  }

  // Add menu options.
  function tb_menus() {
    $locations = array( 'primary' => 'Primary Menu' );
    register_nav_menus( $locations );
  }
  add_action( 'init', 'tb_menus' );
  add_action( 'after_setup_theme', 'tb_theme_support' );

  /*
    Programmatically link to style sheets, so they're available to things like
    plugins.
  */
  function tb_register_styles() {
    // make theme version dynamic
    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style(
      'tb-style-reset',
      get_template_directory_uri() . "/assets/reset.css",
      array(),
      '1.0',
      'all',
    );
    wp_enqueue_style(
      'tb-styles',
      get_template_directory_uri() . "/style.css",
      array(),
      $version,
      'all',
    );
  }
  // Allow the above function to hook into the wordpress system.
  add_action( 'wp_enqueue_scripts', 'tb_register_styles' );

  // Programmatically link to javascript logic.
  function tb_register_scripts() {
    $version = wp_get_theme()->get( 'Version' );
    /*
      The 5th argument passed to wp_enqueue_script is a boolean indicating
      whether or not we want to inject the script at the bottom of the document
      body as opposed to in the head.
    */
    wp_enqueue_script(
      'tb-script',
      get_template_directory_uri() . "/assets/main.js",
      array(),
      $version,
      true,
    );
  }
  add_action( 'wp_enqueue_scripts', 'tb_register_scripts' );

  // Trim the post excerpt lengths shown on the blog page.
  function tb_format_excerpt_length($length){
    return 40;
  }
  add_filter( 'excerpt_length', 'tb_format_excerpt_length' );

  // Format post excerpt ellipsis shown on the blog page.
  function tb_format_ellipsis($more) {
    return '...';
  }
  add_filter( 'excerpt_more', 'tb_format_ellipsis' );
