<?php get_header(); ?>
<div class="container main">

  <div class="row">

    <div class="col-sm-12 blog-main">

      <?php
      if ( have_posts() ): while ( have_posts() ): the_post();
        get_template_part( 'content', get_post_format() );
      endwhile; endif;
      ?>

    </div><!-- /.blog-main -->

    <?php // get_sidebar(); ?>

  </div><!-- /.row -->

</div><!-- /.container -->
<?php get_footer(); ?>
