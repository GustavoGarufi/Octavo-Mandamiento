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
            <div class="single_page_content"> <img class="img-center" src="../images/single_post_img.jpg" alt="">
              <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui lectus, pharetra nec elementum eget, vulputate ut nisi. Aliquam accumsan, nulla sed feugiat vehicula, lacus justo semper libero, quis porttitor turpis odio sit amet ligula. Duis dapibus fermentum orci, nec malesuada libero vehicula ut. Integer sodales, urna eget interdum eleifend, nulla nibh laoreet nisl, quis dignissim mauris dolor eget mi. Donec at mauris enim. Duis nisi tellus, adipiscing a convallis quis, tristique vitae risus. Nullam molestie gravida lobortis. Proin ut nibh quis felis auctor ornare. Cras ultricies, nibh at mollis faucibus, justo eros porttitor mi, quis auctor lectus arcu sit amet nunc. Vivamus gravida vehicula arcu, vitae vulputate augue lacinia faucibus.</p>
              <blockquote> Donec volutpat nibh sit amet libero ornare non laoreet arcu luctus. Donec id arcu quis mauris euismod placerat sit amet ut metus. Sed imperdiet fringilla sem eget euismod. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque adipiscing, neque ut pulvinar tincidunt, est sem euismod odio, eu ullamcorper turpis nisl sit amet velit. Nullam vitae nibh odio, non scelerisque nibh. Vestibulum ut est augue, in varius purus. </blockquote>
              <ul>
                <li>Nullam vitae nibh odio, non scelerisque nibh</li>
                <li>Nullam vitae nibh odio, non scelerisque nibh</li>
                <li>Nullam vitae nibh odio, non scelerisque nibh</li>
                <li>Nullam vitae nibh odio, non scelerisque nibh</li>
                <li>Nullam vitae nibh odio, non scelerisque nibh</li>
                <li>Nullam vitae nibh odio, non scelerisque nibh</li>
              </ul>
              <h2>Esto es un titulo h2</h2>
              <h3>Esto es un titulo h3</h3>
              <h4>Esto es un titulo h4</h4>
              <h5>Esto es un titulo h5</h5>
              <h6>Esto es un titulo h6</h6>
              <button class="btn default-btn">Botton normal</button>
              <button class="btn btn-red">Botton rojo</button>
              <button class="btn btn-yellow">Botton amarillo</button>
              <button class="btn btn-green">Botton verde</button>
              <button class="btn btn-black">Botton negro</button>
              <button class="btn btn-orange">Botton naranja</button>
              <button class="btn btn-blue">Botton azul</button>
              <button class="btn btn-lime">Botton verde limon</button>
              <button class="btn btn-theme">Botton del tema</button>
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
