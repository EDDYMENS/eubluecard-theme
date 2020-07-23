<?php get_header(); ?>
    <main role="main" class="container mt-5">
      <div class="row">
        <div class="col-md-8 blog-main">
          
            <?php 
            if ( have_posts() ) {
                while ( have_posts() ) {
            
                    the_post(); ?>
            <div class="blog-post">
                <h2 class="blog-post-title border-bottom mb-4 pb-3"><?php the_title(); ?></h2>
                <p class="blog-post-meta"><?php the_date(); ?> by <?php the_author(); ?></p>
                    <?php the_content(); ?>
                <?php break;}
                }
                
                ?>
            </div><!-- /.blog-post -->
            <?php 
                get_template_part('comments');
            ?>
        </div>
<?php get_footer(); ?>
