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
          <!-- Poster shows instantly and covers the gap until the video plays -->
          <video
            class="products-hero__video"
            src="assets/videos/hero-products.mp4"
            poster="assets/images/hero-products-placeholder.jpg"
            autoplay
            muted
            loop
            playsinline
            preload="metadata"
            aria-hidden="true"
          ></video>
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
            data-modal-img="assets/images/modal-lease-finance.jpg"
            data-modal-accent="red"
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
              <div class="product-modal-full" hidden>
                <p>
                  Buy your plant &amp; machinery, heavy equipment, vehicles or
                  other assets for your business with the help of our flexible
                  Lease Finance options. Flexible repayment terms allow you to
                  manage your cash flow more effectively throughout the
                  financing period. This facility is ideal for businesses
                  looking for expansion, diversification, etc., while
                  maintaining financial liquidity. Whether you are establishing
                  a new venture or upgrading existing equipment, INMA's flexible
                  Lease Finance provides tailor-made financing solutions.
                </p>
              </div>
            </div>
          </article>

          <!-- Sale & Lease Back (green, image left) -->
          <article
            id="sale-lease-back"
            class="products-stage products-stage--green"
            data-aos="fade-up"
            data-modal-img="assets/images/modal-sale-lease.jpg"
            data-modal-accent="green"
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
                  Unlock the value of your existing investments in business
                  assets without interrupting your operations. Through our Sale
                  &amp; Lease Back facility, you can refinance your owned
                  assets, converting them into immediate working capital while
                  continuing to use them in your business. This solution helps
                  improve liquidity and strengthens your cash flow without
                  sacrificing productivity. The released capital can be
                  reinvested into your business operations for growth,
                  expansion, new opportunities, operational improvements, etc.
                  It is an effective financing option for businesses seeking
                  greater financial flexibility while maximizing the value of
                  their existing assets.
                </p>
              </div>
            </div>
          </article>

          <!-- Working Capital Facilities (gray, image right) -->
          <article
            id="working-capital"
            class="products-stage products-stage--reverse"
            data-aos="fade-up"
            data-modal-img="assets/images/modal-working-capital.jpg"
            data-modal-accent="gray"
            data-modal-title="Working<br />Capital<br />Facilities"
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
              <div class="product-modal-full" hidden>
                <p>
                  Working Capital Facilities at INMA offer many tailor-made
                  options suitable for your short-term or long-term needs.
                  Maintain healthy cash flow and keep your business operating
                  smoothly with our Working Capital Facilities. This financing
                  solution provides the funds needed to cover your day-to-day
                  operational expenses such as inventory purchases, salaries,
                  supplier payments, and other business requirements. Having
                  readily available working capital, allows your business to
                  respond quickly to market opportunities as well as seasonal
                  demands. It also helps bridge temporary cash flow gaps without
                  disrupting daily operations.
                </p>
              </div>
            </div>
          </article>

          <!-- Bill Discounting (red, image left) -->
          <article
            id="bill-discounting"
            class="products-stage products-stage--featured"
            data-aos="fade-up"
            data-modal-img="assets/images/modal-bill-discounting.jpg"
            data-modal-accent="red"
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
              <div class="product-modal-full" hidden>
                <p>
                  Improve your cash flow by converting outstanding invoices into
                  immediate working capital. The Bill Discounting facility
                  allows businesses to access funds before customer payments are
                  due, reducing the waiting period for receivables. This enables
                  you to maintain smooth business operations and meet financial
                  commitments without delay while offering credit periods to
                  your important and large customers. Faster access to cash
                  improves your liquidity while supporting business continuity
                  and growth. It is an efficient financing solution for
                  companies with regular credit sales.
                </p>
              </div>
            </div>
          </article>

          <!-- Murabaha (green, image right) -->
          <article
            id="murabaha"
            class="products-stage products-stage--reverse products-stage--green"
            data-aos="fade-up"
            data-modal-img="assets/images/modal-islamic-finance.jpg"
            data-modal-accent="green"
            data-modal-title="Murabaha,<br />Islamic<br />Finance"
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
              <h3 class="products-stage__title">Murabaha, <br> Islamic Finance</h3>
              <p class="products-stage__text">
                A Shari'ah-compliant financing solution that enables your
                businesses to acquire assets through a transparent financing
                arrangement.
              </p>
              <a href="#" class="products-stage__btn">
                Learn More <i class="bi bi-arrow-right-circle"></i>
              </a>
              <div class="product-modal-full" hidden>
                <p>
                  Murabaha is our non-conventional financing facility that is
                  Shari'ah-compliant. This financing solution is designed for
                  businesses seeking financing in a Shari'ah-compliant manner.
                  Under this arrangement, the required asset is purchased by
                  INMA and sold to the customer at a transparent, pre-agreed
                  profit margin with flexible repayment terms. The financing
                  structure ensures clarity, fairness, and in compliance with
                  Sharia compliant principles. It enables businesses to acquire
                  equipment, machinery, vehicles, and other assets without
                  conventional interest-based financing. Murabaha offers a
                  trusted and ethical financing solution that supports
                  sustainable business growth.
                </p>
              </div>
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
                <article
                  class="guarantee-card"
                  data-modal-img="assets/images/modal-bank-guarantee.jpg"
                  data-modal-accent="red"
                >
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
                    <div class="product-modal-full" hidden>
                      <p>
                        Enhance your business credibility and strengthen your
                        contractual commitments with Bank Guarantee facilities
                        from our banks. Such a guarantee provides assurance to
                        project owners, suppliers, and business partners that
                        contractual obligations will be fulfilled as agreed.
                        This facility helps businesses secure larger contracts,
                        build confidence with stakeholders, and participate in
                        larger commercial opportunities. It also minimizes
                        financial risk for all parties involved.
                      </p>
                    </div>
                  </div>
                </article>
              </div>

              <!-- Letter of Credit Facility -->
              <div class="swiper-slide">
                <article
                  class="guarantee-card"
                  data-modal-img="assets/images/modal-letter-credit.jpg"
                  data-modal-accent="green"
                  data-modal-title="Letter<br />of Credit<br />Facility"
                >
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
                    <div class="product-modal-full" hidden>
                      <p>
                        Facilitate domestic and international trade with
                        confidence through the LC (Letter of Credit) Facility
                        from our bank. This solution provides secure payment
                        arrangements between buyers and suppliers, reducing
                        commercial risks while ensuring smooth business
                        transactions. It offers reassurance to both parties that
                        payment and delivery obligations will be fulfilled
                        according to agreed terms. Whether importing raw
                        materials or exporting your products, a Letter of Credit
                        helps build trust and strengthens business
                        relationships. It is an essential financing tool for
                        companies engaged in local and global trade.
                      </p>
                    </div>
                  </div>
                </article>
              </div>

              <!-- Tender Bonds -->
              <div class="swiper-slide">
                <article
                  class="guarantee-card"
                  data-modal-img="assets/images/modal-tender-bonds.jpg"
                  data-modal-accent="red"
                >
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
                    <div class="product-modal-full" hidden>
                      <p>
                        Tender Bonds help businesses participate confidently in
                        public and private sector tenders by providing the bid
                        security required by project owners. This facility
                        demonstrates your company's financial credibility and
                        commitment to fulfilling the tender requirements, giving
                        clients greater confidence in your proposal. By
                        supporting your tender submissions, Inma (SME
                        Development Fund) helps position your business to
                        compete for larger projects and seize new growth
                        opportunities.
                      </p>
                    </div>
                  </div>
                </article>
              </div>

              <!-- Advance Payment Guarantees -->
              <div class="swiper-slide">
                <article
                  class="guarantee-card"
                  data-modal-img="assets/images/modal-advance-payment.jpg"
                  data-modal-accent="green"
                  data-modal-title="Advance<br />Payment<br />Guarantees"
                >
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
                    <div class="product-modal-full" hidden>
                      <p>
                        Provide confidence to project owners while protecting
                        advance payments made under commercial contracts. The
                        Advance Payment Guarantee from our banks provides
                        assurance to your clients that advance funds will be
                        used appropriately and remain protected throughout the
                        project lifecycle. This facility helps contractors
                        secure advance payments needed to mobilize resources,
                        purchase materials, and begin project execution. It
                        strengthens trust between contractors and project owners
                        while supporting smooth project delivery. Advance
                        Payment Guarantees play an important role in
                        facilitating successful project implementation.
                      </p>
                    </div>
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
            data-modal-img="assets/images/modal-auto-finance.jpg"
            data-modal-accent="red"
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
              <div class="product-modal-full" hidden>
                <p>
                  Whether purchasing a new or pre-owned vehicle, try our Auto
                  Finance facility. This facility offers affordable financing
                  with convenient repayment options tailored to your monthly
                  income. It is suitable for individuals as well as businesses
                  looking to expand their vehicle fleet. Our financing solutions
                  make vehicle ownership more accessible and financially
                  manageable. With flexible financing options and a simple
                  application process, you can enjoy greater mobility without
                  placing unnecessary pressure on your finances. Whether for
                  personal use or business operations, our Auto Finance helps
                  you get on the road with confidence while preserving your cash
                  flow.
                </p>
              </div>
            </div>
          </article>

          <!-- Consumer Loans (green, image left) -->
          <article
            id="consumer-loans"
            class="products-stage products-stage--green"
            data-aos="fade-up"
            data-modal-img="assets/images/modal-consumer-loans.jpg"
            data-modal-accent="green"
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
              <div class="product-modal-full" hidden>
                <p>
                  Our Consumer Loan facility provides flexible financing options
                  for a wide range of personal and lifestyle needs. Whether
                  you're purchasing household appliances, electronic items,
                  furniture, making home improvements, or addressing other
                  personal needs, we offer flexible financing with convenient
                  repayment plans. This facility also allows you to enjoy the
                  things you need today while spreading your repayments over
                  manageable tenures with easy installments. Consumer Loan
                  options are designed to help improve your quality of life
                  without placing undue strain on your finances. With simple
                  application processes and flexible terms, achieving your
                  personal goals becomes easier and more affordable.
                </p>
              </div>
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
<?php include __DIR__ . "/includes/contacts.php"; ?>
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
      data-lenis-prevent
    >
      <div class="product-modal__backdrop" data-modal-close></div>

      <div class="product-modal__dialog" role="document">
        <button
          class="product-modal__close"
          type="button"
          data-modal-close
          aria-label="Close"
        >
          <span class="product-modal__close-icon"
            ><i class="bi bi-x-lg"></i
          ></span>
          <span class="product-modal__close-label">Close</span>
        </button>

        <!-- Everything below the close button scrolls, so the photo can run at
             full size while the dialog still fits the screen -->
        <div class="product-modal__scroll">
          <!-- Full-bleed product photo with the Inma mark over the top-right -->
          <div class="product-modal__media">
            <img
              class="product-modal__img"
              src="assets/images/modal-lease-finance.jpg"
              alt=""
            />
            <img
              class="product-modal__logo"
              src="assets/images/modal-product-logo.png"
              alt="SMEF Inma"
            />
          </div>

          <!-- Colour panel with the title + the copy beside it -->
          <div class="product-modal__content">
            <div class="product-modal__aside">
              <h2 class="product-modal__title" id="productModalTitle"></h2>
            </div>

            <div class="product-modal__main">
              <p class="product-modal__breadcrumb"></p>
              <div class="product-modal__body"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /product-modal -->

<?php include __DIR__ . "/includes/footer.php"; ?>
