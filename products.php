<?php
$pageTitle = 'SMEF Products — SME Development Fund';
$activePage = 'products';
include __DIR__ . "/includes/head.php";
include __DIR__ . "/includes/header.php";
?>
    <main>
      <!-- ═══════════════════════════ HERO ═════════════════════════════════════ -->
      <section class="products-hero">
        <div class="products-hero__bg">
          <img src="assets/images/hero-products.jpg" alt="" />
          <!-- Full-colour copy revealed in a spotlight around the cursor
               (mask driven from main.js) -->
          <img
            src="assets/images/hero-products.jpg"
            alt=""
            class="products-hero__bg-color"
            aria-hidden="true"
          />
        </div>

        <div class="products-hero__inner">
          <div class="products-hero__panel" aria-hidden="true"></div>
          <div class="products-hero__content">
            <h1 class="products-hero__title">
              Financing solutions designed to support businesses at every stage
              of growth
            </h1>
          </div>
        </div>
      </section>
      <!-- /hero -->

      <!-- ═══════════════════════ SME DEVELOPMENT FUND PRODUCTS ════════════════ -->
      <section class="products-intro">
        <div class="container">
          <h2 class="products-intro__title" data-aos="fade-up">
            SME Development Fund Products
          </h2>
          <p
            class="products-intro__text"
            data-aos="fade-up"
            data-aos-delay="150"
          >
            SMEF offers a range of financing products designed to support
            entrepreneurs and small and medium enterprises across different
            stages of their business journey. Each product is structured to
            address specific business needs while promoting sustainable growth
            and long-term success.
          </p>
          <p
            class="products-intro__text"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <strong>SME Development Fund</strong> products are designed to
            support businesses through the following key stages of development:
          </p>
        </div>
      </section>
      <!-- /products-intro -->

      <!-- ═══════════════════════════ PRODUCT STAGES ═══════════════════════════ -->
      <section class="products-stages">
        <!-- Entrepreneurial Development -->
        <article class="products-stage" data-aos="fade-up">
          <div class="products-stage__media">
            <div class="reveal__pic products-stage__pic">
              <img
                src="assets/images/product-entrepreneurial.jpg"
                alt="Young entrepreneurs reviewing business material"
              />
            </div>
          </div>
          <div class="products-stage__body">
            <h3 class="products-stage__title">
              Entrepreneurial<br />Development
            </h3>
            <p class="products-stage__text">
              Supporting early-stage entrepreneurs in developing viable business
              ideas and building strong foundations.
            </p>
            <a
              href="product-entrepreneurial-development.php"
              class="products-stage__btn"
            >
              Learn More <i class="bi bi-arrow-right-circle"></i>
            </a>
          </div>
        </article>

        <!-- Financing (featured / red) -->
        <article
          id="financing"
          class="products-stage products-stage--reverse products-stage--featured"
          data-aos="fade-up"
        >
          <div class="products-stage__media">
            <div class="reveal__pic products-stage__pic">
              <img
                src="assets/images/product-financing.jpg"
                alt="Florists arranging flowers in a small business"
              />
            </div>
          </div>
          <div class="products-stage__body">
            <h3 class="products-stage__title">Financing</h3>
            <p class="products-stage__text">
              Providing structured financial support to help businesses start,
              grow, and expand with confidence.
            </p>
            <a href="#" class="products-stage__btn">
              Learn More <i class="bi bi-arrow-right-circle"></i>
            </a>
          </div>
        </article>

        <!-- Nurturing -->
        <article id="nurturing" class="products-stage" data-aos="fade-up">
          <div class="products-stage__media">
            <div class="reveal__pic products-stage__pic">
              <img
                src="assets/images/product-nurturing.jpg"
                alt="Attendees at an SMEF business development session"
              />
            </div>
          </div>
          <div class="products-stage__body">
            <h3 class="products-stage__title">Nurturing</h3>
            <p class="products-stage__text">
              Strengthening business capabilities through guidance, support, and
              continuous development.
            </p>
            <a href="#" class="products-stage__btn">
              Learn More <i class="bi bi-arrow-right-circle"></i>
            </a>
          </div>
        </article>

        <!-- Legitimizing -->
        <article
          id="legitimizing"
          class="products-stage products-stage--reverse"
          data-aos="fade-up"
        >
          <div class="products-stage__media">
            <div class="reveal__pic products-stage__pic">
              <img
                src="assets/images/product-legitimizing.jpg"
                alt="Business owners at a formalization event"
              />
            </div>
          </div>
          <div class="products-stage__body">
            <h3 class="products-stage__title">Legitimizing</h3>
            <p class="products-stage__text">
              Supporting businesses in formalizing operations and aligning with
              regulatory and operational requirements.
            </p>
            <a href="#" class="products-stage__btn">
              Learn More <i class="bi bi-arrow-right-circle"></i>
            </a>
          </div>
        </article>
      </section>
      <!-- /products-stages -->

      <!-- ═══════════════════ ELIGIBILITY & APPLICATION PROCESS ════════════════ -->
      <section class="products-apply">
        <div class="products-apply__banner">
          <img
            src="assets/images/eligibility-criteria.jpg"
            alt="Two Omani businessmen shaking hands in an office"
          />
        </div>

        <div class="container">
          <div class="products-apply__body">
            <!-- Eligibility Criteria -->
            <div class="products-apply__block" data-aos="fade-up">
              <h2 class="products-apply__title">Eligibility Criteria</h2>
              <p class="products-apply__text">
                Applicants seeking to avail SMEF services and programs must meet
                the basic eligibility requirements set by the Fund. These
                requirements may vary depending on the type of support,
                financing facility, or development program being applied for.
              </p>
              <p class="products-apply__text">In general, applicants should:</p>
              <ul class="products-apply__list">
                <li>
                  Be Omani nationals or legally registered entities in the
                  Sultanate of Oman
                </li>
                <li>
                  Operate within the small and medium enterprise (SME) sector
                </li>
                <li>
                  Possess a valid business registration and relevant licenses
                  (where applicable)
                </li>
                <li>
                  Demonstrate a viable business concept or operational business
                  activity
                </li>
                <li>
                  Meet the financial and documentation requirements of the
                  selected program or facility
                </li>
                <li>
                  Comply with SMEF policies, regulations, and evaluation
                  procedures
                </li>
              </ul>
              <p class="products-apply__text">
                Additional conditions and supporting documents may be required
                depending on the nature of the application and the specific SMEF
                initiative or financing product.
              </p>
            </div>

            <hr class="products-apply__divider" />

            <!-- Application Process Overview -->
            <div class="products-apply__block" data-aos="fade-up">
              <h2 class="products-apply__title">
                Application Process Overview
              </h2>
              <p class="products-apply__text">
                SMEF aims to make the application process clear, accessible, and
                efficient for entrepreneurs and SME owners seeking support
                through its programs and services.
              </p>
              <p class="products-apply__text">
                The general application process includes:
              </p>
              <ul class="products-apply__list">
                <li>Submission of the completed application form</li>
                <li>Review of required documents and supporting information</li>
                <li>Initial evaluation of the business concept or proposal</li>
                <li>
                  Assessment based on SMEF criteria and program requirements
                </li>
                <li>Meetings or discussions with the applicant, if required</li>
                <li>Final review and approval process</li>
                <li>Notification of application outcome and next steps</li>
              </ul>
              <p class="products-apply__text">
                Depending on the type of service or financing requested,
                applicants may be asked to provide additional information or
                attend further evaluation sessions as part of the review
                process.
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- /products-apply -->

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
