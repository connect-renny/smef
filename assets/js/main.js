// Smooth Scroll

const lenis = new Lenis();
function raf(time) {
  lenis.raf(time);
  requestAnimationFrame(raf);
}
requestAnimationFrame(raf);

// GSAP ScrollTrigger — register and keep it in sync with Lenis
if (window.gsap && window.ScrollTrigger) {
  gsap.registerPlugin(ScrollTrigger);
  lenis.on("scroll", ScrollTrigger.update);
}

// Lock scrolling immediately while the preloader is present.
// Lenis scrolls programmatically, so native overflow:hidden isn't enough —
// stop the Lenis instance too and pin the page to the top.
if (document.querySelector(".loader-overlay")) {
  document.body.style.overflow = "hidden";
  lenis.stop();
  lenis.scrollTo(0, { immediate: true });
}

function unlockScroll() {
  document.body.style.overflow = "";
  lenis.start();
  // Let deferred hero animations know the preloader is gone
  document.dispatchEvent(new CustomEvent("preloader:done"));
}

// Preloader
window.addEventListener("load", function () {
  var loaderOverlay = document.querySelector(".loader-overlay");
  var loaderPercent = document.getElementById("loader-percent");
  var loaderLine = document.querySelector(".loader-line__fill");
  var loaderShutters = document.querySelectorAll(".loader__shutter-panel");
  var logoIcon = document.querySelector(".loader__logo-icon");
  var loaderShade = document.querySelector(".loader__shade");

  if (!loaderOverlay || !loaderPercent) return;

  function buildLoaderDigit(targetDigit, index) {
    var reel = document.createElement("span");
    var strip = document.createElement("span");
    var target = parseInt(targetDigit, 10);
    var loops = 3 + index;
    var finalStep = loops * 10 + target;

    reel.className = "loader-percent-digit";
    strip.className = "loader-percent-strip";
    reel.dataset.finalStep = finalStep;

    for (var i = 0; i <= finalStep; i++) {
      var digit = document.createElement("span");
      digit.textContent = i % 10;
      strip.appendChild(digit);
    }

    reel.appendChild(strip);
    return reel;
  }

  loaderPercent.innerHTML = "";
  "100".split("").forEach(function (digit, index) {
    loaderPercent.appendChild(buildLoaderDigit(digit, index));
  });

  var percentSymbol = document.createElement("span");
  percentSymbol.className = "loader-percent-symbol";
  percentSymbol.textContent = "%";
  loaderPercent.appendChild(percentSymbol);

  if (window.gsap) {
    var loaderTimeline = gsap.timeline({
      delay: 0.25,
      onComplete: function () {
        loaderOverlay.style.display = "none";
        unlockScroll();
      },
    });

    loaderTimeline
      // Phase 1 — count-up + progress line (simultaneous)
      .to(".loader-percent-strip", {
        y: function (_index, strip) {
          var reel = strip.closest(".loader-percent-digit");
          return "-" + reel.dataset.finalStep + "em";
        },
        duration: 1.9,
        ease: "power4.out",
        stagger: 0.12,
      })
      .to(loaderLine, { width: "100%", duration: 1.8, ease: "power3.out" }, 0)
      // Phase 2 — logo-icon slides up out of frame
      .to(logoIcon, { y: "-150%", duration: 0.55, ease: "power3.in" })
      // Phase 3 — shade height collapses from 100% → 0
      .to(loaderShade, { height: 0, duration: 0.65, ease: "power3.inOut" })
      // Phase 4 — hide progress line and counter
      .to([".loader-line", ".loader-progress"], {
        opacity: 0,
        duration: 0.3,
        ease: "power2.out",
      })
      // Phase 5 — shutters fold away
      .to(loaderShutters, {
        scaleY: 0,
        transformOrigin: "top center",
        duration: 0.85,
        ease: "power4.inOut",
        stagger: 0.09,
      });
  } else {
    loaderPercent.textContent = "100%";
    if (loaderLine) loaderLine.style.width = "100%";
    setTimeout(function () {
      loaderOverlay.style.display = "none";
      unlockScroll();
    }, 700);
  }
});

// Fallback — if the load event never fires, don't trap the user
setTimeout(function () {
  var loaderOverlay = document.querySelector(".loader-overlay");
  if (loaderOverlay && loaderOverlay.style.display !== "none") {
    loaderOverlay.style.display = "none";
    unlockScroll();
  }
}, 8000);

