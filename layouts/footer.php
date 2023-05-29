

  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="section footer-top">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
          <img src="./assets/images/logo.jpg" alt="" srcset="" width="30%">
          </a>

          <p class="section-text">
            Duis cursus, mi quis viverra ornare, eros dolor interdum nulla utimp erdiet commodo diam libero vitae nibh
            et jus cursus
            id rutrum lore imperdiet ut sem vitae risus tristique posuere
          </p>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-google"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Company</p>
          </li>

          <li>
            <a href="#" class="footer-link">About Us</a>
          </li>

          <li>
            <a href="#" class="footer-link">Contact Us</a>
          </li>

          <li>
            <a href="#" class="footer-link">Core Services</a>
          </li>

          <li>
            <a href="#" class="footer-link">Our Team</a>
          </li>

          <li>
            <a href="#" class="footer-link">Pricing Plan</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Useful Links</p>
          </li>

          <li>
            <a href="#" class="footer-link">Contact Us</a>
          </li>

          <li>
            <a href="#" class="footer-link">Privacy Policy</a>
          </li>

          <li>
            <a href="#" class="footer-link">App Download</a>
          </li>

          <li>
            <a href="#" class="footer-link">How It Works</a>
          </li>

          <li>
            <a href="#" class="footer-link">Terms & Conditions</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Get In Touch</p>
          </li>

          <li class="footer-item">
            <ion-icon name="call-outline" aria-hidden="true"></ion-icon>

            <a href="tel:+12023459999" class="item-link"><?php echo $_SESSION['phone']; ?></a>
          </li>

          <li class="footer-item">
            <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>

            <a href="mailto:supportvast@gmail.com" class="item-link"><?php echo $_SESSION['email']; ?></a>
          </li>

          <li class="footer-item">
            <ion-icon name="map-outline" aria-hidden="true"></ion-icon>

            <address class="item-link address">
            <?php echo $_SESSION['address']; ?>
            </address>
          </li>

        </ul>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; <b><?php echo date('Y'); ?></b> All Rights Reserved by <a href="#" class="copyright-link"><?php echo $_SESSION['companyname'];?></a>.
        </p>

      </div>
    </div>

  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>