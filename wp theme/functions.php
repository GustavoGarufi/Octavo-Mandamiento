<?php

function octavomandamiento_scripts() {
  wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery.min.js', array(), null, false);
  wp_enqueue_script('wow',  get_template_directory_uri() . '/js/wow.mim/js' , array('jquery'), '1.0.0', true);
  wp_enqueue_script('bootstrap',  get_template_directory_uri() . '/js/bootstrap.min.js' , array('jquery'), '1.0.0', true);
  wp_enqueue_script('slick',  get_template_directory_uri() . '/js/slick.min.js' , array('jquery'), '1.0.0', true);
  wp_enqueue_script('jquery_li_scroller',  get_template_directory_uri() . '/js/jquery.li-scroller.1.0.js' , array('jquery'), '1.0.0', true);
  wp_enqueue_script('jquery_newsTicker',  get_template_directory_uri(). '/js/jquery.newsTicker.min.js' , array('jquery'), '1.0.0', true);
  wp_enqueue_script('jquery_fancybox_pack',  get_template_directory_uri() . '/js/jquery.fancybox.pack.js' , array('jquery'), '1.0.0', true);
  wp_enqueue_script('custom',  get_template_directory_uri() . '/js/custom.js' , array('jquery'), '1.0.0', true);
}

add_action("wp_enqueue_scripts", 'octavomandamiento_scripts');

?>
