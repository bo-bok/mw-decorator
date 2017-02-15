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
            a.2
          </div>
        </div>

        <!-- 2 -->
        <div class="services-content-section">
          <div class="services-img">
            <img class="service-circle-img" src="<?= get_template_directory_uri()?>/assets/wall-paint-swatch-effect.png" />
          </div>

          <div class="services-text">
            b.2
          </div>
        </div>

        <!-- 3 -->
        <div class="services-content-section">
          <div class="services-img">
            <img class="service-circle-img" src="<?= get_template_directory_uri()?>/assets/bookcase-hallway-kitchen.png" />
          </div>

          <div class="services-text">
            Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Aenean lacinia bibendum nulla sed consectetur. Maecenas faucibus mollis interdum. Curabitur blandit tempus porttitor. Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.

            Vestibulum id ligula porta felis euismod semper. Aenean lacinia bibendum nulla sed consectetur. Donec ullamcorper nulla non metus auctor fringilla. Donec ullamcorper nulla non metus auctor fringilla. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
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
