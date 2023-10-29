<?php
  /*
  Template Name: Home Page
  Description: A Home page template.
  */
?>
<?php get_header(); ?>
  <div class="section banner-section">
    <div class="main-content">
      <div class="container">
        <div class="inner-wrapper">
          <img class="banner-image" id="banner-img-1" src="<?= get_template_directory_uri() . '/images/top1.svg'?>" alt="Yakinau">
          <img class="banner-image" id="banner-img-2" src="<?= get_template_directory_uri() . '/images/top2.svg'?>" alt="Yakinau">
          <img class="banner-image" id="banner-img-3" src="<?= get_template_directory_uri() . '/images/top3.svg'?>" alt="Yakinau">
          <img class="banner-image" id="banner-img-4" src="<?= get_template_directory_uri() . '/images/beer.svg'?>" alt="Yakinau">
          <img class="banner-image" id="banner-img-5" src="<?= get_template_directory_uri() . '/images/top4.svg'?>" alt="Yakinau">
          <img class="banner-image" id="banner-img-6" src="<?= get_template_directory_uri() . '/images/mid1.svg'?>" alt="Yakinau">
          <img class="banner-image" id="banner-img-7" src="<?= get_template_directory_uri() . '/images/mid2.svg'?>" alt="Yakinau">
          <img class="banner-image" id="banner-img-8" src="<?= get_template_directory_uri() . '/images/bottom1.svg'?>" alt="Yakinau">
          <img class="banner-image" id="banner-img-9" src="<?= get_template_directory_uri() . '/images/flame.svg'?>" alt="Yakinau">
          <img class="banner-image" id="banner-img-10" src="<?= get_template_directory_uri() . '/images/bottom1.svg'?>" alt="Yakinau">
          <img class="banner-image" id="banner-img-11" src="<?= get_template_directory_uri() . '/images/last2.svg'?>" alt="Yakinau">
          <img class="banner-image" id="banner-img-12" src="<?= get_template_directory_uri() . '/images/last1.svg'?>" alt="Yakinau">
          <div class="banner-wrapper">
            <img class="banner-wrapper-image" src="<?= get_template_directory_uri() . '/images/tem.jpg'?>" alt="Yakinau">
            <a class="button pink" href="#">BOOK NOW</a>
            <a href="tel:03 9898 8826" class="link" target="_blank">Or call 03 9898 8826</a>
          </div>
        </div>
      </div>
    </div>
    <div class="bottom bottom-content">
      <?= get_field('address')?>
      <br>
      <?= get_field('opening_hours')?>
    </div>
  </div>
  <div class="section about-section" id="about">
    <div class="container">
      <div class="row">
        <div class="col detail-col glass-bg">
          <div class="col-wrapper">
            <div class="image-wrapper">
              <img src="<?= get_field('bbq_image')?>" alt="Yakiniku Japanese Barbeque">
            </div>
            <div class="content-wrapper">
              <h3>
                <span><?= get_field("bbq_heading")?></span>
                <span class="yellow-font"><?= get_field("bbq_sub_headin")?></span>
              </h3>
              <div class="content-content">
                <?= get_field('bbq_description')?>
              </div>
            </div>
          </div>
        </div>
        <div class="col image-col">
          <div class="image-col-wrapper">
            <img class="img-1" src="<?= get_template_directory_uri() . '/images/happy.svg'?>" alt="Yakiniku">
            <img class="img-2" src="<?= get_template_directory_uri() . '/images/top2.svg'?>" alt="Yakiniku">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col detail-col glass-bg">
          <div class="col-wrapper">
            <div class="image-wrapper">
              <img src="<?= get_field('dining_image')?>" alt="Japanese Modern Dining">
            </div>
            <div class="content-wrapper">
              <h3>
                <span class="yellow-font"><?= get_field("dining_heading")?></span>
                <span class="yellow-font"><?= get_field("dining_sub_heading")?></span>
              </h3>
              <div class="content-content">
                <?= get_field('dining__description')?>
              </div>
            </div>
          </div>
        </div>
        <div class="col image-col with-heading">
          <div class="image-col-wrapper">
            <h3 class="image-heading">PRIMIUM <span class="yellow-font">JAPANESE</span> DINING AND <span class="yellow-font">YAKINU</di> EXPERIENCE</h3>
            <img src="<?= get_template_directory_uri() . '/images/top4.svg'?>" alt="Japanese Modern Dining">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col detail-col">
          <div class="col-wrapper">
            <div class="image-wrapper">
              <img src="<?= get_field('menu_image')?>" alt="View Seasonal Menu">
            </div>
            <div class="content-wrapper">
              <div class="content-content">
                <?= get_field('menu_description')?>
              </div>
              <a class="button brown" href="#">View Seasonal Menu</a>
            </div>
          </div>
        </div>
        <div class="col image-col">
          <div class="image-col-wrapper">
            <img src="<?= get_template_directory_uri() . '/images/mid1.svg'?>" alt="Japanese Modern Dining">
            <span class="horizontal-heading">PREMIUM JAPANESE DINING AND <br>YAKINIKU EXPERIENCE</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section bottom-section reservation-section" id="reservation">
    <div class="container">
      <div class="row">
        <div class="col content">
          <div class="col-wrapper">
            <h2><?= get_field('drink_heading')?></h2>
            <div class="text">
              <?= get_field('drink_description')?>
            </div>
            <a class="button brown" href="#">Make a reservation</a>
          </div>
        </div>
        <div class="col"></div>
      </div>
    </div>
  </div>
  <div class="section bottom-section function-section" id="function">
    <div class="container">
      <div class="row">
        <div class="col"></div>
        <div class="col content">
          <div class="col-wrapper">
            <h2><?= get_field('function_heading')?></h2>
            <div class="text">
              <?= get_field('function_description')?>
            </div>
            <a class="button pink" href="mailto:yakinau@yakinau.com.au">Send Enquiry</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section order-section" id="order">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="col-wrapper">
            <div class="buttons">
              <a href="#" class="button reservation-button" target="_blank">MAKE A RESERVATION</a>
              <span>OR</span>
              <a href="#" class="button reservation-button" target="_blank">ORDER TAKE AWAY</a>
            </div>
            <a href="#" class="link" target="_blank">View our seasonal menu</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>