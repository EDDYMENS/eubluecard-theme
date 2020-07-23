<?php get_header(); ?>
    <main role="main" class="container">
      <div class="row mt-5">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            Archives
          </h3>
          <?php 
          if ( have_posts() ) {
            while ( have_posts() ) {
                the_post(); ?>
         <div class="blog-post">
            <h2 class="blog-post-title"><a class="text-muted" href="<?php the_permalink(get_the_ID()) ?>"><?php the_title(); ?></a></h2>

            <p class="blog-post-meta"><?php the_date(); ?> by <?php the_author(); ?></p>
          </div><!-- /.blog-post -->

            <?php }
            } else {?>
                <div class="blog-post">
                    <h2 class="blog-post-title font-italic text-center">No post yet</h2>
              </div><!-- /.blog-post -->
            <?php }?>
            <?php 

            ?>
            <?php
            $next_posts = get_next_posts_link('Newer'); 
            $prev_posts = get_previous_posts_link('Older');
            ?>
            <nav class="blog-pagination text-center">
            <?= $prev_posts; ?>
            <?= $next_posts; ?>
          </nav>
        </div>

<?php get_footer(); ?>
