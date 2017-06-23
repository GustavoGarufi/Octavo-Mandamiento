<?php get_header(); ?>

  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_page">
            <ol class="breadcrumb">
              <li><a href="<?php echo get_home_url(); ?>">Inicio</a></li>
              <li><a href="<?php echo get_category_link(); ?>"><?php echo get_the_category(); ?></a></li>
              <li class="active"><?php the_title(); ?></li>
            </ol>
              <a href="#"><img src="../images/addbanner_728x90_V1.jpg" alt=""></a>
            <br>
            <h1><?php the_title(); ?></h1>
            <div class="post_commentbox"> <a href="<?php echo the_author_link(); ?>"><i class="fa fa-user"></i><?php echo get_the_author(); ?></a> <span><i class="fa fa-calendar"></i><?php the_date('Y-m-d')?></span> <a href="#"><i class="fa fa-tags"></i><?php get_the_tags(); ?></a> </div>
            <div class="single_page_content"> <img class="img-center" <?php the_post_thumbnail(); ?>
              <?php the_content(); ?>
          </div>
            <div class="social_link">
              <ul class="sociallink_nav">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
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
      <nav class="nav-slit"> <a class="prev" href="#"> <span class="icon-wrap"><i class="fa fa-angle-left"></i></span>
        <div>
          <h3>City Lights</h3>
          <img src="../images/post_img1.jpg" alt=""/> </div>
        </a> <a class="next" href="#"> <span class="icon-wrap"><i class="fa fa-angle-right"></i></span>
        <div>
          <h3>Street Hills</h3>
          <img src="../images/post_img1.jpg" alt=""/> </div>
        </a> </nav>
      <?php get_sidebar(); ?>

  <?php
    get_footer();
  ?>
