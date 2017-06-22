<?php get_header(); ?>
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="error_page">
            <h3>Oh Oh! Que pena!</h3>
            <h1>404</h1>
            <p>Lamentamos informarle que la página que has buscado no ha sido encontrada. Es posible que este caída temporalmente o la página ha sido borrada.</p>
            <span></span> <a href="<?php echo get_home_url(); ?>" class="wow fadeInLeftBig">Volver a inicio</a> </div>
        </div>
      </div>
      <?php
      get_sidebar();
      get_footer();
      ?>
