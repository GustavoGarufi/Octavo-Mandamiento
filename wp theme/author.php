<?php get_header();
  $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
  $auth_id = $curauth->ID;
  $args1 = array(
    'posts_per_page' => 1,
    'author' => $auth_id
  );
  $args2 = array(
      'posts_per_page' => 6,
      'offset' => 1,
      'author' => $auth_id
    );
  $args3 = array(
    'posts_per_page' => 3,
    'offset' => 7,
    'author' => $auth_id
    );
/* Cine Y Teatro*/
$query13 = new WP_Query($args1);
/* Cine Y Teatro*/
$query14 = new WP_Query($args2);
/* Cine Y Teatro*/
$query15 = new WP_Query($args3);
    ?>
<section id="contentSection">
  <div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8">

      <h2>Sobre el Author: <?php echo $curauth->nickname; ?> </h2>
      <br>
      <dl>
          <dt>Pagina Web:</dt>
          <dd><a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a></dd>
          <dt>Descripción:</dt>
          <dd><?php echo $curauth->user_description; ?></dd>
      </dl>
          <!-- banner ad -->

          <div class="wow fadeInDown">
            <br>
            <img src="images/adbanner2.jpg" alt="espacio publicitario" class="img-responsive">
            <br>
          </div>

          <!-- /banner add -->
        <div class="left_content">
          <div class="single_post_content">
            <div class="single_post_content_left">
              <ul class="business_catgnav  wow fadeInDown">
                <?php if ($query13->have_posts()):
                    while ( $query13->have_posts() ): $query13->the_post();?>
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
                  if ($query14->have_posts()):
                      while ( $query14->have_posts() ): $query14->the_post();?>
                  <li>
                    <div class="media wow fadeInDown"> <a href=<?php the_permalink(); ?> class="media-left"> <img src=<?php the_post_thumbnail(); ?> </a>
                      <div class="media-body"> <a href=<?php the_permalink(); ?> class="catg_title"> <?php the_title(); ?></a> </div>
                    </div>
                  </li>
                <?php endwhile; // Reset postdata
                  wp_reset_postdata();
                  else : ?> <p> Todavia no hay mas contenido disponible! </p> <?php endif;?>
                </ul>
            </div>
          </div>
        </div>
<!-- This sets the $curauth variable -->
<div class="related_post">
  <h2>Mas titulaes de <?php echo $curauth->nickname; ?>: <i class="fa fa-thumbs-o-up"></i></h2>
  <br>
  <ul class="spost_nav wow fadeInDown animated">
    <?php if ($query15->have_posts()):
        while ( $query15->have_posts() ): $query15->the_post();?>
    <li>
      <div class="media"> <a class="media-left" href="<?php the_permalink(); ?>"> <img src=<?php the_post_thumbnail(); ?> </a>
        <div class="media-body"> <a class="catg_title" href="<?php the_permalink();?>"> <?php the_title(); ?></a> </div>
      </div>
    </li>
  <?php endwhile; // Reset postdata
    wp_reset_postdata();
    else : ?> <p> Todavia no hay mas contenido disponible! </p> <?php endif;?>
  </ul>
</div>
</div>
<?php
get_sidebar();
get_footer(); ?>
