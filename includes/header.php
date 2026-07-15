<?php
// Shared site header
?>
<?php if (isset($activePage) && $activePage === 'home'): ?>
    <!-- ═══════════════════════════ PRELOADER ══════════════════════════════════ -->
    <div class="loader-overlay" aria-label="Loading page" role="status" aria-live="polite">
      <div class="loader">
        <div class="loader__ring">
          <div class="loader__logo-icon">
            <img src="assets/images/loader.svg" alt="Inma" />
          </div>
        </div>
        <div class="loader__label">Loading<span class="loader__dots"><span>.</span><span>.</span><span>.</span></span></div>
        <div class="loader-line">
          <div class="loader-line__fill"></div>
        </div>
      </div>
    </div>
<?php endif; ?>
    <!-- ═══════════════════════════ HEADER ═══════════════════════════════════ -->
    <header class="header" id="header">
      <div class="container">
        <div class="header__inner">
          <!-- Logo -->
          <a href="index.php" class="header__logo" aria-label="SMEF — Home">
            <img src="assets/images/smef-logo.svg" alt="SMEF Inma" />
          </a>

          <!-- Right column: top contact bar + main nav bar -->
          <div class="header__main">
            <!-- Top contact bar -->
            <div class="header__topbar">
              <a href="tel:+96822344000" class="contact-item">
                <span class="contact-item__icon">
                  <img src="assets/images/tele-icon.svg" alt="" />
                </span>
                <span class="contact-item__text">+968 22344000</span>
              </a>
              <a href="mailto:info@smefoman.com" class="contact-item">
                <span class="contact-item__icon">
                  <img src="assets/images/mail-icon.svg" alt="" />
                </span>
                <span class="contact-item__text">info@smefoman.com</span>
              </a>
              <span class="contact-item">
                <span class="contact-item__icon">
                  <img src="assets/images/time-icon.svg" alt="" />
                </span>
                <span class="contact-item__text">8:00am - 4:30pm</span>
              </span>
            </div>

            <!-- Main nav bar -->
            <div class="header__bar">
              <nav class="nav-main" aria-label="Main navigation">
                <ul class="nav-main__list">
                  <li class="nav-main__item<?= ($activePage === 'home') ? ' active' : '' ?>">
                    <a href="index.php" class="nav-main__link">Home Page</a>
                  </li>
                  <li class="nav-main__item<?= ($activePage === 'about') ? ' active' : '' ?>">
                    <a href="about.php" class="nav-main__link">About Us</a>
                  </li>
                  <li class="nav-main__item nav-main__item--dropdown<?= ($activePage === 'products' || $activePage === 'product-detail') ? ' active' : '' ?>">
                    <a href="products.php" class="nav-main__link"
                      >SMEF Products
                      <i class="bi bi-chevron-down nav-main__caret"></i
                    ></a>
                    <ul class="nav-main__submenu">
                      <li>
                        <a href="product-entrepreneurial-development.php"
                          >Entrepreneurial Development</a
                        >
                      </li>
                      <li><a href="#">Financing</a></li>
                      <li><a href="#">Nurturing</a></li>
                      <li>
                        <a href="#">Legitimizing</a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main__item<?= ($activePage === 'services') ? ' active' : '' ?>">
                    <a href="services.php" class="nav-main__link">SMEF Services</a>
                  </li>
                  <li class="nav-main__item<?= ($activePage === 'testimonials') ? ' active' : '' ?>">
                    <a href="testimonials.php" class="nav-main__link">Testimonials</a>
                  </li>
                  <li class="nav-main__item<?= ($activePage === 'media') ? ' active' : '' ?>">
                    <a href="media.php" class="nav-main__link">Media Page</a>
                  </li>
                  <li class="nav-main__item<?= ($activePage === 'contact') ? ' active' : '' ?>">
                    <a href="contact-us.php" class="nav-main__link">Contact Us</a>
                  </li>
                </ul>
              </nav>

              <div class="header__utils">
                <!-- Social -->
                <ul class="header__social">
                  <li>
                    <a href="https://www.facebook.com/smefoman" target="_blank" aria-label="Facebook"
                      ><i class="bi bi-facebook"></i
                    ></a>
                  </li>
                  <li>
                    <a href="#" aria-label="X (Twitter)"
                      ><i class="bi bi-twitter-x"></i
                    ></a>
                  </li>
                  <li>
                    <a href="#" aria-label="Instagram"
                      ><i class="bi bi-instagram"></i
                    ></a>
                  </li>
                </ul>

                <!-- Search -->
                <form class="header__search" role="search" action="#">
                  <button
                    type="submit"
                    class="header__search-btn"
                    aria-label="Search"
                  >
                    <i class="bi bi-search"></i>
                  </button>
                  <input
                    type="search"
                    class="header__search-input"
                    placeholder="Search"
                    aria-label="Search"
                  />
                </form>
              </div>
            </div>
          </div>

          <!-- Hamburger (mobile) -->
          <button
            class="btn-hamburger"
            id="btnHamburger"
            aria-label="Open menu"
            aria-expanded="false"
          >
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
      </div>
    </header>
    <!-- /header -->

    <!-- Mobile backdrop -->
    <div class="mobile-backdrop" id="mobileBackdrop"></div>

    <!-- Mobile drawer -->
    <nav
      class="mobile-drawer"
      id="mobileDrawer"
      aria-label="Mobile navigation"
      aria-hidden="true"
    >
      <div class="mobile-drawer__head">
        <a
          href="index.php"
          class="mobile-drawer__logo"
          aria-label="SMEF — Home"
        >
          <img src="assets/images/smef-logo.svg" alt="SMEF Inma" />
        </a>
        <button
          class="mobile-drawer__close"
          id="btnDrawerClose"
          aria-label="Close menu"
        >
          <i class="bi bi-x-lg"></i>
        </button>
      </div>

      <ul class="mobile-drawer__list">
        <li class="mobile-drawer__item<?= ($activePage === 'home') ? ' active' : '' ?>">
          <a href="index.php" class="mobile-drawer__link">Home Page</a>
        </li>
        <li class="mobile-drawer__item<?= ($activePage === 'about') ? ' active' : '' ?>">
          <a href="about.php" class="mobile-drawer__link">About Us</a>
        </li>
        <li class="mobile-drawer__item mobile-drawer__item--dropdown<?= ($activePage === 'products' || $activePage === 'product-detail') ? ' active' : '' ?>">
          <div class="mobile-drawer__row">
            <a href="products.php" class="mobile-drawer__link">SMEF Products</a>
            <button
              class="mobile-drawer__toggle"
              type="button"
              aria-label="Toggle SMEF Products submenu"
              aria-expanded="false"
            >
              <i class="bi bi-chevron-down"></i>
            </button>
          </div>
          <ul class="mobile-drawer__submenu">
            <li>
              <a
                href="product-entrepreneurial-development.php"
                class="mobile-drawer__sublink"
                >Entrepreneurial Development</a
              >
            </li>
            <li>
              <a href="products.php#financing" class="mobile-drawer__sublink"
                >Financing</a
              >
            </li>
            <li>
              <a href="products.php#nurturing" class="mobile-drawer__sublink"
                >Nurturing</a
              >
            </li>
            <li>
              <a href="products.php#legitimizing" class="mobile-drawer__sublink"
                >Legitimizing</a
              >
            </li>
          </ul>
        </li>
        <li class="mobile-drawer__item<?= ($activePage === 'services') ? ' active' : '' ?>">
          <a href="services.php" class="mobile-drawer__link">SMEF Services</a>
        </li>
        <li class="mobile-drawer__item<?= ($activePage === 'testimonials') ? ' active' : '' ?>">
          <a href="testimonials.php" class="mobile-drawer__link">Testimonials</a>
        </li>
        <li class="mobile-drawer__item<?= ($activePage === 'media') ? ' active' : '' ?>">
          <a href="media.php" class="mobile-drawer__link">Media Page</a>
        </li>
        <li class="mobile-drawer__item<?= ($activePage === 'contact') ? ' active' : '' ?>">
          <a href="contact-us.php" class="mobile-drawer__link">Contact Us</a>
        </li>
      </ul>

      <div class="mobile-drawer__foot">
        <div class="mobile-drawer__contact">
          <a href="tel:+96822344000" class="contact-item">
            <span class="contact-item__icon">
              <img src="assets/images/tele-icon.svg" alt="" />
            </span>
            <span class="contact-item__text">+968 22344000</span>
          </a>
          <a href="mailto:info@smefoman.com" class="contact-item">
            <span class="contact-item__icon">
              <img src="assets/images/mail-icon.svg" alt="" />
            </span>
            <span class="contact-item__text">info@smefoman.com</span>
          </a>
          <span class="contact-item">
            <span class="contact-item__icon">
              <img src="assets/images/time-icon.svg" alt="" />
            </span>
            <span class="contact-item__text">8:00am - 4:30pm</span>
          </span>
        </div>
        <ul class="header__social">
          <li>
            <a href="https://www.facebook.com/smefoman" target="_blank" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
          </li>
          <li>
            <a href="#" aria-label="X (Twitter)"
              ><i class="bi bi-twitter-x"></i
            ></a>
          </li>
          <li>
            <a href="#" aria-label="Instagram"
              ><i class="bi bi-instagram"></i
            ></a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- /mobile drawer -->
