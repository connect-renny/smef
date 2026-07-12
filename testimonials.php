<?php
$pageTitle = 'Testimonials — SME Development Fund';
$activePage = 'testimonials';
include __DIR__ . "/includes/head.php";
include __DIR__ . "/includes/header.php";
?>
    <main>
      <!-- ═══════════════════════════ HERO ═════════════════════════════════════ -->
      <section class="testimonials-hero">
        <div class="testimonials-hero__bg">
          <img src="assets/images/hero-testimonials-us.jpg" alt="" />
          <!-- Full-colour copy revealed in a spotlight around the cursor
               (mask driven from main.js) -->
          <img
            src="assets/images/hero-testimonials-us.jpg"
            alt=""
            class="testimonials-hero__bg-color"
            aria-hidden="true"
          />
        </div>

        <div class="testimonials-hero__inner">
          <div class="testimonials-hero__panel" aria-hidden="true"></div>
          <div class="testimonials-hero__content">
            <h1 class="testimonials-hero__title">
              Real stories from entrepreneurs supported by SME Development Fund
            </h1>
          </div>
        </div>
      </section>
      <!-- /hero -->

      <!-- ═══════════════════════════ TESTIMONIALS ═════════════════════════════ -->
      <section class="testi">
        <div class="container">
          <h2 class="testi__title" data-aos="fade-up">
            SME Development Fund Services
          </h2>
          <p class="testi__intro" data-aos="fade-up" data-aos-delay="150">
            Discover how SMEF has supported entrepreneurs and small businesses
            across Oman. These stories reflect the experiences of individuals
            and companies who have benefited from SMEF&rsquo;s financing,
            programs, and advisory support.
          </p>
        </div>

        <!-- Profile thumbnails — clicking one shows its testimonial -->
        <div class="swiper testi-thumbs">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testi-card">
                <div class="testi-card__media">
                  <img src="assets/images/testi-thumb-01.jpg" alt="Name of Client" />
                </div>
                <div class="testi-card__body">
                  <h3 class="testi-card__name">Name of Client</h3>
                  <p class="testi-card__type">Business Type</p>
                  <p class="testi-card__years">X years SMEF Client</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testi-card">
                <div class="testi-card__media">
                  <img src="assets/images/testi-thumb-02.jpg" alt="Name of Client" />
                </div>
                <div class="testi-card__body">
                  <h3 class="testi-card__name">Name of Client</h3>
                  <p class="testi-card__type">Business Type</p>
                  <p class="testi-card__years">X years SMEF Client</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testi-card">
                <div class="testi-card__media">
                  <img src="assets/images/testi-thumb-03.jpg" alt="Name of Client" />
                </div>
                <div class="testi-card__body">
                  <h3 class="testi-card__name">Name of Client</h3>
                  <p class="testi-card__type">Business Type</p>
                  <p class="testi-card__years">X years SMEF Client</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testi-card">
                <div class="testi-card__media">
                  <img src="assets/images/testi-thumb-04.jpg" alt="Name of Client" />
                </div>
                <div class="testi-card__body">
                  <h3 class="testi-card__name">Name of Client</h3>
                  <p class="testi-card__type">Business Type</p>
                  <p class="testi-card__years">X years SMEF Client</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testi-card">
                <div class="testi-card__media">
                  <img src="assets/images/testi-thumb-05.jpg" alt="Name of Client" />
                </div>
                <div class="testi-card__body">
                  <h3 class="testi-card__name">Name of Client</h3>
                  <p class="testi-card__type">Business Type</p>
                  <p class="testi-card__years">X years SMEF Client</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testi-card">
                <div class="testi-card__media">
                  <img src="assets/images/testi-thumb-06.jpg" alt="Name of Client" />
                </div>
                <div class="testi-card__body">
                  <h3 class="testi-card__name">Name of Client</h3>
                  <p class="testi-card__type">Business Type</p>
                  <p class="testi-card__years">X years SMEF Client</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Big testimonial slide (synced to the active thumb) -->
        <div class="swiper testi-main">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <figure class="testi-quote">
                <div class="testi-quote__bg">
                  <img src="assets/images/testi-large-01.jpg" alt="" />
                </div>
                <figcaption class="testi-quote__body">
                  <p class="testi-quote__text">
                    <span class="testi-quote__mark">&ldquo;</span>SMEF provided us
                    with the support we needed to grow our business with
                    confidence. The guidance and financing helped us take the
                    next step forward.<span class="testi-quote__mark testi-quote__mark--close">&rdquo;</span>
                  </p>
                  <span class="testi-quote__name">Name of Client Here</span>
                  <p class="testi-quote__role">
                    Business Owner,<br />XYZ Office Supplies
                  </p>
                </figcaption>
              </figure>
            </div>
            <div class="swiper-slide">
              <figure class="testi-quote">
                <div class="testi-quote__bg">
                  <img src="assets/images/testi-large-01.jpg" alt="" />
                </div>
                <figcaption class="testi-quote__body">
                  <p class="testi-quote__text">
                    <span class="testi-quote__mark">&ldquo;</span>SMEF provided us
                    with the support we needed to grow our business with
                    confidence. The guidance and financing helped us take the
                    next step forward.<span class="testi-quote__mark testi-quote__mark--close">&rdquo;</span>
                  </p>
                  <span class="testi-quote__name">Name of Client Here</span>
                  <p class="testi-quote__role">
                    Business Owner,<br />XYZ Office Supplies
                  </p>
                </figcaption>
              </figure>
            </div>
            <div class="swiper-slide">
              <figure class="testi-quote">
                <div class="testi-quote__bg">
                  <img src="assets/images/testi-large-01.jpg" alt="" />
                </div>
                <figcaption class="testi-quote__body">
                  <p class="testi-quote__text">
                    <span class="testi-quote__mark">&ldquo;</span>SMEF provided us
                    with the support we needed to grow our business with
                    confidence. The guidance and financing helped us take the
                    next step forward.<span class="testi-quote__mark testi-quote__mark--close">&rdquo;</span>
                  </p>
                  <span class="testi-quote__name">Name of Client Here</span>
                  <p class="testi-quote__role">
                    Business Owner,<br />XYZ Office Supplies
                  </p>
                </figcaption>
              </figure>
            </div>
            <div class="swiper-slide">
              <figure class="testi-quote">
                <div class="testi-quote__bg">
                  <img src="assets/images/testi-large-01.jpg" alt="" />
                </div>
                <figcaption class="testi-quote__body">
                  <p class="testi-quote__text">
                    <span class="testi-quote__mark">&ldquo;</span>SMEF provided us
                    with the support we needed to grow our business with
                    confidence. The guidance and financing helped us take the
                    next step forward.<span class="testi-quote__mark testi-quote__mark--close">&rdquo;</span>
                  </p>
                  <span class="testi-quote__name">Name of Client Here</span>
                  <p class="testi-quote__role">
                    Business Owner,<br />XYZ Office Supplies
                  </p>
                </figcaption>
              </figure>
            </div>
            <div class="swiper-slide">
              <figure class="testi-quote">
                <div class="testi-quote__bg">
                  <img src="assets/images/testi-large-01.jpg" alt="" />
                </div>
                <figcaption class="testi-quote__body">
                  <p class="testi-quote__text">
                    <span class="testi-quote__mark">&ldquo;</span>SMEF provided us
                    with the support we needed to grow our business with
                    confidence. The guidance and financing helped us take the
                    next step forward.<span class="testi-quote__mark testi-quote__mark--close">&rdquo;</span>
                  </p>
                  <span class="testi-quote__name">Name of Client Here</span>
                  <p class="testi-quote__role">
                    Business Owner,<br />XYZ Office Supplies
                  </p>
                </figcaption>
              </figure>
            </div>
            <div class="swiper-slide">
              <figure class="testi-quote">
                <div class="testi-quote__bg">
                  <img src="assets/images/testi-large-01.jpg" alt="" />
                </div>
                <figcaption class="testi-quote__body">
                  <p class="testi-quote__text">
                    <span class="testi-quote__mark">&ldquo;</span>SMEF provided us
                    with the support we needed to grow our business with
                    confidence. The guidance and financing helped us take the
                    next step forward.<span class="testi-quote__mark testi-quote__mark--close">&rdquo;</span>
                  </p>
                  <span class="testi-quote__name">Name of Client Here</span>
                  <p class="testi-quote__role">
                    Business Owner,<br />XYZ Office Supplies
                  </p>
                </figcaption>
              </figure>
            </div>
          </div>
        </div>
      </section>
      <!-- /testimonials -->

      <!-- ═══════════════════ SUPPORTED BY SMEF SINCE 2018 ═════════════════════ -->
      <section class="testi-supported">
        <div class="container">
          <div class="testi-supported__grid">
            <h2 class="testi-supported__title" data-aos="fade-up">
              Supported by<br />SME Development Fund<br />since 2018
            </h2>

            <div class="testi-supported__col" data-aos="fade-up">
              <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nos
              </p>
              <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nos
              </p>
            </div>

            <div class="testi-supported__col" data-aos="fade-up">
              <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nos.
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                diam nonummy nibh euismod tincidunt.
              </p>
              <p>
                Ut wisi enim ad minim veniam, quis nostrud exerci tation
                ullamcorper suscipit lobortis
              </p>
            </div>

            <div class="testi-supported__col" data-aos="fade-up">
              <p>
                nisl ut aliquip ex ea commodo consequat. Duis autem vel eum
                iriure dolor in hendrerit in vulputate velit esse molestie
                consequat, vel illum dolore eu feugiat.
              </p>
              <p>
                Nulla facilisis at vero eros et accumsan et iusto odio dignissim
                qui blandit praesent luptatum zzril delenit augue duis dolore te
                feugait nulla facilisi.
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- /testi-supported -->

      <!-- ═══════════════════════════ APPLY CTA ════════════════════════════════ -->
      <section class="testi-cta">
        <div class="container">
          <h2 class="testi-cta__title" data-aos="fade-up">
            Be one of our successful clientele!
          </h2>
          <p class="testi-cta__text" data-aos="fade-up" data-aos-delay="150">
            SMEF remains committed to supporting entrepreneurs and contributing
            to the growth of a strong and sustainable SME sector in Oman..
          </p>
          <a href="#" class="testi-cta__btn" data-aos="fade-up" data-aos-delay="200">
            Click to Apply
          </a>
        </div>
      </section>
      <!-- /testi-cta -->
    </main>

    
<?php include __DIR__ . "/includes/footer.php"; ?>
