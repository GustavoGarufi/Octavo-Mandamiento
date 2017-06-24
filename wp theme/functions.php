<?php
// Register Custom Navigation Walker
require_once('wp-bootstrap-navwalker.php');
// Basic Theme Supports
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-logo' );
//Register Menus
function register_my_menus() {
  register_nav_menus( array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
     ));
	 }add_action( 'init', 'register_my_menus' );
// Register $wp_customize
function octavomandamiento_customize_register( $wp_customize ) {
	$wp_customize->add_setting('Main_Color', array(
		'default'=> '#E46C09',
		'transport' => 'refresh',
	));
	$wp_customize->add_section( 'Colores' , array(
	    'title' =>  __('Colores', 'Octavo Mandamiento'),
			'priority'=> 30,
	));
	$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'Main_Color_Control', array(
		'label' => __('Colores Standards', 'Octavo Mandamiento'),
		'section' => 'Colores',
		'settings' => 'Main_Color'
	)));
	} add_action( 'customize_register', 'octavomandamiento_customize_register' );
//Output $wp_customize CSS
function octavomandamiento_custom_css(){ ?>
	<style type="text/css">
		.tagcloud > a {color:<?php echo get_theme_mod('Main_Color'); ?>; text-decoration:none}
		.btn-theme{background-color:<?php echo get_theme_mod('Main_Color'); ?>; color:#fff}
		.top_nav li a:hover{background-color:<?php echo get_theme_mod('Main_Color'); ?>}
		.developer a{color:<?php echo get_theme_mod('Main_Color'); ?>}
		.catgArchive option{background-color:#fff; font-weight:normal; padding:5px; color:<?php echo get_theme_mod('Main_Color'); ?>}
		.pagination > li > a:hover, .pagination > li > a:focus{background-color:<?php echo get_theme_mod('Main_Color'); ?>; color:#fff; border-color:<?php echo get_theme_mod('Main_Color'); ?>}
		.contact_form input[type="submit"]:hover{border:1px solid <?php echo get_theme_mod('Main_Color'); ?>}
		.scrollToTop{background-color:<?php echo get_theme_mod('Main_Color'); ?>; color:#fff}
		.scrollToTop:hover, .scrollToTop:focus{background-color:#fff; color:<?php echo get_theme_mod('Main_Color'); ?>; border-color:1px solid <?php echo get_theme_mod('Main_Color'); ?>}
		.logo > span{color:<?php echo get_theme_mod('Main_Color'); ?>}
		.navbar-inverse .navbar-nav > li > a:hover, .navbar-inverse .navbar-nav > li > a:focus{background-color:<?php echo get_theme_mod('Main_Color'); ?>}
		.navbar-inverse .navbar-nav > .active > a, .navbar-inverse .navbar-nav > .active > a:hover, .navbar-inverse .navbar-nav > .active > a:focus{background-color:<?php echo get_theme_mod('Main_Color'); ?>}
		.dropdown-menu > li > a:hover, .dropdown-menu > li > a:focus{background-color:<?php echo get_theme_mod('Main_Color'); ?>}
		.navbar-inverse .navbar-nav > .open > a, .navbar-inverse .navbar-nav > .open > a:hover, .navbar-inverse .navbar-nav > .open > a:focus{background-color:<?php echo get_theme_mod('Main_Color'); ?>}
		.dropdown-menu > li > a:hover, .dropdown-menu > li > a:focus{background-color:<?php echo get_theme_mod('Main_Color'); ?>}
		.navbar-inverse .navbar-nav > .open > a, .navbar-inverse .navbar-nav > .open > a:hover, .navbar-inverse .navbar-nav > .open > a:focus{background-color:<?php echo get_theme_mod('Main_Color'); ?>}
		.latest_newsarea span{background:none repeat scroll 0 0 <?php echo get_theme_mod('Main_Color'); ?>}
		.latest_post > h2 span{background:none repeat scroll 0 0 <?php echo get_theme_mod('Main_Color'); ?>}
		#prev-button{color:<?php echo get_theme_mod('Main_Color'); ?>}
		#next-button{color:<?php echo get_theme_mod('Main_Color'); ?>}
		.single_post_content > h2 span{background:none repeat scroll 0 0 <?php echo get_theme_mod('Main_Color'); ?>}
		.single_sidebar > h2 span{ background:none repeat scroll 0 0 <?php echo get_theme_mod('Main_Color'); ?>}
		.bsbig_fig figcaption a:hover{color:<?php echo get_theme_mod('Main_Color'); ?>}
		.spost_nav .media-body > a:hover{color:<?php echo get_theme_mod('Main_Color'); ?>}
		.cat-item a:hover{background-color:<?php echo get_theme_mod('Main_Color'); ?>}
		.nav-tabs > li > a:hover, .nav-tabs > li > a:focus{background-color:<?php echo get_theme_mod('Main_Color'); ?>}
		.nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus{background-color:<?php echo get_theme_mod('Main_Color'); ?>}
		.single_sidebar > ul > li a:hover{color:<?php echo get_theme_mod('Main_Color'); ?>}
		.footer_widget > h2:hover{color:<?php echo get_theme_mod('Main_Color'); ?>}
		.tag_nav li a:hover{color:<?php echo get_theme_mod('Main_Color'); ?>; border-color:<?php echo get_theme_mod('Main_Color'); ?>}
		.copyright a:hover{color:<?php echo get_theme_mod('Main_Color'); ?>}
		.post_commentbox a:hover, .post_commentbox span:hover{color:<?php echo get_theme_mod('Main_Color'); ?>}
		.breadcrumb{border-left:10px solid <?php echo get_theme_mod('Main_Color'); ?>}
		.single_page_content ul li:before{background-color:<?php echo get_theme_mod('Main_Color'); ?>}
		.single_page_content h2, .single_page_content h3, .single_page_content h4, .single_page_content h5, .single_page_content h6{color:<?php echo get_theme_mod('Main_Color'); ?>}
		.nav-slit .icon-wrap{background-color:<?php echo get_theme_mod('Main_Color'); ?>}
		.nav-slit h3{background:<?php echo get_theme_mod('Main_Color'); ?>}
		.catgArchive{background-color:<?php echo get_theme_mod('Main_Color'); ?>}
		.error_page > h3{color:<?php echo get_theme_mod('Main_Color'); ?>}
		.error_page > span{background:none repeat scroll 0 0 <?php echo get_theme_mod('Main_Color'); ?>}
		.error_page > a{background-color:<?php echo get_theme_mod('Main_Color'); ?>}
		.contact_area > h2{background-color:<?php echo get_theme_mod('Main_Color'); ?>}
		.contact_form input[type="submit"]{background-color:<?php echo get_theme_mod('Main_Color'); ?>}
		.contact_form input[type="submit"]:hover{background-color:#fff; color:<?php echo get_theme_mod('Main_Color'); ?>}
		.related_post > h2 i{color:<?php echo get_theme_mod('Main_Color'); ?>}
		.form-control:focus{border-color:<?php echo get_theme_mod('Main_Color'); ?>;  box-shadow:0 0px 1px <?php echo get_theme_mod('Main_Color'); ?> inset,0 0 5px <?php echo get_theme_mod('Main_Color'); ?>}
	</style>
	<?php
} add_action('wp_head', 'octavomandamiento_custom_css');
// Register Custom Logo
function octavomandamiento_custom_logo() {
    $defaults = array(
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array('site-title', 'site-description'),
    ); add_theme_support( 'custom-logo', $defaults );
} add_action( 'after_setup_theme', 'octavomandamiento_custom_logo' );
// adding class to logo
function change_logo_class( $html ) {
    $html = str_replace( 'custom-logo', 'img-responsive', $html );
    return $html;
} add_filter( 'get_custom_logo', 'change_logo_class' );
//adding widgets
function arphabet_widgets_init() {
	register_sidebar(array(
		'name'          => 'Sidebar Uno',
		'id'            => 'widget1',
		'before_widget' => '<div class="single_sidebar">',
		'after_widget'  => '</div>',
    'before_title'  => '<h2><span>',
		'after_title'   => '</span></h2> <br>',
	));
  register_sidebar(array(
		'name'          => 'Sidebar Dos',
		'id'            => 'widget2',
		'before_widget' => '<div class="single_sidebar wow fadeInDown">',
		'after_widget'  => '</div>',
    'before_title'  => '<h2><span>',
		'after_title'   => '</span></h2><br>',
	));
  register_sidebar(array(
		'name'          => 'Sidebar Tres',
		'id'            => 'widget3',
		'before_widget' => '<div class="single_sidebar wow fadeInDown">',
		'after_widget'  => '</div>',
    'before_title'  => '<h2><span>',
		'after_title'   => '</span></h2><br>',
	));
  register_sidebar(array(
		'name'          => 'Pie de Pagina Uno',
		'id'            => 'widget4',
		'before_widget' => '<div class="footer_widget wow fadeInLeft">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	));
  register_sidebar(array(
		'name'          => 'Pie de Pagina Dos',
		'id'            => 'widget5',
		'before_widget' => '<div class="footer_widget wow fadeInRight">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	));
} add_action( 'widgets_init', 'arphabet_widgets_init' );
// adding styles and scripts
function octavomandamiento_styles() {
/* Deregister */
  wp_deregister_style('bootstrap');
  wp_deregister_style('font-awesome');
  wp_deregister_style('animate');
  wp_deregister_style('li-scroller');
  wp_deregister_style('jquery-fancybox');
  wp_deregister_style('main');
/* Register */
  wp_register_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css');
  wp_register_style('font-awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css');
  wp_register_style('animate', get_template_directory_uri().'/assets/css/animate.css');
  wp_register_style('li-scroller', get_template_directory_uri().'/assets/css/li-scroller.css');
  wp_register_style('jquery-fancybox', get_template_directory_uri().'/assets/css/jquery.fancybox.css');
  wp_register_style('main', get_template_directory_uri().'/style.css');
/* Enqueue Style */
  wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(''), null, all);
  wp_enqueue_style('font-awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css', array('bootstrap'), null, all);
  wp_enqueue_style('animate', get_template_directory_uri().'/assets/css/animate.css', array('font-awesome'), null, all);
  wp_enqueue_style('li-scroller', get_template_directory_uri().'/assets/css/li-scroller.css', array('animate'), null, all);
  wp_enqueue_style('jquery-fancybox', get_template_directory_uri().'/assets/css/jquery.fancybox.css', array('li-scroller'), null, all);
  wp_enqueue_style('main', get_template_directory_uri().'/style.css', array('jquery-fancybox'), null, all);
} add_action("wp_enqueue_scripts", 'octavomandamiento_styles');
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
} add_action("wp_enqueue_scripts", 'octavomandamiento_scripts');
?>
