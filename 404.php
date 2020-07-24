<?php get_header(); ?>
    <main role="main" class="container">
      <div class="row mt-5">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            <?php $current_category = get_the_category()[0]; ?>
            <?= $current_category->name; ?>
          </h3>
          <div class="blog-post">
                    <h2 class="blog-post-title font-italic text-center">Oops! That page can’t be found.</h2>
              </div><!-- /.blog-post -->
        <h3 class="pb-3 mb-4 font-italic">
            Suggestions
        </h3>
          <?php 
          $posts = get_posts(['numberposts' => 5]);
          if ( $posts ) {
              foreach ( $posts as $post ) {
                // var_dump($post->post_author);die;
         ?>
         <div class="blog-post">
            <h2 class="blog-post-title"><a class="text-muted" href="<?= the_permalink($post->ID) ?>"><?= $post->post_title; ?></a></h2>

            <p class="blog-post-meta"><?= date('F j, Y', strtotime($post->post_date)); ?> by <?= get_user_by('ID',$post->post_author)->display_name; ?></p>
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