// reveal__pic — image wipe + zoom on scroll into view
if (window.gsap && window.ScrollTrigger) {
  gsap.utils.toArray(".reveal__pic").forEach(function (pic) {
    var img = pic.querySelector("img");

    var tl = gsap.timeline({
      scrollTrigger: {
        trigger: pic,
        start: "top 75%",
      },
    });

    tl.fromTo(
      pic,
      { clipPath: "inset(0 100% 0 0)" },
      { clipPath: "inset(0 0% 0 0)", duration: 1.2, ease: "power3.out" },
    ).fromTo(
      img,
      { scale: 1.15, y: 40 },
      { scale: 1, y: 0, duration: 1.4, ease: "power3.out" },
      "<",
    );
  });
}

// Navbar fixed on scroll
window.addEventListener("scroll", function () {
  var sticky = document.querySelector(".navbar-main");
  if (!sticky) return;
  var scroll = window.pageYOffset || document.documentElement.scrollTop;

  if (scroll >= 10) {
    sticky.classList.add("navbar-fixed");
  } else {
    sticky.classList.remove("navbar-fixed");
  }
});

// ─── Mobile drawer ────────────────────────────────────────────────────────────
(function () {
  var hamburger = document.getElementById("btnHamburger");
  var drawer = document.getElementById("mobileDrawer");
  var backdrop = document.getElementById("mobileBackdrop");
  var closeBtn = document.getElementById("btnDrawerClose");

  if (!hamburger || !drawer || !backdrop) return;

  function openDrawer() {
    drawer.classList.add("is-open");
    drawer.setAttribute("aria-hidden", "false");
    backdrop.classList.add("is-visible");
    hamburger.classList.add("is-active");
    hamburger.setAttribute("aria-expanded", "true");
    hamburger.setAttribute("aria-label", "Close menu");
    document.body.style.overflow = "hidden";
  }

  function closeDrawer() {
    drawer.classList.remove("is-open");
    drawer.setAttribute("aria-hidden", "true");
    backdrop.classList.remove("is-visible");
    hamburger.classList.remove("is-active");
    hamburger.setAttribute("aria-expanded", "false");
    hamburger.setAttribute("aria-label", "Open menu");
    document.body.style.overflow = "";
  }

  hamburger.addEventListener("click", function () {
    drawer.classList.contains("is-open") ? closeDrawer() : openDrawer();
  });

  if (closeBtn) closeBtn.addEventListener("click", closeDrawer);
  backdrop.addEventListener("click", closeDrawer);

  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape" && drawer.classList.contains("is-open"))
      closeDrawer();
  });

  drawer.querySelectorAll(".mobile-drawer__link").forEach(function (link) {
    link.addEventListener("click", closeDrawer);
  });

  // About-Us submenu accordion (expand/collapse on caret tap)
  drawer.querySelectorAll(".mobile-drawer__toggle").forEach(function (btn) {
    btn.addEventListener("click", function () {
      var item = btn.closest(".mobile-drawer__item--dropdown");
      if (!item) return;
      var expanded = item.classList.toggle("is-expanded");
      btn.setAttribute("aria-expanded", expanded ? "true" : "false");
    });
  });

  // Submenu links close the drawer on navigation
  drawer.querySelectorAll(".mobile-drawer__sublink").forEach(function (link) {
    link.addEventListener("click", closeDrawer);
  });
})();

// Scroll to top----------------

// Get the return-top button element
var returnTopButton = document.getElementById("return-top");

if (returnTopButton) {
  // Prime the progress ring: hide the full stroke, then reveal it as the
  // page scrolls by animating stroke-dashoffset back toward 0.
  var progressPath = returnTopButton.querySelector(
    ".return-top__progress-fill",
  );
  var pathLength = progressPath ? progressPath.getTotalLength() : 0;

  if (progressPath) {
    progressPath.style.transition = "none";
    progressPath.style.strokeDasharray = pathLength + " " + pathLength;
    progressPath.style.strokeDashoffset = pathLength;
    progressPath.getBoundingClientRect(); // force a reflow so the reset sticks
    progressPath.style.transition = "stroke-dashoffset 10ms linear";
  }

  // Toggle visibility + update the ring from scroll position
  var handleReturnTop = function (scroll, limit) {
    if (scroll >= 50) {
      returnTopButton.classList.add("is-visible");
    } else {
      returnTopButton.classList.remove("is-visible");
    }

    if (progressPath && limit > 0) {
      var offset = pathLength - (scroll / limit) * pathLength;
      progressPath.style.strokeDashoffset = Math.max(0, offset);
    }
  };

  var nativeLimit = function () {
    return document.documentElement.scrollHeight - window.innerHeight;
  };

  // Drive from Lenis when available (it reports scroll + limit), else native
  if (typeof lenis !== "undefined" && lenis) {
    lenis.on("scroll", function (e) {
      handleReturnTop(e.scroll || window.scrollY, e.limit || nativeLimit());
    });
  } else {
    window.addEventListener("scroll", function () {
      handleReturnTop(window.scrollY, nativeLimit());
    });
  }

  // Smooth-scroll to top on click (prefer Lenis so it plays nicely)
  returnTopButton.addEventListener("click", function () {
    if (typeof lenis !== "undefined" && lenis) {
      lenis.scrollTo(0);
    } else {
      window.scrollTo({ top: 0, behavior: "smooth" });
    }
  });
}

