<?php get_header(); ?>
<?php
/* Noticias Destacadas */
$query1 = new WP_Query("posts_per_page=8");
/* Slider */
$query2 = new WP_Query("posts_per_page=4");
/* Ultimas Noticias */
$query3 = new WP_Query('posts_per_page=6&offset=4');
/* Deportes 1 */
$query4 = new WP_Query('posts_per_page=1&cat=3');
/* Deportes 2 */
$query5 = new WP_Query('posts_per_page=4&cat=3&offset=1');
/* Noticias Regionales 1 */
$query6 = new WP_Query('posts_per_page=1&cat=5');
/* Noticias Regionales 2 */
$query7 = new WP_Query('posts_per_page=4&cat=5&offset=1');
/* Tecnologia 1 */
$query8 = new WP_Query('posts_per_page=1&cat=2');
/* Tecnologia 2 */
$query9 = new WP_Query('posts_per_page=4&cat=2&offset=1');
/* Fotografia */
$query10 = new WP_Query('posts_per_page=6&cat=16');
/* Cine Y Teatro*/
$query11 = new WP_Query('posts_per_page=1&cat=17');
/* Cine Y Teatro*/
$query12 = new WP_Query('posts_per_page=4&cat=17&offset=1');
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
              <li class="facebook"><a href="#"></a></li>
              <li class="twitter"><a href="#"></a></li>
              <li class="flickr"><a href="#"></a></li>
              <li class="pinterest"><a href="#"></a></li>
              <li class="googleplus"><a href="#"></a></li>
              <li class="vimeo"><a href="#"></a></li>
              <li class="youtube"><a href="#"></a></li>
              <li class="mail"><a href="#"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="sliderSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="slick_slider" id="no-overflow">
          <?php
          if ( $query2->have_posts() ) :
            while ( $query2->have_posts() ) : $query2->the_post(); ?>
          <div class="single_iteam"> <a href=<?php the_permalink(); ?>> <img src=<?php the_post_thumbnail(); ?>></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href=<?php the_permalink(); ?>><?php the_title(); ?></a></h2>
              <p><?php the_excerpt(); ?></p>
            </div>
          </div>
        <?php endwhile; // Reset postdata
          wp_reset_postdata();
          else : ?> <li><a href="#"> Disculpa, no pudimos conseguir ningunas noticias. Vuelva pronto!</a></li> <?php endif;?>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="latest_post">
          <h2><span>Ultimas Noticias</span></h2>
          <div class="latest_post_container">
            <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
            <ul class="latest_postnav">
              <?php
              if ($query3->have_posts()):
                  while ( $query3->have_posts() ): $query3->the_post();?>
              <li>
                <div class="media"> <a href=<?php the_permalink(); ?> class="media-left"> <img src=<?php the_post_thumbnail(); ?> </a>
                  <div class="media-body"> <a href=<?php the_permalink(); ?> class="catg_title"> <?php the_title(); ?></a> </div>
                </div>
              </li>
              <?php endwhile; // Reset postdata
                wp_reset_postdata();
                else : ?> <li><a href="#"> Disculpa, no pudimos conseguir ningunas noticias. Vuelva pronto!</a></li> <?php endif;?>
            </ul>
            <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">

        <!-- banner ad -->

        <div class="wow fadeInDown">
          <br>
          <img src="images/adbanner2.jpg" alt="espacio publicitario" class="img-responsive">
          <br>
        </div>


      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_post_content">
            <h2><span>Deportes</span></h2>
            <div class="single_post_content_left">
              <ul class="business_catgnav  wow fadeInDown">
                <?php
                if ($query4->have_posts()):
                    while ( $query4->have_posts() ): $query4->the_post();?>
                <li>
                  <figure class="bsbig_fig"> <a href=<?php the_permalink(); ?> class="featured_img"> <img class="img-responsive" src=<?php the_post_thumbnail(); ?> <span class="overlay"></span> </a>
                    <figcaption> <a href=<?php the_permalink(); ?>> <?php the_title(); ?></a> </figcaption>
                    <p><?php the_excerpt(); ?></p>
                  </figure>
                </li>
              <?php endwhile; // Reset postdata
                wp_reset_postdata();
                else : ?> <li><a href="#"> Disculpa, no pudimos conseguir ningunas noticias. Vuelva pronto!</a></li> <?php endif;?>
              </ul>
            </div>
            <div class="single_post_content_right">
              <ul class="spost_nav">
                <?php
                if ($query5->have_posts()):
                    while ( $query5->have_posts() ): $query5->the_post();?>
                <li>
                  <div class="media wow fadeInDown"> <a href=<?php the_permalink(); ?> class="media-left"> <img src=<?php the_post_thumbnail(); ?> </a>
                    <div class="media-body"> <a href=<?php the_permalink(); ?> class="catg_title"> <?php the_title(); ?></a> </div>
                  </div>
                </li>
              <?php endwhile; // Reset postdata
                wp_reset_postdata();
                else : ?> <li><a href="#"> Disculpa, no pudimos conseguir ningunas noticias. Vuelva pronto!</a></li> <?php endif;?>
              </ul>
            </div>
          </div>
          <div class="fashion_technology_area">
            <div class="fashion">
              <div class="single_post_content">
                <h2><span>Noticias regionales</span></h2>
                <ul class="business_catgnav wow fadeInDown">
                  <?php
                    if ($query6->have_posts()):
                    while ( $query6->have_posts() ): $query6->the_post();?>
                  <li>
                    <figure class="bsbig_fig"> <a href=<?php the_permalink(); ?> class="featured_img"> <img class="img-responsive" src=<?php the_post_thumbnail(); ?> <span class="overlay"></span> </a>
                      <figcaption> <a href=<?php the_permalink(); ?>><?php the_title(); ?></a> </figcaption>
                      <p><?php the_excerpt(); ?></p>
                    </figure>
                  </li>
                <?php endwhile; // Reset postdata
                  wp_reset_postdata();
                  else : ?> <li><a href="#"> Disculpa, no pudimos conseguir ningunas noticias. Vuelva pronto!</a></li> <?php endif;?>
                </ul>
                <ul class="spost_nav">
                  <?php
                    if ($query7->have_posts()):
                    while ( $query7->have_posts() ): $query7->the_post();?>
                  <li>
                    <div class="media wow fadeInDown"> <a href=<?php the_permalink(); ?> class="media-left"> <img class="img-responsive" src=<?php  the_post_thumbnail(); ?> </a>
                      <div class="media-body"> <a href=<?php the_permalink(); ?> class="catg_title"> <?php the_title(); ?></a> </div>
                    </div>
                  </li>
                <?php endwhile; // Reset postdata
                  wp_reset_postdata();
                  else : ?> <li><a href="#"> Disculpa, no pudimos conseguir ningunas noticias. Vuelva pronto!</a></li> <?php endif;?>
                </ul>
              </div>
            </div>
            <div class="technology">
              <div class="single_post_content">
                <h2><span>Technologia</span></h2>
                <ul class="business_catgnav">
                  <?php
                    if ($query8->have_posts()):
                    while ( $query8->have_posts() ): $query8->the_post();?>
                  <li>
                    <figure class="bsbig_fig wow fadeInDown"> <a href=<?php the_permalink(); ?> class="featured_img"> <img class="img-responsive" src=<?php the_post_thumbnail(); ?> <span class="overlay"></span> </a>
                      <figcaption> <a href=<?php the_permalink(); ?>><?php the_title(); ?></a> </figcaption>
                      <p><?php the_excerpt(); ?></p>
                    </figure>
                  </li>
                  <?php endwhile; // Reset postdata
                    wp_reset_postdata();
                    else : ?> <li><a href="#"> Disculpa, no pudimos conseguir ningunas noticias. Vuelva pronto!</a></li> <?php endif;?>
                </ul>
                <ul class="spost_nav">
                  <?php
                    if ($query9->have_posts()):
                    while ( $query9->have_posts() ): $query9->the_post();?>
                  <li>
                    <div class="media wow fadeInDown"> <a href=<?php the_permalink(); ?> class="media-left"> <img class="img-responsive" src=<?php the_post_thumbnail(); ?> </a>
                      <div class="media-body"> <a href=<?php the_permalink(); ?> class="catg_title"><?php the_title(); ?></a> </div>
                    </div>
                  </li>
                <?php endwhile; // Reset postdata
                  wp_reset_postdata();
                  else : ?> <li><a href="#"> Disculpa, no pudimos conseguir ningunas noticias. Vuelva pronto!</a></li> <?php endif;?>
                </ul>
              </div>
            </div>
          </div>
          <div class="single_post_content">
            <h2><span>Fotografia</span></h2>
            <ul class="photograph_nav  wow fadeInDown">
              <?php
                if ($query10->have_posts()):
                while ( $query10->have_posts() ): $query10->the_post();?>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href=<?php the_permalink(); ?> title="Photography Ttile 1"> <img src=<?php the_post_thumbnail(); ?></a> </figure>
                </div>
              </li>
            <?php endwhile; // Reset postdata
              wp_reset_postdata();
              else : ?> <li><a href="#"> Disculpa, no pudimos conseguir ningunas noticias. Vuelva pronto!</a></li> <?php endif;?>
            </ul>
          </div>

          <!-- Ad Banner -->
          <div class="single_post_content">
            <br>
              <a href="#"><img src="images/addbanner_728x90_V1.jpg" alt=""></a>
            <br>
          </div>


          <div class="single_post_content">
            <h2><span>Cine y Teatro</span></h2>
            <div class="single_post_content_left">
              <ul class="business_catgnav">
                <?php
                  if ($query11->have_posts()):
                  while ( $query11->have_posts() ): $query11->the_post();?>
                <li>
                  <figure class="bsbig_fig  wow fadeInDown"> <a class="featured_img" href=<?php the_permalink(); ?>> <img class="img-responsive" src=<?php the_post_thumbnail ?> <span class="overlay"></span> </a>
                    <figcaption> <a href=<?php the_permalink(); ?>><?php the_title(); ?></a> </figcaption>
                    <p><?php the_excerpt(); ?></p>
                  </figure>
                </li>
              <?php endwhile; // Reset postdata
                wp_reset_postdata();
                else : ?> <li><a href="#"> Disculpa, no pudimos conseguir ningunas noticias. Vuelva pronto!</a></li> <?php endif;?>
              </ul>
            </div>
            <div class="single_post_content_right">
              <ul class="spost_nav">
                <?php
                  if ($query12->have_posts()):
                  while ( $query12->have_posts() ): $query12->the_post();?>
                <li>
                  <div class="media wow fadeInDown"> <a href=<?php the_permalink(); ?> class="media-left"> <img alt="" src=<?php the_post_thumbnail(); ?> </a>
                    <div class="media-body"> <a href=<?php the_permalink(); ?> class="catg_title"><?php the_title(); ?></a> </div>
                  </div>
                </li>
              <?php endwhile; // Reset postdata
                wp_reset_postdata();
                else : ?> <li><a href="#"> Disculpa, no pudimos conseguir ningunas noticias. Vuelva pronto!</a></li> <?php endif;?>
              </ul>
            </div>
          </div>
        </div>
      </div>
<?php
  get_sidebar();
  get_footer();
?>
