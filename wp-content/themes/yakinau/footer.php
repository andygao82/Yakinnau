      </div>
    </div>
    <footer id="footer" role="contentinfo">
      <div class="container">
        <div class="row">
          <div class="footer-logo">
            <img src="<?= get_template_directory_uri() . '/images/footer-logo.svg'?>" alt="Yakinau">
          </div>
          <div class="inner-wrapper">
            <div class="footer-menu-col">
              <h4>VISIT US</h4>
              <div class="details">
                G01 - 850 Whitehose Road <br> BOX Hill 3128
              </div>
              <a class="details" href="tel:0398988826">03 9898 8826</a>
              <a class="details" href="mailto:yakinau@yakinau.com.au">yakinau@yakinau.com.au</a>
            </div>
            <div class="footer-menu-col">
              <h4>Hours</h4>
              <div class="details">
                Mon Closed<br>
                Tue - Sun<br>
                Lunch 11:30 AM -- 3:00 PM<br>
                Dinner 5:30PM -- 9:00 PM
              </div>
            </div>
            <div class="footer-menu-col">
              <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="#">RESERVATION</a></li>
                <li><a href="#">TAKE AWAY MENU</a></li>
                <li><a href="#">FUNCTION</a></li>
                <li><a href="#">GET VOUCHERS</a></li>
              </ul>
            </div>
            <div class="footer-menu-col social-media">
              <a href="#" target="_blank">
                <img src="<?= get_template_directory_uri() . '/images/instagram.svg'?>" alt="Yakinau">
              </a>
              <a href="#" target="_blank">
                <img src="<?= get_template_directory_uri() . '/images/facebook.svg'?>" alt="Yakinau">
              </a>
            </div>
          </div>
        </div>
      </div>
      <div id="copyright">
        &copy; <?php echo esc_html( date_i18n( __( 'Y', 'blankslate' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?> All Right Reserved
      </div>
    </footer>
  </div>
  <?php wp_footer(); ?>
</body>
</html>