// Latest News & Updates slider
const newsSwiper = new Swiper(".news-swiper", {
  slidesPerView: 1.15,
  spaceBetween: 20,
  grabCursor: true,
  speed: 700,
  loop: true,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  breakpoints: {
    576: {
      slidesPerView: 2,
      spaceBetween: 24,
    },
    992: {
      slidesPerView: 3,
      spaceBetween: 32,
    },
    1300: {
      slidesPerView: 4,
      spaceBetween: 40,
    },
  },
});

// ─── Hero growth arrows ──────────────────────────────────────────────────────
// Three red arrows (red line.svg) sweep into the hero once the preloader has
// finished, then rest in place.
(function () {
  var arrows = document.querySelector(".hero__arrows");
  if (!arrows) return;

  var reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)");
  var started = false;

  function startArrows() {
    if (started) return;
    started = true;

    if (reduceMotion.matches) {
      arrows.style.opacity = 1; // static, no motion
      return;
    }

    if (window.gsap) {
      // Entrance — wipe along the arrows' direction while drifting up-right,
      // then settle (no loop)
      gsap.fromTo(
        arrows,
        { opacity: 0, x: -70, y: 70, clipPath: "inset(0 100% 0 0)" },
        {
          opacity: 1,
          x: 0,
          y: 0,
          clipPath: "inset(0 -2% 0 0)",
          duration: 1.8,
          ease: "power3.out",
        },
      );
    } else {
      arrows.classList.add("is-visible"); // CSS fade-in fallback
    }
  }

  if (document.querySelector(".loader-overlay")) {
    document.addEventListener("preloader:done", startArrows, { once: true });
  } else {
    startArrows();
  }
})();

// ─── Success story background parallax ──────────────────────────────────────
// The photo drifts slower than the page scroll for a light sense of depth.
// Transform-only and scrubbed by ScrollTrigger (kept in sync with Lenis), so
// it stays cheap; the images are oversized in CSS so no edge is ever exposed.
// Targets the container so the grayscale base and the colour spotlight layer
// move together.
(function () {
  var bg = document.querySelector(".success__bg");
  if (!bg || !window.gsap || !window.ScrollTrigger) return;
  if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) return;

  gsap.fromTo(
    bg,
    { y: -60 },
    {
      y: 60,
      ease: "none",
      scrollTrigger: {
        trigger: ".success",
        start: "top bottom", // section enters the viewport
        end: "bottom top", // section leaves the viewport
        scrub: true,
      },
    },
  );
})();

// ─── Success story colour spotlight ──────────────────────────────────────────
// A full-colour copy of the photo sits over the grayscale base, masked to a
// soft ~300px circle (see .success__bg-color). The circle trails the cursor
// with an eased follow and grows/shrinks as the pointer enters and leaves.
(function () {
  var section = document.querySelector(".success");
  var colorImg = document.querySelector(".success__bg-color");
  if (!section || !colorImg) return;
  if (window.matchMedia("(hover: none)").matches) return; // no cursor to follow
  if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) return;

  var RADIUS = 300; // ≈300px spotlight diameter

  // Eased state — x/y trail the cursor, power scales the circle open/closed
  var spot = { x: 0, y: 0, tx: 0, ty: 0, power: 0, tpower: 0, seeded: false };
  var rafId = null;

  function frame() {
    rafId = null;

    spot.x += (spot.tx - spot.x) * 0.16;
    spot.y += (spot.ty - spot.y) * 0.16;
    spot.power += (spot.tpower - spot.power) * 0.1;

    colorImg.style.setProperty("--spot-x", spot.x.toFixed(1) + "px");
    colorImg.style.setProperty("--spot-y", spot.y.toFixed(1) + "px");
    colorImg.style.setProperty(
      "--spot-r",
      (RADIUS * spot.power).toFixed(1) + "px",
    );

    // Keep ticking until the spotlight has settled on its target
    var settled =
      Math.abs(spot.tx - spot.x) < 0.3 &&
      Math.abs(spot.ty - spot.y) < 0.3 &&
      Math.abs(spot.tpower - spot.power) < 0.003;

    if (!settled) rafId = requestAnimationFrame(frame);
  }

  function startLoop() {
    if (rafId === null) rafId = requestAnimationFrame(frame);
  }

  section.addEventListener("mousemove", function (e) {
    // Mask coords live in the colour layer's own box — the rect already
    // accounts for the parallax transform on the container
    var rect = colorImg.getBoundingClientRect();
    spot.tx = e.clientX - rect.left;
    spot.ty = e.clientY - rect.top;

    if (!spot.seeded) {
      // First entry — open the spotlight in place instead of sweeping in
      spot.x = spot.tx;
      spot.y = spot.ty;
      spot.seeded = true;
    }

    spot.tpower = 1;
    startLoop();
  });

  section.addEventListener("mouseleave", function () {
    spot.tpower = 0; // circle eases closed
    spot.seeded = false;
    startLoop();
  });
})();

