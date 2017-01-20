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
      <!-- <div class="header-styles"> -->
        <div class="header-content-container">
          <div class="header-outer-inner">
            <div class="header-inner">

              <div class="header-logo">
                a
              </div>

              <div class="header-info">
                <div class="header-info-name">
                  b
                </div>

                <div class="header-info-number">
                  c
                </div>

              </div>


              <nav>
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




              <!-- <nav>
                <?php
                  $defaults = array(
                    'container' => false,
                    'theme_location' => 'primary-menu', //tells wp where menu lives
                    // 'menu_class' => 'nav'
                  );

                  wp_nav_menu( $defaults );
                ?>
              </nav> -->


            </div>
          </div>
        </div>
      <!-- </div> -->
    </header>
