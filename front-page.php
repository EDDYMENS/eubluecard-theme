<?php get_header(); ?>
    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            Latest Post
          </h3>
          <?php 
          if ( have_posts() ) {
            while ( have_posts() ) {
         
          the_post(); ?>
         <div class="blog-post">
            <h2 class="blog-post-title"><?php the_title(); ?></h2>
            <p class="blog-post-meta"><?php the_date(); ?> by <?php the_author(); ?></p>
                <?php the_content(); ?>
          </div><!-- /.blog-post -->
            <?php break;}
            }
          
          ?>
          </div>
<?php get_footer(); ?>