// ─── Hero colour spotlight ───────────────────────────────────────────────────
// Same idea as the success story: a full-colour copy of the hero photo is
// masked to a soft circle that trails the cursor over the grayscale base.
(function () {
  var section = document.querySelector(".hero");
  var colorImg = document.querySelector(".hero__bg-color");
  if (!section || !colorImg) return;
  if (window.matchMedia("(hover: none)").matches) return; // no cursor to follow
  if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) return;

  var RADIUS = 300; // ≈300px spotlight diameter

  // Eased state — x/y trail the cursor, power scales the circle open/closed
  var spot = { x: 0, y: 0, tx: 0, ty: 0, power: 0, tpower: 0, seeded: false };
  var rafId = null;

  function frame() {
    rafId = null;

    spot.x += (spot.tx - spot.x) * 0.16;
    spot.y += (spot.ty - spot.y) * 0.16;
    spot.power += (spot.tpower - spot.power) * 0.1;

    colorImg.style.setProperty("--spot-x", spot.x.toFixed(1) + "px");
    colorImg.style.setProperty("--spot-y", spot.y.toFixed(1) + "px");
    colorImg.style.setProperty(
      "--spot-r",
      (RADIUS * spot.power).toFixed(1) + "px",
    );

    var settled =
      Math.abs(spot.tx - spot.x) < 0.3 &&
      Math.abs(spot.ty - spot.y) < 0.3 &&
      Math.abs(spot.tpower - spot.power) < 0.003;

    if (!settled) rafId = requestAnimationFrame(frame);
  }

  function startLoop() {
    if (rafId === null) rafId = requestAnimationFrame(frame);
  }

  section.addEventListener("mousemove", function (e) {
    var rect = colorImg.getBoundingClientRect();
    spot.tx = e.clientX - rect.left;
    spot.ty = e.clientY - rect.top;

    if (!spot.seeded) {
      // First entry — open the spotlight in place instead of sweeping in
      spot.x = spot.tx;
      spot.y = spot.ty;
      spot.seeded = true;
    }

    spot.tpower = 1;
    startLoop();
  });

  section.addEventListener("mouseleave", function () {
    spot.tpower = 0; // circle eases closed
    spot.seeded = false;
    startLoop();
  });
})();

// ─── About / Products hero colour spotlight ──────────────────────────────────
// Same effect as the home/success spotlight, wired to the inner-page heroes.
// No-ops on pages without an .about-hero or .products-hero.
(function () {
  var section = document.querySelector(
    ".about-hero, .products-hero, .services-hero, .testimonials-hero",
  );
  var colorImg = document.querySelector(
    ".about-hero__bg-color, .products-hero__bg-color, .services-hero__bg-color, .testimonials-hero__bg-color",
  );
  if (!section || !colorImg) return;
  if (window.matchMedia("(hover: none)").matches) return; // no cursor to follow
  if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) return;

  var RADIUS = 300; // ≈300px spotlight diameter

  var spot = { x: 0, y: 0, tx: 0, ty: 0, power: 0, tpower: 0, seeded: false };
  var rafId = null;

  function frame() {
    rafId = null;

    spot.x += (spot.tx - spot.x) * 0.16;
    spot.y += (spot.ty - spot.y) * 0.16;
    spot.power += (spot.tpower - spot.power) * 0.1;

    colorImg.style.setProperty("--spot-x", spot.x.toFixed(1) + "px");
    colorImg.style.setProperty("--spot-y", spot.y.toFixed(1) + "px");
    colorImg.style.setProperty(
      "--spot-r",
      (RADIUS * spot.power).toFixed(1) + "px",
    );

    var settled =
      Math.abs(spot.tx - spot.x) < 0.3 &&
      Math.abs(spot.ty - spot.y) < 0.3 &&
      Math.abs(spot.tpower - spot.power) < 0.003;

    if (!settled) rafId = requestAnimationFrame(frame);
  }

  function startLoop() {
    if (rafId === null) rafId = requestAnimationFrame(frame);
  }

  section.addEventListener("mousemove", function (e) {
    var rect = colorImg.getBoundingClientRect();
    spot.tx = e.clientX - rect.left;
    spot.ty = e.clientY - rect.top;

    if (!spot.seeded) {
      spot.x = spot.tx;
      spot.y = spot.ty;
      spot.seeded = true;
    }

    spot.tpower = 1;
    startLoop();
  });

  section.addEventListener("mouseleave", function () {
    spot.tpower = 0;
    spot.seeded = false;
    startLoop();
  });
})();

