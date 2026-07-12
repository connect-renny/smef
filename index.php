<?php
$pageTitle = 'SME Development Fund';
$activePage = 'home';
include __DIR__ . "/includes/head.php";
include __DIR__ . "/includes/header.php";
?>
    <main>
      <!-- ═══════════════════════════ HERO ═════════════════════════════════════ -->
      <section class="hero">
        <div class="hero__bg">
          <img src="assets/images/hero-slider-01.jpg" alt="" />
          <!-- Full-colour copy revealed in a spotlight around the cursor
               (mask driven from main.js) -->
          <img
            src="assets/images/hero-slider-01.jpg"
            alt=""
            class="hero__bg-color"
            aria-hidden="true"
          />
        </div>

        <!-- Growth arrows — animated in after the preloader (see main.js) -->
        <div class="hero__arrows" aria-hidden="true">
          <img src="assets/images/red line.svg" alt="" />
        </div>

        <div class="hero__inner">
          <div class="hero__panel" aria-hidden="true"></div>
          <div class="hero__content">
            <h1 class="hero__title">
              Supporting Omani Entrepreneurs, Building Sustainable Businesses
            </h1>
            <p class="hero__subtitle">
              Empowering ideas through funding, development, and guidance
            </p>
            <a href="#" class="btn-hero">
              <span class="btn-hero__label">Learn More</span>
              <span class="btn-hero__icon">
                <i class="bi bi-chevron-right"></i>
              </span>
            </a>
          </div>
        </div>
      </section>
      <!-- /hero -->

      <!-- ═══════════════════════════ INTRO / WELCOME ═════════════════════════ -->
      <section class="intro">
        <div class="container">
          <h2 class="intro__title" data-aos="fade-up">
            Welcome to SME Development Fund
          </h2>
          <p class="intro__text" data-aos="fade-up" data-aos-delay="150">
            The <strong>SME Development Fund (SMEF)</strong> supports the growth
            of small and medium enterprises across the Sultanate of Oman.
            Through structured financing, development programs, and advisory
            support, SMEF works closely with entrepreneurs to build sustainable
            and successful businesses.
          </p>
        </div>
      </section>
      <!-- /intro -->

      <!-- ═══════════════════════════ FEATURED ════════════════════════════════ -->
      <section class="featured">
        <div class="container">
          <!-- Featured Product — image left, text right -->
          <div class="featured__row row align-items-center">
            <div class="col-12 featured__col--media">
              <div class="featured__media reveal__pic">
                <img
                  src="assets/images/featured-product.jpg"
                  alt="SMEF advisors reviewing financing documents with an entrepreneur"
                />
              </div>
            </div>
            <div class="col-12 featured__col--text">
              <div class="featured__body" data-aos="fade-up">
                <div class="featured__content">
                  <span class="featured__label">[ Featured Product ]</span>
                  <h2 class="featured__title">
                    Financing Solutions<br class="d-none d-lg-inline" />
                    for Growing Businesses
                  </h2>
                  <p class="featured__text">
                    SMEF offers tailored financing solutions designed to support
                    entrepreneurs at different stages of their business journey,
                    helping them expand, innovate, and achieve long-term
                    sustainability.
                  </p>
                  <a href="#" class="btn-outline">
                    <span class="btn-outline__label">View Products</span>
                    <span class="btn-outline__icon">
                      <i class="bi bi-chevron-right"></i>
                    </span>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Featured Services — text left, image right -->
          <div
            class="featured__row featured__row--reverse row align-items-center flex-lg-row-reverse"
          >
            <div class="col-12 featured__col--media">
              <div class="featured__media reveal__pic">
                <img
                  src="assets/images/featured-services.jpg"
                  alt="SMEF staff assisting a business owner at a desk"
                />
              </div>
            </div>
            <div class="col-12 featured__col--text">
              <div class="featured__body" data-aos="fade-up">
                <div class="featured__content">
                  <span class="featured__label">[ Featured Services ]</span>
                  <h2 class="featured__title">
                    Supporting Businesses<br class="d-none d-lg-inline" />
                    Beyond Funding
                  </h2>
                  <p class="featured__text">
                    In addition to financing, SMEF provides advisory services,
                    training programs, and ongoing support to help entrepreneurs
                    strengthen their operations and achieve sustainable growth.
                  </p>
                  <a href="#" class="btn-outline">
                    <span class="btn-outline__label">View Services</span>
                    <span class="btn-outline__icon">
                      <i class="bi bi-chevron-right"></i>
                    </span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /featured -->

      <!-- ═══════════════════════ FEATURED SUCCESS STORY ══════════════════════ -->
      <section class="success">
        <div class="success__bg">
          <img
            src="assets/images/featured-success.jpg"
            alt="Business owner using a tablet in his bakery"
          />
          <!-- Full-colour copy revealed in a spotlight around the cursor
               (mask driven from main.js) -->
          <img
            src="assets/images/featured-success.jpg"
            alt=""
            class="success__bg-color"
            aria-hidden="true"
          />
        </div>
        <div class="container">
          <div class="success__panel" aria-hidden="true"></div>
          <div class="success__content" data-aos="fade-up">
            <span class="success__label">[ Featured Success Story ]</span>
            <blockquote class="success__quote">
              &ldquo;Inma has made my business idea into a reality in just 6
              month!&rdquo;
            </blockquote>
            <p class="success__author">
              Mr. Name of Client Here<br />
              Business Owner - ArtyBakes Cake Shop
            </p>
            <a href="#" class="btn-outline btn-outline--light">
              <span class="btn-outline__label">Learn All Testimonials</span>
              <span class="btn-outline__icon">
                <i class="bi bi-chevron-right"></i>
              </span>
            </a>
          </div>
        </div>
      </section>
      <!-- /success -->

      <!-- ═══════════════════════ LATEST NEWS & UPDATES ═══════════════════════ -->
      <section class="news">
        <div class="container">
          <div class="news__head" data-aos="fade-up">
            <h2 class="news__title">Latest News &amp; Updates</h2>
            <p class="news__subtitle">
              Stay informed with SMEF&rsquo;s latest initiatives, programs, and
              activities.
            </p>
          </div>

          <div class="swiper news-swiper" data-aos="fade-up">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <article class="news-card">
                  <div class="news-card__body">
                    <h3 class="news-card__title">Event Name Placed Here</h3>
                    <p class="news-card__text">
                      This is sample text only using the same font style and
                      type size.
                    </p>
                  </div>
                  <div class="news-card__media">
                    <img
                      src="assets/images/news-thumb-01.jpg"
                      alt="News event"
                    />
                  </div>
                  <a href="#" class="news-card__cta">
                    <span class="news-card__cta-label">Learn More</span>
                    <span class="news-card__cta-icon">
                      <i class="bi bi-chevron-right"></i>
                    </span>
                  </a>
                </article>
              </div>
              <div class="swiper-slide">
                <article class="news-card">
                  <div class="news-card__body">
                    <h3 class="news-card__title">Event Name Placed Here</h3>
                    <p class="news-card__text">
                      This is sample text only using the same font style and
                      type size.
                    </p>
                  </div>
                  <div class="news-card__media">
                    <img
                      src="assets/images/news-thumb-02.jpg"
                      alt="News event"
                    />
                  </div>
                  <a href="#" class="news-card__cta">
                    <span class="news-card__cta-label">Learn More</span>
                    <span class="news-card__cta-icon">
                      <i class="bi bi-chevron-right"></i>
                    </span>
                  </a>
                </article>
              </div>
              <div class="swiper-slide">
                <article class="news-card">
                  <div class="news-card__body">
                    <h3 class="news-card__title">Event Name Placed Here</h3>
                    <p class="news-card__text">
                      This is sample text only using the same font style and
                      type size.
                    </p>
                  </div>
                  <div class="news-card__media">
                    <img
                      src="assets/images/news-thumb-03.jpg"
                      alt="News event"
                    />
                  </div>
                  <a href="#" class="news-card__cta">
                    <span class="news-card__cta-label">Learn More</span>
                    <span class="news-card__cta-icon">
                      <i class="bi bi-chevron-right"></i>
                    </span>
                  </a>
                </article>
              </div>
              <div class="swiper-slide">
                <article class="news-card">
                  <div class="news-card__body">
                    <h3 class="news-card__title">Event Name Placed Here</h3>
                    <p class="news-card__text">
                      This is sample text only using the same font style and
                      type size.
                    </p>
                  </div>
                  <div class="news-card__media">
                    <img
                      src="assets/images/news-thumb-04.jpg"
                      alt="News event"
                    />
                  </div>
                  <a href="#" class="news-card__cta">
                    <span class="news-card__cta-label">Learn More</span>
                    <span class="news-card__cta-icon">
                      <i class="bi bi-chevron-right"></i>
                    </span>
                  </a>
                </article>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /news -->

      <!-- ═══════════════════════ FREQUENTLY ASKED QUESTIONS ══════════════════ -->
      <section class="faq">
        <div class="container">
          <div class="faq__head" data-aos="fade-up">
            <h2 class="faq__title">Frequently Asked Questions</h2>
            <p class="faq__subtitle">
              Find answers to commonly asked questions about SME Development
              Fund (SMEF), including our products, services, and how we support
              entrepreneurs across Oman.
            </p>
          </div>

          <div class="accordion faq__list" id="faqAccordion" data-aos="fade-up">
            <div class="accordion-item faq__item">
              <h3 class="accordion-header">
                <button
                  class="accordion-button faq__q collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#faqCollapse1"
                  aria-expanded="false"
                  aria-controls="faqCollapse1"
                >
                  What is the SME Development Fund (SMEF)?
                  <span class="faq__icon" aria-hidden="true"></span>
                </button>
              </h3>
              <div
                id="faqCollapse1"
                class="accordion-collapse collapse"
                data-bs-parent="#faqAccordion"
              >
                <div class="accordion-body faq__a">
                  <p>
                    The SME Development Fund (SMEF) is an Omani fund dedicated
                    to empowering entrepreneurs and supporting the growth of
                    small and medium enterprises across the Sultanate through
                    financing, development programs, and advisory support.
                  </p>
                </div>
              </div>
            </div>

            <div class="accordion-item faq__item">
              <h3 class="accordion-header">
                <button
                  class="accordion-button faq__q collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#faqCollapse2"
                  aria-expanded="false"
                  aria-controls="faqCollapse2"
                >
                  Who can apply for SMEF support?
                  <span class="faq__icon" aria-hidden="true"></span>
                </button>
              </h3>
              <div
                id="faqCollapse2"
                class="accordion-collapse collapse"
                data-bs-parent="#faqAccordion"
              >
                <div class="accordion-body faq__a">
                  <p>
                    Omani entrepreneurs and registered small and medium
                    enterprises looking to start, expand, or strengthen their
                    businesses can apply for SMEF support.
                  </p>
                </div>
              </div>
            </div>

            <div class="accordion-item faq__item">
              <h3 class="accordion-header">
                <button
                  class="accordion-button faq__q collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#faqCollapse3"
                  aria-expanded="false"
                  aria-controls="faqCollapse3"
                >
                  What types of support does SMEF provide?
                  <span class="faq__icon" aria-hidden="true"></span>
                </button>
              </h3>
              <div
                id="faqCollapse3"
                class="accordion-collapse collapse"
                data-bs-parent="#faqAccordion"
              >
                <div class="accordion-body faq__a">
                  <p>
                    SMEF provides tailored financing, development programs,
                    training, and ongoing advisory services designed to support
                    businesses at every stage of their journey.
                  </p>
                </div>
              </div>
            </div>

            <div class="accordion-item faq__item">
              <h3 class="accordion-header">
                <button
                  class="accordion-button faq__q collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#faqCollapse4"
                  aria-expanded="false"
                  aria-controls="faqCollapse4"
                >
                  Does SMEF only provide funding?
                  <span class="faq__icon" aria-hidden="true"></span>
                </button>
              </h3>
              <div
                id="faqCollapse4"
                class="accordion-collapse collapse"
                data-bs-parent="#faqAccordion"
              >
                <div class="accordion-body faq__a">
                  <p>
                    No. Beyond funding, SMEF offers advisory services, training
                    programs, and continuous support to help entrepreneurs build
                    sustainable and successful businesses.
                  </p>
                </div>
              </div>
            </div>

            <div class="accordion-item faq__item">
              <h3 class="accordion-header">
                <button
                  class="accordion-button faq__q collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#faqCollapse5"
                  aria-expanded="false"
                  aria-controls="faqCollapse5"
                >
                  How can I apply for SMEF programs or financing?
                  <span class="faq__icon" aria-hidden="true"></span>
                </button>
              </h3>
              <div
                id="faqCollapse5"
                class="accordion-collapse collapse"
                data-bs-parent="#faqAccordion"
              >
                <div class="accordion-body faq__a">
                  <p>
                    You can apply through our facility application form or by
                    contacting our team directly, who will guide you through the
                    requirements and process.
                  </p>
                </div>
              </div>
            </div>

            <div class="accordion-item faq__item">
              <h3 class="accordion-header">
                <button
                  class="accordion-button faq__q collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#faqCollapse6"
                  aria-expanded="false"
                  aria-controls="faqCollapse6"
                >
                  What sectors does SMEF support?
                  <span class="faq__icon" aria-hidden="true"></span>
                </button>
              </h3>
              <div
                id="faqCollapse6"
                class="accordion-collapse collapse"
                data-bs-parent="#faqAccordion"
              >
                <div class="accordion-body faq__a">
                  <p>
                    SMEF supports a wide range of sectors across the Omani
                    economy, prioritising enterprises with strong growth
                    potential and lasting economic impact.
                  </p>
                </div>
              </div>
            </div>

            <div class="accordion-item faq__item">
              <h3 class="accordion-header">
                <button
                  class="accordion-button faq__q collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#faqCollapse7"
                  aria-expanded="false"
                  aria-controls="faqCollapse7"
                >
                  Is there a minimum or maximum funding amount?
                  <span class="faq__icon" aria-hidden="true"></span>
                </button>
              </h3>
              <div
                id="faqCollapse7"
                class="accordion-collapse collapse"
                data-bs-parent="#faqAccordion"
              >
                <div class="accordion-body faq__a">
                  <p>
                    Funding amounts vary based on the business stage, sector,
                    and needs. Our team will help determine the most suitable
                    option for your enterprise.
                  </p>
                </div>
              </div>
            </div>

            <div class="accordion-item faq__item">
              <h3 class="accordion-header">
                <button
                  class="accordion-button faq__q collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#faqCollapse8"
                  aria-expanded="false"
                  aria-controls="faqCollapse8"
                >
                  How long does the application process take?
                  <span class="faq__icon" aria-hidden="true"></span>
                </button>
              </h3>
              <div
                id="faqCollapse8"
                class="accordion-collapse collapse"
                data-bs-parent="#faqAccordion"
              >
                <div class="accordion-body faq__a">
                  <p>
                    Processing time depends on the program and completeness of
                    your application. Our team works to review and respond as
                    efficiently as possible.
                  </p>
                </div>
              </div>
            </div>

            <div class="accordion-item faq__item">
              <h3 class="accordion-header">
                <button
                  class="accordion-button faq__q collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#faqCollapse9"
                  aria-expanded="false"
                  aria-controls="faqCollapse9"
                >
                  How can I contact SMEF for more information?
                  <span class="faq__icon" aria-hidden="true"></span>
                </button>
              </h3>
              <div
                id="faqCollapse9"
                class="accordion-collapse collapse"
                data-bs-parent="#faqAccordion"
              >
                <div class="accordion-body faq__a">
                  <p>
                    You can reach us by phone at +968 22344000, by email at
                    info@smefoman.com, or by visiting our head office in Muscat
                    during working hours.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /faq -->

      <!-- CONTACT US -->
      <section class="contact-design">
        <div class="contact-design__inner">
          <h2 class="contact-design__title">Contact Us</h2>

          <div class="contact-design__row">
            <div class="contact-design__brand" aria-hidden="true">
              <img src="assets/images/smef-logo.png" alt="" />
            </div>

            <div class="contact-design__details">
              <address class="contact-design__address">
                <strong>Head Office</strong>
                SME Development Fund<br />
                PO BOX 119, PC 103<br />
                Sultanate of Oman<br />
                Fifth Floor, Block V<br />
                Panorama Mall, Al Ghubrah<br />
                Tel: +968 22344000<br />
                E-mail: info@smefoman.com
              </address>

              <address class="contact-design__address">
                <strong>Salalah Branch</strong>
                Mohammed Shabbir Akhter:<br />
                90160987 Tel: 23292419
              </address>

              <address class="contact-design__address">
                <strong>Sohar Branch</strong>
                Ali Al Farsi:<br />
                96096175
              </address>
            </div>

            <div
              class="contact-design__map"
              aria-label="SME Development Fund map location"
            >
              <iframe
                title="SME Development Fund location map"
                src="https://www.google.com/maps?q=Panorama%20Mall%20Al%20Ghubrah%20Muscat%20Oman&output=embed"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div>
          </div>
        </div>
      </section>
      <!-- /contact-design -->
    </main>

    
<?php include __DIR__ . "/includes/footer.php"; ?>
