<?php get_header(); ?>
<section id="contentSection">
<div class="row">
  <div class="col-lg-8 col-md-8 col-sm-8">
    <div class="left_content">
      <div class="single_post_content">
        <h2><span>Categoria: <?php single_cat_title();  ?></span></h2>
      </div>
    </div>
      <ul class="business_catgnav  wow fadeInDown">
        <?php
          if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
            <li>
              <div class="col-sm-5 col-md-5 col-lg-5">
                <figure class="bsbig_fig"> <a href=<?php the_permalink(); ?> class="featured_img"> <img class="img-responsive" src=<?php the_post_thumbnail(); ?> <span class="overlay"></span> </a>
              </div>
              <div class="col-sm-7 col-md-7 col-lg-7">
                <h3 class="noTop"> <a href=<?php the_permalink(); ?>> <?php the_title(); ?></a> </h3>
                <p><?php the_excerpt(); ?></p>
              </figure>
              </div>
            </li>
          <?php }} ?>
      </ul>
      <p> &nbsp </p>
  </div>

      <?php
        get_sidebar();
        get_footer();
      ?>
