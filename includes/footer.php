<?php
// Shared site footer and scripts
?>
    <footer class="site-footer">
      <div class="site-footer__top">
        <div class="site-footer__inner">
          <h2 class="site-footer__title">Quick Links</h2>

          <div class="site-footer__grid">
            <nav class="site-footer__links" aria-label="Footer navigation">
              <ul class="site-footer__column">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="#">Vision &amp; Mission</a></li>
              </ul>
              <ul class="site-footer__column">
                <li><a href="#">Share Holders</a></li>
                <li><a href="#">Board of Directors</a></li>
                <li><a href="#">Management</a></li>
              </ul>
              <ul class="site-footer__column">
                <li><a href="#">The Four Point Plan</a></li>
                <li><a href="#">Special Initiatives</a></li>
                <li><a href="#">News &amp; Articles</a></li>
              </ul>
              <ul class="site-footer__column">
                <li><a href="#">Careers</a></li>
                <li><a href="contact-us.php">Contact Us</a></li>
                <li><a href="#">Facility Application Form</a></li>
              </ul>
            </nav>

            <div class="site-footer__contact">
              <a href="tel:+96822344000"
                ><i class="bi bi-telephone-fill"></i>+968 22344000</a
              >
              <a href="mailto:info@smefoman.com"
                ><i class="bi bi-envelope-fill"></i>info@smefoman.com</a
              >
              <span><i class="bi bi-clock-fill"></i>8:00am - 4:30pm</span>
            </div>

            <div class="site-footer__tools">
              <ul class="site-footer__social" aria-label="Social links">
                <li>
                  <a href="#" aria-label="Facebook"
                    ><i class="bi bi-facebook"></i
                  ></a>
                </li>
                <li>
                  <a href="#" aria-label="X"><i class="bi bi-twitter-x"></i></a>
                </li>
                <li>
                  <a href="#" aria-label="Instagram"
                    ><i class="bi bi-instagram"></i
                  ></a>
                </li>
              </ul>
              <form class="site-footer__search" role="search">
                <label class="visually-hidden" for="footerSearch">Search</label>
                <i class="bi bi-search" aria-hidden="true"></i>
                <input id="footerSearch" type="search" placeholder="Search" />
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="site-footer__bottom">
        Copyright &copy; 2017 SMEF . All rights reserved. Powered by ADventz
      </div>
    </footer>
    <!-- /footer -->

    <!-- Return to top — ring fills with scroll progress -->
    <a
      href="javascript:;"
      id="return-top"
      class="return-top"
      aria-label="Back to top"
    >
      <svg
        class="return-top__progress"
        viewBox="-1 -1 102 102"
        aria-hidden="true"
      >
        <path
          class="return-top__progress-track"
          d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
        />
        <path
          class="return-top__progress-fill"
          d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
        />
      </svg>
      <img src="assets/images/up-icon.svg" alt="Up" />
    </a>

    <!-- jQuery -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Swiper slider -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!-- Smooth Scroll -->
    <script src="https://unpkg.com/@studio-freight/lenis@1.0.39/dist/lenis.min.js"></script>
    <!-- Custom scroll -->
    <script src="assets/js/aos.js"></script>
    <!-- GSAP (preloader + scroll reveal) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <!-- Custom JS -->
    <script src="assets/js/main.js"></script>
    <script>
      // AOS animation
      AOS.init({
        duration: 900,
        easing: "ease-out-cubic",
        once: true,
      });
    </script>
  </body>
</html>
