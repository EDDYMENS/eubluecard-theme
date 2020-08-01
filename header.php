<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Eddymens">
    <!-- <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico"> -->
    <?php 
        wp_head();
     ?>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
            <!-- <a class="text-muted" href="#">Subscribe</a> -->
          </div>
          <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="/">Third National</a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <!-- <a class="text-muted" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
            </a> -->
            <a class="btn btn-sm btn-outline-secondary" href="/jobs/">Find a job</a> &nbsp;
            <a class="btn btn-sm btn-outline-secondary" href="/post-a-job/">Post a job</a>
          </div>
        </div>
      </header>
      <div class="nav-scroller py-1 mb-2">
        <?php
            wp_nav_menu(
                [
                    'menu' => 'primary', 
                    'container' => '',
                    'theme_location' => 'primary',
                    'items_wrap' => '<nav id="" class="nav d-flex justify-content-between">%3$s</nav>',
                    'walker' => new $GLOBALS['eu_blue_card_env']['custom_menu_walker']()
                ]
            ); 
        ?>
      </div>
<?php if(is_front_page()) { ?>
  <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">Life with a Blue Card</h1>
          <p class="p-3"></p>
          <p class="lead my-3">Learn about living and working in Europe on a blue card</p>
        </div>
      </div>
    </div>
<?php } ?>
    </div>