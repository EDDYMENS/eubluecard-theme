<?php get_header(); ?>
    <main role="main" class="container">
      <div class="row mt-5">
        <div class="col-md-8 blog-main">
          <h2 class="pb-3 mb-4 font-italic border-bottom">
                <?php the_title(); ?>
          </h2>
      
<?php while ( have_posts() ) : the_post(); ?>

<div class="entry-content">
    <?php the_content(); ?>
    <a class="btn btn-sm btn-outline-secondary" href="/jobs/">&#8592; Back to listings</a>
</div><!-- .entry-content -->

<?php endwhile; // end of the loop. ?>
          </div>
<?php get_footer(); ?>