// ─── Hero title flip-fade ────────────────────────────────────────────────────
// Splits the hero heading into words and flips (rotateX) + fades each into view,
// once, after the preloader has finished. Transform/opacity only, so it never
// nudges the layout.
(function () {
  var title = document.querySelector(".hero__title");
  if (!title) return;

  var reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)");
  var played = false;
  var willAnimate = !!window.gsap && !reduceMotion.matches;

  // Hide the heading up front so it never flashes in before the flip starts.
  // Only when we can actually animate — otherwise it stays plain static text.
  // Runs while the preloader still covers the page, so the hide is unseen.
  if (willAnimate) title.style.visibility = "hidden";

  // Wrap each word in an inline-block span; keep real spaces so it wraps
  // exactly like the original heading.
  function splitWords(el) {
    var words = el.textContent.trim().split(/\s+/);
    el.textContent = "";
    var spans = [];
    words.forEach(function (word, i) {
      var span = document.createElement("span");
      span.className = "flip-word";
      span.textContent = word;
      el.appendChild(span);
      spans.push(span);
      if (i < words.length - 1) el.appendChild(document.createTextNode(" "));
    });
    return spans;
  }

  function run() {
    if (played) return;
    played = true;

    // No GSAP or reduced motion — leave the heading as plain static text
    if (!willAnimate) return;

    var words = splitWords(title);
    // Establish the hidden "from" state before revealing the title, so the
    // first painted frame is already flipped away (no full-opacity flash).
    gsap.set(words, {
      transformOrigin: "50% 100%",
      rotationX: -90,
      opacity: 0,
    });
    title.style.visibility = "visible";
    gsap.to(words, {
      rotationX: 0,
      opacity: 1,
      duration: 0.85,
      ease: "power3.out",
      stagger: 0.09,
    });
  }

  // Wait for the preloader; if there is none, run right away
  if (document.querySelector(".loader-overlay")) {
    document.addEventListener("preloader:done", run, { once: true });
  } else {
    run();
  }
})();

// ─── Archive event carousels (Swiper) ────────────────────────────────────────
// No-ops on pages without .media-archive__carousel or without Swiper loaded.
(function () {
  if (typeof Swiper === "undefined") return;
  document
    .querySelectorAll(".media-archive__carousel")
    .forEach(function (carousel) {
      new Swiper(carousel.querySelector(".media-archive__swiper"), {
        slidesPerView: "auto", // slide width follows each image's aspect
        spaceBetween: 20,
        navigation: {
          prevEl: carousel.querySelector(".archive-nav--prev"),
          nextEl: carousel.querySelector(".archive-nav--next"),
        },
      });
    });
})();

// ─── Testimonials — profile thumbs synced to the big quote slide ──────────────
// No-ops on pages without .testi-thumbs / .testi-main or without Swiper.
(function () {
  if (typeof Swiper === "undefined") return;
  var thumbsEl = document.querySelector(".testi-thumbs");
  var mainEl = document.querySelector(".testi-main");
  if (!thumbsEl || !mainEl) return;

  var thumbs = new Swiper(thumbsEl, {
    slidesPerView: 2,
    spaceBetween: 8,
    watchSlidesProgress: true,
    breakpoints: {
      480: { slidesPerView: 3 },
      768: { slidesPerView: 4 },
      992: { slidesPerView: 6 },
    },
  });

  new Swiper(mainEl, {
    slidesPerView: 1,
    spaceBetween: 0,
    speed: 2000, // slower, smoother slide
    thumbs: { swiper: thumbs },
  });
})();
