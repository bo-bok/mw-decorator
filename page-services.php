<?php
  /*
    Template Name: Services Page
  */
get_header(); ?>

<div class="page-container">

  <div class="page-banner-img"></div>

  <div class="body-content-container">
    <div class="content-container">

      <div class="page-header-text">
        services
      </div>

      <div class="page-blurb">
        Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec sed odio dui.
      </div>

      <div class="services-content-container">

        <!-- 1 -->
        <div class="services-content-section">
          <div class="services-img">
            <img class="service-circle-img" src="<?= get_template_directory_uri()?>/assets/sofa-magazine-closeup.png" />
          </div>

          <div class="services-text">
            Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam quis risus eget urna mollis ornare vel eu leo. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
          </div>
        </div>

        <!-- 2 -->
        <div class="services-content-section">
          <div class="services-img">
            <img class="service-circle-img" src="<?= get_template_directory_uri()?>/assets/wall-paint-swatch-effect.png" />
          </div>

          <div class="services-text">
            Donec ullamcorper nulla non metus auctor fringilla. Nullam quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
          </div>
        </div>

        <!-- 3 -->
        <div class="services-content-section">
          <div class="services-img">
            <img class="service-circle-img" src="<?= get_template_directory_uri()?>/assets/bookcase-hallway-kitchen.png" />
          </div>

          <div class="services-text">
            Donec id elit non mi porta gravida at eget metus. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Donec id elit non mi porta gravida at eget metus.
          </div>
        </div>

      </div>

    </div>
  </div>


  <div class="testimonial-section">
    <div class="banner-content-container">

      <div class="testimonial-container-table-row">
        <div class="testimonial-container">
          <div class="testimonial-inner">

          <div id="testimonial-slide">
          </div>

          </div>
        </div>
      </div>

    </div>
  </div>

</div>

<?php get_footer(); ?>
