<!DOCTYPE html>
<html>
<head>
<title>8to Mandamiento</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
<?php wp_head(); ?>
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_top">
          <div class="header_top_left">
            <?php /* Primary navigation */
              wp_nav_menu( array(
                'menu' => 'Extra Menu',
                'depth' => 2,
                'container' => false,
                'menu_class' => 'top_nav',
                //Process nav menu using our custom nav walker
                'walker' => new wp_bootstrap_navwalker())
              );
              ?>
          </div>
          <div class="header_top_right">
            <p> <?php the_time('l, F jS, Y') ?> </p>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_bottom">
          <a href="index.html" class="logo"><?php if ( function_exists( 'the_custom_logo' ) ) { the_custom_logo(); } ?> </a>
        </div>
      </div>
    </div>
  </header>
  <section id="navArea">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
          <?php /* Primary navigation */
            wp_nav_menu( array(
              'menu' => 'Header Menu',
              'depth' => 2,
              'container' => false,
              'menu_class' => 'nav main-nav navbar-nav',
              //Process nav menu using our custom nav walker
              'walker' => new wp_bootstrap_navwalker())
            );
            ?>
      </div>
    </nav>
  </section>
  <?php
  /* Noticias Destacadas */
  $query1 = new WP_Query("posts_per_page=8");
  ?>

  <section id="newsSection">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="latest_newsarea"> <span>Noticias Destacadas</span>
          <ul id="ticker01" class="news_sticker">
            <?php
            if ( $query1->have_posts() ) :
              while ( $query1->have_posts() ) : $query1->the_post(); ?>
              <li><a href=<?php the_permalink(); ?>><img src=<?php the_post_thumbnail();?> <?php the_title(); ?></a></li>
            <?php endwhile;
          // Reset postdata
          wp_reset_postdata();
          else : ?> <li><a href="#"> Disculpa, no pudimos conseguir ningunas noticias. Vuelva pronto!</a></li> <?php endif;?>
          </ul>
          <div class="social_area">
            <ul class="social_nav">
              <li class="facebook <?php echo get_theme_mod('Facebook'); ?>"><a href="<?php echo get_theme_mod('Facebook2'); ?>"></a></li>
              <li class="twitter <?php echo get_theme_mod('Twitter'); ?>"><a href="<?php echo get_theme_mod('Twitter2'); ?>"></a></li>
              <li class="flickr <?php echo get_theme_mod('Flickr'); ?>"><a href="<?php echo get_theme_mod('Flickr2'); ?>"></a></li>
              <li class="pinterest <?php echo get_theme_mod('Pintrest'); ?>"><a href="<?php echo get_theme_mod('Pintrest2'); ?>"></a></li>
              <li class="googleplus <?php echo get_theme_mod('Googleplus'); ?>"><a href="<?php echo get_theme_mod('Googleplus2'); ?>"></a></li>
              <li class="vimeo <?php echo get_theme_mod('Vimio'); ?>"><a href="<?php echo get_theme_mod('Vimio2'); ?>"></a></li>
              <li class="youtube <?php echo get_theme_mod('Youtube'); ?>"><a href="<?php echo get_theme_mod('Youtube2'); ?>"></a></li>
              <li class="mail <?php echo get_theme_mod('Mail'); ?>"><a href="<?php echo get_theme_mod('Mail2'); ?>"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
