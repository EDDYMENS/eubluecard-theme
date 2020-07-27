<aside class="col-md-4 blog-sidebar">
            <div class="p-3 mb-3 rounded">
                <h4>Countries</h4>
               
                <?php
                wp_nav_menu(
                        [
                            'menu' => 'country', 
                            'container' => '',
                            'theme_location' => 'country',
                            'items_wrap' => '<ul class="list-group list-group-flush">%3$s</ul>',
                            'walker' => (new $GLOBALS['eu_blue_card_env']['custom_menu_walker']())->setAttribute('class="list-group-item text-muted"')
                        ]
                    ); 
            ?>
             </div>
          <div class="p-3">
            <h4 class="font-italic">Recent Posts</h4>
            <ol class="list-unstyled mb-0">
            <?php $recent_posts = get_posts('numberposts=5');
              if($recent_posts) { ?>
                      <?php foreach( $recent_posts as $recent ) { ?>
                      <li>
                      <a class="text-muted" href="<?php echo get_permalink($recent->ID); ?>"><?php echo $recent->post_title; ?></a>
                      </li>
                      <?php } ?>
              <?php } ?>
            </ol>
          </div>
          <div class="p-3">
            <h4 class="font-italic">Archives</h4>
            <ol class="list-unstyled">
              <?php wp_get_archives([
                'format' => 'custom',
                'before' => '<li class="muted-inner-anchor">',
                'after' => '</li>'
                ]); ?>
            </ol>
          </div>
       </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->
    </main><!-- /.container -->
<footer class="blog-footer">
        <div class="nav-scroller py-1 mb-2">
            <?php
            wp_nav_menu(
                    [
                        'menu' => 'footer', 
                        'container' => '',
                        'theme_location' => 'footer',
                        'items_wrap' => '<nav id="" class="nav d-flex justify-content-center">%3$s</nav>',
                        'walker' => new $GLOBALS['eu_blue_card_env']['custom_menu_walker']()
                    ]
                ); 
            ?>
        </div>
    </footer>
  </body>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
