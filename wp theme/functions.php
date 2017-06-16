<?php

add_theme_support( 'post-thumbnails' );

function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Sidebar Uno',
		'id'            => 'widget1',
		'before_widget' => '<div class="single_sidebar">',
		'after_widget'  => '</div>',
    'before_title'  => '<h2><span>',
		'after_title'   => '</span></h2> <br>',
	) );
  register_sidebar( array(
		'name'          => 'Sidebar Dos',
		'id'            => 'widget2',
		'before_widget' => '<div class="single_sidebar wow fadeInDown">',
		'after_widget'  => '</div>',
    'before_title'  => '<h2><span>',
		'after_title'   => '</span></h2><br>',
	) );
  register_sidebar( array(
		'name'          => 'Sidebar Tres',
		'id'            => 'widget3',
		'before_widget' => '<div class="single_sidebar wow fadeInDown">',
		'after_widget'  => '</div>',
    'before_title'  => '<h2><span>',
		'after_title'   => '</span></h2><br>',
	) );
  register_sidebar( array(
		'name'          => 'Pie de Pagina Uno',
		'id'            => 'widget4',
		'before_widget' => '<div class="footer_widget wow fadeInLeft">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
  register_sidebar( array(
		'name'          => 'Pie de Pagina Dos',
		'id'            => 'widget5',
		'before_widget' => '<div class="footer_widget wow fadeInRight">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

function octavomandamiento_styles() {
/* Deregister */
  wp_deregister_style('bootstrap');
  wp_deregister_style('font-awesome');
  wp_deregister_style('animate');
  wp_deregister_style('li-scroller');
  wp_deregister_style('jquery-fancybox');
  wp_deregister_style('theme');
  wp_deregister_style('main');
/* Register */
  wp_register_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css');
  wp_register_style('font-awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css');
  wp_register_style('animate', get_template_directory_uri().'/assets/css/animate.css');
  wp_register_style('li-scroller', get_template_directory_uri().'/assets/css/li-scroller.css');
  wp_register_style('jquery-fancybox', get_template_directory_uri().'/assets/css/jquery.fancybox.css');
  wp_register_style('theme', get_template_directory_uri().'/assets/css/theme.css');
  wp_register_style('main', get_template_directory_uri().'/style.css');
/* Enqueue Style */
  wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(''), null, all);
  wp_enqueue_style('font-awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css', array('bootstrap'), null, all);
  wp_enqueue_style('animate', get_template_directory_uri().'/assets/css/animate.css', array('font-awesome'), null, all);
  wp_enqueue_style('li-scroller', get_template_directory_uri().'/assets/css/li-scroller.css', array('animate'), null, all);
  wp_enqueue_style('jquery-fancybox', get_template_directory_uri().'/assets/css/jquery.fancybox.css', array('li-scroller'), null, all);
  wp_enqueue_style('theme', get_template_directory_uri().'/assets/css/theme.css', array('jquery-fancybox'), null, all);
  wp_enqueue_style('main', get_template_directory_uri().'/style.css', array('theme'), null, all);
}
add_action("wp_enqueue_scripts", 'octavomandamiento_styles');


function octavomandamiento_scripts() {
/*Deregister Scripts */
  wp_deregister_script('wow');
  wp_deregister_script('bootstrap');
  wp_deregister_script('slick');
  wp_deregister_script('jquery_li_scroller');
  wp_deregister_script('jquery_newsTicker');
  wp_deregister_script('jquery_fancybox_pack');
  wp_deregister_script('custom');

/* Register Scripts */
  wp_register_script('wow', get_template_directory_uri().'/js/wow.min.js');
  wp_register_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js');
  wp_register_script('slick', get_template_directory_uri().'/js/slick.min.js');
  wp_register_script('jquery_li_scroller', get_template_directory_uri().'/js/jquery.li-scroller.1.0.js');
  wp_register_script('jquery_newsTicker', get_template_directory_uri().'/js/jquery.newsTicker.min.js');
  wp_register_script('jquery_fancybox_pack', get_template_directory_uri().'/js/jquery.fancybox.pack.js');
    wp_register_script('custom', get_template_directory_uri().'/js/custom.js');
/*Enqueue Scripts */
  wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery.min.js', array(), null, false);
  wp_enqueue_script('wow',  get_template_directory_uri() . '/js/wow.mim/js' , array('jquery'), null, true);
  wp_enqueue_script('bootstrap',  get_template_directory_uri() . '/js/bootstrap.min.js' , array('jquery'), null, true);
  wp_enqueue_script('slick',  get_template_directory_uri() . '/js/slick.min.js' , array('jquery'), null, true);
  wp_enqueue_script('jquery_li_scroller',  get_template_directory_uri() . '/js/jquery.li-scroller.1.0.js' , array('jquery'), null, true);
  wp_enqueue_script('jquery_newsTicker',  get_template_directory_uri(). '/js/jquery.newsTicker.min.js' , array('jquery'), null, true);
  wp_enqueue_script('jquery_fancybox_pack',  get_template_directory_uri() . '/js/jquery.fancybox.pack.js' , array('jquery'), null, true);
  wp_enqueue_script('custom',  get_template_directory_uri() . '/js/custom.js' , array('jquery'), null, true);
}
add_action("wp_enqueue_scripts", 'octavomandamiento_scripts');

?>
