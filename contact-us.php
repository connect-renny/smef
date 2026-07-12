<?php
$pageTitle = 'Contact Us — SME Development Fund';
$activePage = 'contact';
include __DIR__ . "/includes/head.php";
include __DIR__ . "/includes/header.php";
?>
    <main>
      <!-- ═══════════════════════════ CONTACT HERO ═════════════════════════════ -->
      <section class="contact-hero">
        <div class="container">
          <h1 class="contact-hero__title" data-aos="fade-up">
            Get in touch with SME Development Fund
          </h1>
          <p
            class="contact-hero__intro"
            data-aos="fade-up"
            data-aos-delay="150"
          >
            For inquiries, support, or more information about SMEF programs and
            services, please feel free to contact us. Our team is available to
            assist you and provide the guidance you need.
          </p>

          <div
            class="contact-hero__grid"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <!-- Logo -->
            <div class="contact-hero__brand">
              <img src="assets/images/smef-logo-contact.png" alt="SMEF Inma" />
            </div>

            <!-- Head Office -->
            <address class="contact-hero__col">
              <strong>Head Office</strong><br />
              SME Development Fund<br />
              PO BOX 119, PC 103, Sultanate of Oman<br />
              Fifth Floor, Block V, Panorama Mall<br />
              Al Ghubrah<br /><br />
              Tel: +968 22344000<br />
              E-mail: info@smefoman.com
            </address>

            <!-- Branches -->
            <div class="contact-hero__col">
              <address class="contact-hero__branch">
                <strong>Salalah Branch</strong><br />
                Mohammed Shabbir Akhter:<br />
                90160987 Tel: 23292419
              </address>
              <address class="contact-hero__branch">
                <strong>Sohar Branch</strong><br />
                Ali Al Farsi:<br />
                96096175
              </address>
            </div>

            <!-- WhatsApp -->
            <div class="contact-hero__whatsapp">
              <a href="#">
                <img
                  src="assets/images/whatsapp-icon.png"
                  alt="WhatsApp"
                  class="contact-hero__wa-icon"
                />
                <span class="contact-hero__wa-label">Call Us Now!</span>
                <span class="contact-hero__wa-number">1234 5678</span>
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- /contact-hero -->
    </main>

    
<?php include __DIR__ . "/includes/footer.php"; ?>
