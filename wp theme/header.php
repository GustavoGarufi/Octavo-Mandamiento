<!DOCTYPE html>
<html>
<head>
<title><?php wp_title(' | ', true, 'right'); ?></title>
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
<!-- <div id="preloader"> -->
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_top">
          <div class="header_top_left">
            <ul class="top_nav">
              <li><a href="index.html">Inicio</a></li>
              <li><a href="#">Sobre nosotros</a></li>
              <li><a href="pages/contact.html">Contactanos</a></li>
            </ul>
          </div>
          <div class="header_top_right">
            <p> <?php the_time('l, F jS, Y') ?> not working</p>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_bottom">
          <a href="index.html" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" alt=""></a>
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
        <ul class="nav navbar-nav main_nav">
          <li class="active"><a href="index.html"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Inicio</span></a></li>
          <li><a href="#">Technologia</a></li>
          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Deportes</a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Football</a></li>
              <li><a href="#">Beisbol</a></li>
              <li><a href="#">Basketball</a></li>
              <li><a href="#">Otros</a></li>
            </ul>
          </li>
          <li><a href="#">Politica</a></li>
          <li><a href="#">Regionales</a></li>
          <li><a href="#">Mujer</a></li>
          <li><a href="#">Moda</a></li>
          <li><a href="#">Educación</a></li>
          <li><a href="#">Cocina</a></li>
        </ul>
      </div>
    </nav>
  </section>
