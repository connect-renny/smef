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
              The<br />Right Financing<br />for the Right<br />Opportunity
            </h1>
          </div>
        </div>        
      </section>
      <!-- /hero -->

      <!-- ═══════════════════════ SME DEVELOPMENT FUND PRODUCTS ════════════════ -->
      <section class="products-intro">
        <div class="container">
          <h2 class="products-intro__title" data-aos="fade-up">
            Inma (SME Development Fund) Products
          </h2>
          <p
            class="products-intro__text"
            data-aos="fade-up"
            data-aos-delay="150"
          >
            Inma (SME Development Fund) provides a comprehensive range of
            financing solutions to support entrepreneurs, businesses, and
            individuals at every stage of their journey.
          </p>
          <p
            class="products-intro__text"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            From business startup, expansion, and diversification to personal
            financing needs, our flexible facilities are designed to help turn
            ambitions into lasting success.
          </p>
        </div>
      </section>
      <!-- /products-intro -->

      <!-- ═══════════════════════════ COMMERCIAL FINANCE ═══════════════════════ -->
      <section class="products-category" aria-labelledby="commercial-finance">
        <div class="products-category__band">
          <h2 class="products-category__title" id="commercial-finance">
            Commercial Finance
          </h2>
        </div>

        <div class="products-stages">
          <!-- Lease Finance (red, image right) -->
          <article
            id="lease-finance"
            class="products-stage products-stage--reverse products-stage--featured"
            data-aos="fade-up"
          >
            <div class="products-stage__media">
              <div class="reveal__pic products-stage__pic">
                <img
                  src="assets/images/product-lease-finance.jpg"
                  alt="SMEF advisors reviewing equipment being delivered to a café"
                />
              </div>
            </div>
            <div class="products-stage__body">
              <h3 class="products-stage__title">Lease<br />Finance</h3>
              <p class="products-stage__text">
                Acquire machinery, equipment, vehicles, Plant &amp; Machineries
                or any other assets for your business need through our flexible
                lease financing products.
              </p>
              <a href="#" class="products-stage__btn">
                Learn More <i class="bi bi-arrow-right-circle"></i>
              </a>
            </div>
          </article>

          <!-- Sale & Lease Back (green, image left) -->
          <article
            id="sale-lease-back"
            class="products-stage products-stage--green"
            data-aos="fade-up"
          >
            <div class="products-stage__media">
              <div class="reveal__pic products-stage__pic">
                <img
                  src="assets/images/product-sale-lease.jpg"
                  alt="Engineers inspecting plant machinery on a factory floor"
                />
              </div>
            </div>
            <div class="products-stage__body">
              <h3 class="products-stage__title">Sale &amp;<br />Lease Back</h3>
              <p class="products-stage__text">
                Unlock your already utilized capital for your existing business
                by way of refinancing, allowing you to improve your cash flow
                while continuing to use your assets.
              </p>
              <a href="#" class="products-stage__btn">
                Learn More <i class="bi bi-arrow-right-circle"></i>
              </a>
              <div class="product-modal-full" hidden>
                <p>
                  Unlock the value of your existing business assets without
                  disrupting your operations. Through our Sale &amp; Lease Back
                  facility, you can refinance assets you already own, converting
                  them into immediate working capital while continuing to use
                  them in your day-to-day business.
                </p>
                <p>
                  This solution helps improve cash flow, strengthen liquidity,
                  and provide the financial flexibility needed to support
                  business growth, expansion, or new investment opportunities.
                </p>
                <p>
                  By releasing capital tied up in fixed assets, your business
                  gains the freedom to invest where it matters most — all while
                  retaining full use of the assets it depends on.
                </p>
              </div>
            </div>
          </article>

          <!-- Working Capital Facilities (gray, image right) -->
          <article
            id="working-capital"
            class="products-stage products-stage--reverse"
            data-aos="fade-up"
          >
            <div class="products-stage__media">
              <div class="reveal__pic products-stage__pic">
                <img
                  src="assets/images/product-working-capital.jpg"
                  alt="Boutique owner managing invoices and cash flow"
                />
              </div>
            </div>
            <div class="products-stage__body">
              <h3 class="products-stage__title">Working Capital<br />Facilities</h3>
              <p class="products-stage__text">
                Access short-term &amp; long term financing to support your
                day-to-day business operations, manage cash flow, and meet your
                operational expenses.
              </p>
              <a href="#" class="products-stage__btn">
                Learn More <i class="bi bi-arrow-right-circle"></i>
              </a>
            </div>
          </article>

          <!-- Bill Discounting (red, image left) -->
          <article
            id="bill-discounting"
            class="products-stage products-stage--featured"
            data-aos="fade-up"
          >
            <div class="products-stage__media">
              <div class="reveal__pic products-stage__pic">
                <img
                  src="assets/images/product-bill-discounting.jpg"
                  alt="Bank officer assisting a customer with invoice financing"
                />
              </div>
            </div>
            <div class="products-stage__body">
              <h3 class="products-stage__title">Bill<br />Discounting</h3>
              <p class="products-stage__text">
                Improve your cash flow by receiving immediate financing against
                approved invoices or receivables instead of waiting for your
                customer payments.
              </p>
              <a href="#" class="products-stage__btn">
                Learn More <i class="bi bi-arrow-right-circle"></i>
              </a>
            </div>
          </article>

          <!-- Murabaha (green, image right) -->
          <article
            id="murabaha"
            class="products-stage products-stage--reverse products-stage--green"
            data-aos="fade-up"
          >
            <div class="products-stage__media">
              <div class="reveal__pic products-stage__pic">
                <img
                  src="assets/images/product-murabaha.jpg"
                  alt="Business owner shaking hands with an advisor after signing"
                />
              </div>
            </div>
            <div class="products-stage__body">
              <h3 class="products-stage__title">Murabaha</h3>
              <p class="products-stage__text">
                A Shari'ah-compliant financing solution that enables your
                businesses to acquire assets through a transparent financing
                arrangement.
              </p>
              <a href="#" class="products-stage__btn">
                Learn More <i class="bi bi-arrow-right-circle"></i>
              </a>
            </div>
          </article>

          <!-- Non-Funded Facilities (plain white, image left) -->
          <article
            id="non-funded"
            class="products-stage products-stage--plain"
            data-aos="fade-up"
          >
            <div class="products-stage__media">
              <div class="reveal__pic products-stage__pic">
                <img
                  src="assets/images/product-non-funded.jpg"
                  alt="Fleet operator discussing logistics beside delivery vans"
                />
              </div>
            </div>
            <div class="products-stage__body">
              <h3 class="products-stage__title">Non-Funded<br />Facilities</h3>
              <p class="products-stage__text">
                Support your business transactions and contractual commitments
                with the help of various guarantees and non-funded facilities of
                the bank.
              </p>
            </div>
          </article>
        </div>
      </section>
      <!-- /products-category -->

      <!-- ═══════════════════ NON-FUNDED FACILITY TYPES (slider) ════════════════ -->
      <section class="products-guarantees" data-modal-category="Commercial Finance">
        <div class="products-guarantees__inner">
          <div class="swiper guarantees-swiper">
            <div class="swiper-wrapper">
              <!-- Bank Guarantee -->
              <div class="swiper-slide">
                <article class="guarantee-card">
                  <div class="guarantee-card__media">
                    <img
                      src="assets/images/product-sm-bank-gurantee.jpg"
                      alt="Site engineer directing a road roller operator"
                    />
                  </div>
                  <div class="guarantee-card__body">
                    <h3 class="guarantee-card__title">Bank<br />Guarantee</h3>
                    <p class="guarantee-card__text">
                      providing financial guaranty to third parties that
                      contractual or financial obligations will be fulfilled
                    </p>
                    <a href="#" class="guarantee-card__btn">
                      Learn More <i class="bi bi-arrow-right-circle"></i>
                    </a>
                  </div>
                </article>
              </div>

              <!-- Letter of Credit Facility -->
              <div class="swiper-slide">
                <article class="guarantee-card">
                  <div class="guarantee-card__media">
                    <img
                      src="assets/images/product-sm-letter-credit.jpg"
                      alt="Traders shaking hands at a port with a cargo ship behind"
                    />
                  </div>
                  <div class="guarantee-card__body">
                    <h3 class="guarantee-card__title">
                      Letter of<br />Credit Facility
                    </h3>
                    <p class="guarantee-card__text">
                      facilitating domestic and international trade by providing
                      secure payment arrangements between buyers and suppliers.
                    </p>
                    <a href="#" class="guarantee-card__btn">
                      Learn More <i class="bi bi-arrow-right-circle"></i>
                    </a>
                  </div>
                </article>
              </div>

              <!-- Tender Bonds -->
              <div class="swiper-slide">
                <article class="guarantee-card">
                  <div class="guarantee-card__media">
                    <img
                      src="assets/images/product-sm-tender-bonds.jpg"
                      alt="Engineers reviewing plans at a construction site"
                    />
                  </div>
                  <div class="guarantee-card__body">
                    <h3 class="guarantee-card__title">Tender<br />Bonds</h3>
                    <p class="guarantee-card__text">
                      supporting participation in public and private sector
                      tenders by providing the required bid security
                    </p>
                    <a href="#" class="guarantee-card__btn">
                      Learn More <i class="bi bi-arrow-right-circle"></i>
                    </a>
                  </div>
                </article>
              </div>

              <!-- Advance Payment Guarantees -->
              <div class="swiper-slide">
                <article class="guarantee-card">
                  <div class="guarantee-card__media">
                    <img
                      src="assets/images/product-sm-advance-payment.jpg"
                      alt="Workers loading equipment while an owner supervises"
                    />
                  </div>
                  <div class="guarantee-card__body">
                    <h3 class="guarantee-card__title">
                      Advance<br />Payment Guarantees
                    </h3>
                    <p class="guarantee-card__text">
                      providing assurance to project owners that advance payments
                      made to contractors are properly secured.
                    </p>
                    <a href="#" class="guarantee-card__btn">
                      Learn More <i class="bi bi-arrow-right-circle"></i>
                    </a>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /products-guarantees -->

      <!-- ═══════════════════════════ RETAIL FINANCE ════════════════════════════ -->
      <section class="products-category" aria-labelledby="retail-finance">
        <div class="products-category__band">
          <h2 class="products-category__title" id="retail-finance">
            Retail Finance
          </h2>
        </div>

        <div class="products-stages">
          <!-- Auto Finance (red, image right) -->
          <article
            id="auto-finance"
            class="products-stage products-stage--reverse products-stage--featured"
            data-aos="fade-up"
          >
            <div class="products-stage__media">
              <div class="reveal__pic products-stage__pic">
                <img
                  src="assets/images/product-auto-finance.jpg"
                  alt="Salesman handing car keys to a customer at a dealership"
                />
              </div>
            </div>
            <div class="products-stage__body">
              <h3 class="products-stage__title">Auto<br />Finance</h3>
              <p class="products-stage__text">
                Financing your new &amp; used vehicles, providing flexible
                financing for personal, commercial fleets, and electric vehicles
                (EVs) for Companies and Individuals with easy installment
                options.
              </p>
              <a href="#" class="products-stage__btn">
                Learn More <i class="bi bi-arrow-right-circle"></i>
              </a>
            </div>
          </article>

          <!-- Consumer Loans (green, image left) -->
          <article
            id="consumer-loans"
            class="products-stage products-stage--green"
            data-aos="fade-up"
          >
            <div class="products-stage__media">
              <div class="reveal__pic products-stage__pic">
                <img
                  src="assets/images/product-consumer-loans.jpg"
                  alt="Couple shopping for home appliances in a showroom"
                />
              </div>
            </div>
            <div class="products-stage__body">
              <h3 class="products-stage__title">Consumer<br />Loans</h3>
              <p class="products-stage__text">
                Providing consumer &amp; lifestyle financing which includes
                electronic items, furniture etc. or any items to enhance your
                lifestyle with easy installment options.
              </p>
              <a href="#" class="products-stage__btn">
                Learn More <i class="bi bi-arrow-right-circle"></i>
              </a>
            </div>
          </article>
        </div>
      </section>
      <!-- /products-category -->

      <!-- ═══════════════════ ELIGIBILITY & APPLICATION PROCESS ════════════════ -->
      <section class="products-apply">
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
                  Be a part of a small or medium enterprise or corporate sector
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

    <!-- ═══════════════════════════ PRODUCT MODAL ════════════════════════════ -->
    <div
      class="product-modal"
      id="productModal"
      role="dialog"
      aria-modal="true"
      aria-labelledby="productModalTitle"
      aria-hidden="true"
    >
      <div class="product-modal__backdrop" data-modal-close></div>

      <div class="product-modal__dialog" role="document">
        <button
          class="product-modal__close"
          type="button"
          data-modal-close
          aria-label="Close"
        >
          <span class="product-modal__close-icon"><i class="bi bi-x-lg"></i></span>
          <span class="product-modal__close-label">Close</span>
        </button>

        <div class="product-modal__media">
          <img
            class="product-modal__img"
            src="assets/images/product-modal-pic.jpg"
            alt=""
          />
        </div>

        <div class="product-modal__content">
          <p class="product-modal__breadcrumb"></p>
          <h2 class="product-modal__title" id="productModalTitle"></h2>
          <div class="product-modal__body"></div>
        </div>
      </div>
    </div>
    <!-- /product-modal -->

<?php include __DIR__ . "/includes/footer.php"; ?>
