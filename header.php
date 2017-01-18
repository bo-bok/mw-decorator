<!DOCTYPE html>

<html>

  <head>
    <title><?php wp_title(); ?></title>

    <?php wp_head(); ?>
  </head>


  <body <?php body_class(); ?>>

    <!-- <?php include_once("analyticstracking.php") ?> -->
    <!-- call GA - add GA JS file-->

    <div class="page-container">


    <!--  SITE HEADER -->
    <!-- ================================================================ -->
    <header>

      <!-- Displays primary navigation -->
        <?php
          $defaults = array(
            'container' => false,
            'theme_location' => 'primary-menu', //tells wp where menu lives
            // 'menu_class' => 'nav col-sm-5 col-md-7'
          );

          wp_nav_menu( $defaults );
        ?>

    </header>
