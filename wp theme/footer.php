<footer id="footer">
  <div class="footer_top">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-4">
        <?php dynamic_sidebar( 'widget4' ); ?>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-8">
        <?php dynamic_sidebar( 'widget5' ); ?>
      </div>
    </div>
  </div>
  <div class="footer_bottom">
    <p class="copyright">Copyright &copy; <?php the_time("Y");  ?> <a href="index.html">Octavo Mandamiento</a></p>
    <p class="developer">Desarrollado Por: <a href="http://www.garufidesigns.com">Gustavo Garufi</a></p>
  </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
