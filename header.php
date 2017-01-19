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
      <div class="row">
        <div class="header-content-container">

          <div class="col-xs-6 header-logo">
            logo here
          </div>

          <nav class="col-xs-6">
            <!-- Displays primary navigation -->
            <?php
              $defaults = array(
                'container' => false,
                'theme_location' => 'primary-menu', //tells wp where menu lives
                'menu_class' => 'nav'
              );

              wp_nav_menu( $defaults );
            ?>
          </nav>

        </div>
      </div>
    </header>
