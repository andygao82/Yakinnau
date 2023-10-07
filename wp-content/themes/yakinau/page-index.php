<?php
  /*
  Template Name: Home Page
  Description: A Home page template.
  */
?>
<?php get_header(); ?>
<div class="section banner-section">
  <div class="container">
    <div class="row main-content inner-wrapper">
    </div>
    <div class="row bottom bottom-content">
      G01 - 850 Whitehorse Road Box Hill 3128<br>
      Mon Closed | Tue - Sun Lunch 11:30 am - 3pm Dinner 5:30 pm - 9pm
    </div>
  </div>
  <div class="section about-section" id="about">
    <div class="container">
      <div class="row">
        <div class="col detail-col">
          <div class="col-wrapper">
            <div class="image-wrapper">
              <img src="<?= get_field('bbq_image_1')?>" alt="Yakiniku Japanese Barbeque">
            </div>
            <div class="content-wrapper">
              <h3>Yakiniku<br>Japanese Barbeque</h3>
              <?= get_field('bbq_content')?>
            </div>
          </div>
        </div>
        <div class="col image-col">
          <div class="image-wrapper">
            <img src="<?= get_field('bbq_image_2')?>" alt="Yakiniku">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col detail-col">
          <div class="col-wrapper">
            <div class="image-wrapper">
              <img src="<?= get_field('dining_image_1')?>" alt="Japanese Modern Dining">
            </div>
            <div class="content-wrapper">
              <h3>Japanese<br>Modern Dining</h3>
              <?= get_field('dining_content')?>
            </div>
          </div>
        </div>
        <div class="col image-col">
          <div class="image-wrapper">
            <img src="<?= get_field('dining_image_2')?>" alt="Japanese Modern Dining">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col detail-col">
          <div class="col-wrapper">
            <div class="image-wrapper">
              <img src="<?= get_field('menu_image_1')?>" alt="View Seasonal Menu">
            </div>
            <div class="content-wrapper">
              <?= get_field('menu_content')?>
              <a class="button brown" href="#">View Seasonal Menu</a>
            </div>
          </div>
        </div>
        <div class="col image-col">
          <div class="image-wrapper">
            <img src="<?= get_field('menu_image_2')?>" alt="View Seasonal Menu">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section reservation-section" id="reservation">
    <div class="container">
      <div class="row">
        <div class="col content">
          <h2><?= get_field('reservation_heading')?></h2>
          <div class="text">
            <?= get_field('reservation_content')?>
          </div>
          <a class="button brown" href="#">Make a reservation</a>
        </div>
        <div class="col"></div>
      </div>
    </div>
  </div>
  <div class="section function-section" id="function">
    <div class="container">
      <div class="row">
        <div class="col content">
          <h2><?= get_field('function_heading')?></h2>
          <div class="text">
            <?= get_field('function_content')?>
          </div>
          <a class="button pink" href="mailto:yakinau@yakinau.com.au">Send Enquiry</a>
        </div>
        <div class="col"></div>
      </div>
    </div>
  </div>
  <div class="section order-section" id="order">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="buttons">
            <a href="#" class="button reservation-button" target="_blank">MAKE A RESERVATION</a>
            <span>OR</span>
            <a href="#" class="button reservation-button" target="_blank">ORDER TAKE AWAY</a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <a href="#" class="link" target="_blank">View our seasonal menu</a>
        </div>
      </div>    
    </div>
  </div>
</div>

<?php get_footer(); ?>