<?php

function octavomandamiento_styles() {
  /* Stylesheets */
  wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(''), null, all);

  wp_register_style('font-awesome', get_template_directory_uri().'/css/font-awesome.min.css');
    wp_enqueue_style('font-awesome', get_template_directory_uri().'/css/font-awesome.min.css', array('bootstrap'), null, all);

  wp_register_style('animate', get_template_directory_uri().'/css/animate.css');
    wp_enqueue_style('animate', get_template_directory_uri().'/css/animate.css', array('font-awesome'), null, all);

  wp_register_style('li-scroller', get_template_directory_uri().'/css/li-scroller.css');
    wp_enqueue_style('li-scroller', get_template_directory_uri().'/css/li-scroller.css', array('animate'), null, all);

  wp_register_style('jquery-fancybox', get_template_directory_uri().'/css/jquery.fancybox.css');
    wp_enqueue_style('jquery-fancybox', get_template_directory_uri().'/css/jquery.fancybox.css', array('li-scroller'), null, all);

  wp_register_style('theme', get_template_directory_uri().'/css/theme.css');
    wp_enqueue_style('theme', get_template_directory_uri().'/css/theme.css', array('jquery-fancybox'), null, all);

  wp_register_style('main', get_template_directory_uri().'/style.css');
    wp_enqueue_style('main', get_template_directory_uri().'/style.css', array('theme'), null, all);
}
add_action("wp_enqueue_scripts", 'octavomandamiento_styles');


function octavomandamiento_scripts() {
  /* Scripts */
    wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery.min.js', array(), null, false);

  wp_register_script('wow', get_template_directory_uri().'/js/wow.min.js');
    wp_enqueue_script('wow',  get_template_directory_uri() . '/js/wow.mim/js' , array('jquery'), null, true);

  wp_register_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js');
    wp_enqueue_script('bootstrap',  get_template_directory_uri() . '/js/bootstrap.min.js' , array('jquery'), null, true);

  wp_register_script('slick', get_template_directory_uri().'/js/slick.min.js');
    wp_enqueue_script('slick',  get_template_directory_uri() . '/js/slick.min.js' , array('jquery'), null, true);

  wp_register_script('jquery_li_scroller', get_template_directory_uri().'/js/jquery.li-scroller.1.0.js');
    wp_enqueue_script('jquery_li_scroller',  get_template_directory_uri() . '/js/jquery.li-scroller.1.0.js' , array('jquery'), null, true);

  wp_register_script('jquery_newsTicker', get_template_directory_uri().'/js/jquery.newsTicker.min.js');
    wp_enqueue_script('jquery_newsTicker',  get_template_directory_uri(). '/js/jquery.newsTicker.min.js' , array('jquery'), null, true);

  wp_register_script('jquery_fancybox_pack', get_template_directory_uri().'/js/jquery.fancybox.pack.js');
    wp_enqueue_script('jquery_fancybox_pack',  get_template_directory_uri() . '/js/jquery.fancybox.pack.js' , array('jquery'), null, true);

  wp_register_script('custom', get_template_directory_uri().'/js/custom.js');
    wp_enqueue_script('custom',  get_template_directory_uri() . '/js/custom.js' , array('jquery'), null, true);
}
add_action("wp_enqueue_scripts", 'octavomandamiento_scripts');

?>
