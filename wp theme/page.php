<?php get_header(); ?>
<section id="contentSection">
<div class="row">
  <div class="col-lg-8 col-md-8 col-sm-8">
    <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
    <?php the_content(); ?>
  </div>
<?php
  get_sidebar();
  get_footer();
?>
