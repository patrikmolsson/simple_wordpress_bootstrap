<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>

  <body>
    <header class="main-header">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 blog-header col-xs-10">
            <?php 
              if ( has_custom_logo() ) {
                the_custom_logo();
              } else { ?>
                <a href="<?= get_home_url() ?>"><h1 class="blog-title"><?php echo get_bloginfo( 'name' ); ?></h1></a>
              <?php } ?>
          </div>
          <div class="col-xs-2 visible-xs">
            <button id="toggle-menu" class="pull-right toggle-menu btn">&#9776;</button>
          </div>
          <nav class="col-sm-6 blog-nav">
            <?php wp_nav_menu(); ?>
          </nav>
        </div>
      </div>
    </header>
