<?php get_header(); ?>

  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_page">
            <ol class="breadcrumb">
              <li><a href="<?php echo get_home_url(); ?>">Inicio</a></li>
              <li>
                <?php
                  the_category( '<a> / </a>', 'multiple', $post->ID);
              ?> </li>
              <li class="active"><?php the_title(); ?></li>
            </ol>
              <a href="#"><img src="../images/addbanner_728x90_V1.jpg" alt=""></a>
            <br>
            <h1><?php the_title(); ?></h1>
            <div class="post_commentbox">

              <a href="  "><i class="fa fa-user"></i><?php the_author_posts_link(); ?></a>

              <span><i class="fa fa-calendar"></i><?php the_date('Y-m-d')?></span>

              <span><i class="fa fa-tags"></i><?php the_tags(); ?></span> </div>


            <div class="single_page_content"> <img class="img-center" <?php the_post_thumbnail(); ?>
              <?php the_content(); ?>
            </div>
            <div class="social_link">
              <ul class="sociallink_nav">
                <li class=" <?php echo get_theme_mod('Facebook'); ?>"><a href="<?php echo get_theme_mod('Facebook2'); ?>"><i class="fa fa-facebook"></i></a></li>
                <li class=" <?php echo get_theme_mod('Twitter'); ?>"><a href="<?php echo get_theme_mod('Twitter2'); ?>"><i class="fa fa-twitter"></i></a></li>
                <li class=" <?php echo get_theme_mod('Googleplus'); ?>"><a href="get_theme_mod('Googleplus2'); ?>"><i class="fa fa-google-plus"></i></a></li>
                <li class=" <?php echo get_theme_mod('Linkedin'); ?>"><a href="<?php echo get_theme_mod('Linkedin2'); ?>"><i class="fa fa-linkedin"></i></a></li>
                <li class=" <?php echo get_theme_mod('Pintrest'); ?>"><a href="<?php echo get_theme_mod('Pintrest2'); ?>"><i class="fa fa-pinterest"></i></a></li>
              </ul>
            </div>
                <div class="wow fadeInDown">
                  <br>
                  <img src="../images/adbanner2.jpg" alt="espacio publicitario" class="img-responsive">
                  <br>
              </div>
            <div class="related_post">
              <h2>Noticias relacionadas <i class="fa fa-thumbs-o-up"></i></h2>
              <ul class="spost_nav wow fadeInDown animated">
                <li>
                  <div class="media"> <a class="media-left" href="single_page.html"> <img src="../images/post_img1.jpg" alt=""> </a>
                    <div class="media-body"> <a class="catg_title" href="single_page.html"> Aliquam malesuada diam eget turpis varius</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media"> <a class="media-left" href="single_page.html"> <img src="../images/post_img2.jpg" alt=""> </a>
                    <div class="media-body"> <a class="catg_title" href="single_page.html"> Aliquam malesuada diam eget turpis varius</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media"> <a class="media-left" href="single_page.html"> <img src="../images/post_img1.jpg" alt=""> </a>
                    <div class="media-body"> <a class="catg_title" href="single_page.html"> Aliquam malesuada diam eget turpis varius</a> </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <?php
      $prevPost = get_previous_post(true);
      $nextPost = get_next_post(true);
      ?>
      <nav class="nav-slit">
      <?php $prevPost = get_previous_post(true);
        if($prevPost) {
            $args = array(
                'posts_per_page' => 1,
                'include' => $prevPost->ID
            );
            $prevPost = get_posts($args);
            foreach ($prevPost as $post) {
                setup_postdata($post);
    ?>
    <a class="prev" href="<?php the_permalink(); ?>"> <span class="icon-wrap"><i class="fa fa-angle-left"></i></span>
     <div>
       <div id="cooler-nav" class="navigation">
     </div>
       <h3><?php the_title(); ?></h3>
       <img src=<?php the_post_thumbnail(); ?></div>
     </a>
    <?php
                wp_reset_postdata();
            } //end foreach
        } // end if

        $nextPost = get_next_post(true);
        if($nextPost) {
            $args = array(
                'posts_per_page' => 1,
                'include' => $nextPost->ID
            );
            $nextPost = get_posts($args);
            foreach ($nextPost as $post) {
                setup_postdata($post);
    ?>
      <a class="next" href="<?php the_permalink(); ?>"> <span class="icon-wrap"><i class="fa fa-angle-right"></i></span>
      <div>
        <h3><?php the_title(); ?></h3>
        <img src=<?php the_post_thumbnail(); ?></div>
      </a>
    <?php
                wp_reset_postdata();
            } //end foreach
        } // end if
    ?>
   </nav>

      <?php get_sidebar(); ?>

  <?php
    get_footer();
  ?>
