<?php get_header(); ?>
    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <h2 class="pb-3 mb-4 font-italic border-bottom">
                <?php the_title(); ?>
          </h2>
          <?php 
          if ( have_posts()) {
            while ( have_posts() ) {
                the_post();
          ?>
         <div class="blog-post">
             <?php the_content(); ?>
          </div><!-- /.blog-post -->
               
         
            <?php }
            }
          
          ?>
          </div>
<?php get_footer(); ?>
