
        <aside class="col-md-4 blog-sidebar">
        <div class="p-3 mb-3 rounded">
            <h4>Countries</h4>
            <ul class="list-group list-group-flush">
                <li class="list-group-item active">Germany</li>
                <li class="list-group-item">Luxembourg</li>
                <li class="list-group-item">Sweden</li>
                <li class="list-group-item">Netherlands</li>
            </ul>
          </div>
          <div class="p-3">
            <h4 class="font-italic">Recent Posts</h4>
            <ol class="list-unstyled mb-0">
              <li><a href="#">How do I upgrade my paid account/subscription?</a></li>
              <li><a href="#">I bought the Lifetime offer (Individual plan), can I upgrade later?</a></li>
              <li><a href="#">How To Track Your Competitors’ Rankings</a></li>
            </ol>
          </div>

          <div class="p-3">
            <h4 class="font-italic">Archives</h4>
            <ol class="list-unstyled">
            <li><a href="#">March 2014</a></li>
              <li><a href="#">February 2014</a></li>
              <li><a href="#">January 2014</a></li>
              <li><a href="#">December 2013</a></li>
              <li><a href="#">November 2013</a></li>
              <li><a href="#">October 2013</a></li>
              <li><a href="#">September 2013</a></li>
              <li><a href="#">August 2013</a></li>
              <li><a href="#">July 2013</a></li>
              <li><a href="#">June 2013</a></li>
              <li><a href="#">May 2013</a></li>
              <li><a href="#">April 2013</a></li>
            </ol>
          </div>
        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->
      </div>
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
</html>
