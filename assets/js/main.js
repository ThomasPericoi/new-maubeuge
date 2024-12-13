// On load
document.addEventListener("DOMContentLoaded", function () {
  actualHost = window.location.origin;
  // General - Set/Update variables
  function updateVariables() {
    document
      .querySelector(":root")
      .style.setProperty("--viewport-height", window.innerHeight + "px");
    document
      .querySelector(":root")
      .style.setProperty(
        "--header-height",
        document.querySelector("#header").offsetHeight + "px"
      );
  }
  window.addEventListener("resize", function () {
    updateVariables();
  });
  updateVariables();

  // General - Insert quote in the console
  console.log(
    "This theme was made by Thomas Pericoi - https://thomaspericoi.com/"
  );

  // General - Enable ASCII Printer on random
  printRandomAscii();

  // General - Elements is in view
  function toggleClassOnScroll(trigger, target) {
    if (trigger && target) {
      var elementTop = trigger.getBoundingClientRect().top;
      var elementBottom = trigger.getBoundingClientRect().bottom;
      if (
        (elementTop > window.innerHeight * 0.1 &&
          elementTop < window.innerHeight * 0.6) ||
        (elementBottom > window.innerHeight * 0.4 &&
          elementBottom < window.innerHeight * 0.9)
      ) {
        target.classList.add("js-inView");
      } else {
        target.classList.remove("js-inView");
      }
    }
  }
  function markAsViewed(trigger, target) {
    if (trigger && target) {
      if (trigger && target) {
        var elementTop = trigger.getBoundingClientRect().top;
        var elementBottom = trigger.getBoundingClientRect().bottom;
        if (
          (elementTop > window.innerHeight * 0.1 &&
            elementTop < window.innerHeight * 0.6) ||
          (elementBottom > window.innerHeight * 0.4 &&
            elementBottom < window.innerHeight * 0.9)
        ) {
          target.classList.add("js-viewed");
        }
      }
    }
  }
  window.addEventListener("scroll", () => {
    document
      .querySelectorAll(".js-toBeTriggered")
      .forEach(function (item, index) {
        toggleClassOnScroll(item, item);
      });
    document.querySelectorAll("main section").forEach(function (item, index) {
      markAsViewed(item, item);
    });
  });
  document
    .querySelectorAll(".js-toBeTriggered")
    .forEach(function (item, index) {
      toggleClassOnScroll(item, item);
    });
  document.querySelectorAll("main section").forEach(function (item, index) {
    markAsViewed(item, item);
  });

  // Element - Header - Menu
  document
    .querySelectorAll("header .menu-header>li>a")
    .forEach(function (item) {
      item.tabIndex = 0;
    });

  if (window.innerWidth < 1200) {
    document.querySelector(".nav-wrapper").toggleAttribute("inert");
    document
      .querySelector("main")
      .setAttribute(
        "aria-hidden",
        !(document.querySelector("main").getAttribute("aria-hidden") == "true"
          ? true
          : false)
      );
  }

  document.querySelectorAll(".menu-toggle").forEach(function (item) {
    item.addEventListener("click", function () {
      document.querySelector("body").classList.toggle("js-menuOpened");
      if (window.innerWidth < 1200) {
        document.querySelector(".nav-wrapper").toggleAttribute("inert");
        document
          .querySelector("main")
          .setAttribute(
            "aria-hidden",
            !(document.querySelector("main").getAttribute("aria-hidden") ==
              "true"
              ? true
              : false)
          );
      }
      document.querySelector("main").toggleAttribute("inert");
      document
        .querySelector("main")
        .setAttribute(
          "aria-hidden",
          !(document.querySelector("main").getAttribute("aria-hidden") == "true"
            ? true
            : false)
        );
      document.querySelector("footer").toggleAttribute("inert");
      document
        .querySelector("footer")
        .setAttribute(
          "aria-hidden",
          !(document.querySelector("footer").getAttribute("aria-hidden") ==
            "true"
            ? true
            : false)
        );
    });
  });

  document.querySelectorAll("#menu-toggle").forEach(function (item) {
    item.addEventListener("keydown", (event) => {
      if (event.code === "Enter" || e.keyCode === 13) {
        item.click();
      }
    });
  });

  // Template Part - Insight List
  document.querySelectorAll(".insights-list .insight button").forEach((button, index) => {
    button.addEventListener("click", function () {
      button.closest(".insight").classList.toggle("active");
    });

    button.addEventListener("keypress", function (e) {
      if (e.key === "Enter" || e.keyCode === 13) {
        button.closest(".insight").classList.toggle("active");
      }
    });
  });

  // Template Part - Jobs Tabs
  function show_content(index) {
    document.querySelector(".jobs-tabs .job-tab-content.visible") &&
      document
        .querySelector(".jobs-tabs .job-tab-content.visible")
        .classList.remove("visible");
    document
      .querySelectorAll(".jobs-tabs .job-tab-content")
    [index].classList.add("visible");
    document.querySelector(".jobs-tabs .job-tab-button.selected") &&
      document
        .querySelector(".jobs-tabs .job-tab-button.selected")
        .classList.remove("selected");
    document
      .querySelectorAll(".jobs-tabs .job-tab-button")
    [index].classList.add("selected");
  }

  document
    .querySelectorAll(".jobs-tabs .job-tab-button")
    .forEach((button, index) => {
      button.addEventListener("click", function () {
        show_content(index);
      });

      button.addEventListener("keypress", function (e) {
        if (e.key === "Enter" || e.keyCode === 13) {
          show_content(index);
        }
      });
    });
  if (document.querySelector(".jobs-tabs")) {
    show_content(0);
  }

  // Template Part - Partners Grid
  if (document.querySelector(".logos-wrapper")) {
    var init = false;
    var swiperPartners;
    function initSwiperPartners() {
      if (window.innerWidth <= 767) {
        if (!init) {
          init = true;
          swiperPartners = new Swiper(".logos-wrapper.swiper", {
            loop: true,
            slidesPerView: "auto",
            spaceBetween: 40,
            autoplay: {
              delay: 1500,
              disableOnInteraction: false,
            },
          });
        }
      } else if (init) {
        swiperPartners.destroy();
        init = false;
      }
    }
    initSwiperPartners();
    window.addEventListener("resize", initSwiperPartners);
  }

  // Template Part - Testimonials Slider
  const swiperTestimonials = new Swiper(
    ".testimonials-slider .testimonials-list",
    {
      autoHeight: true,
      slidesPerView: 1,
      spaceBetween: 16,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        768: {
          slidesPerView: 2,
        },
      },
    }
  );

  // Page - Contact Page
  if (document.querySelector("#contact-map")) {
    const contactMap = L.map("contact-map", { zoomControl: false, scrollWheelZoom: false }).setView([50.252131, 3.906879], 13);
    L.tileLayer("http://{s}.tile.osm.org/{z}/{x}/{y}.png", {
      attribution:
        '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
    }).addTo(contactMap);

    var redPointer = L.icon({
      iconUrl: '../wp-content/themes/new-maubeuge/assets/icons/pointer-red.svg',
      iconSize: [40, 61],
    });

    L.marker([50.252131, 3.906879], { icon: redPointer }).addTo(contactMap);
  }

  // Page - Job
  const swiperWorkshops = new Swiper(".job-related-workshops .workshops-list", {
    autoHeight: true,
    slidesPerView: 1.25,
    spaceBetween: 32,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    breakpoints: {
      992: {
        slidesPerView: 4,
      },
    },
  });

  if (document.querySelector(".single-avs_job")) {
    const modal = document.getElementById("jobFormModal");
    const openButton = document.getElementById("openJobFormModal");
    const closeButton = document.getElementById("closeJobFormModal");

    function openModal() {
      modal.style.display = "block";
      modal.style.visibility = "unset";
      document.body.style.overflow = "hidden";
    }

    function closeModal() {
      modal.style.display = "none";
      modal.style.visibility = "hidden";
      document.body.style.overflow = "initial";
    }

    openButton.addEventListener('click', function () {
      openModal();
    });

    closeButton.addEventListener('click', function () {
      closeModal();
    });
  }

  // Page - Page d'accueil
  const swiperHero = new Swiper(".home-hero-slider", {
    loop: true,
    autoHeight: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    autoplay: {
      delay: 5000,
      disableOnInteraction: true,
    },
  });

  if (document.querySelector(".home-numbers")) {
    var init = false;
    var swiperHomeNumbers;
    function initSwiperHomeNumbers() {
      if (window.innerWidth <= 991) {
        if (!init) {
          swiperHomeNumbers = new Swiper(".home-numbers .numbers-grid.swiper", {
            slidesPerView: 1.33,
            spaceBetween: 16,
          });
          init = true;
        }
      } else if (init) {
        swiperHomeNumbers.destroy();
        init = false;
      }
    }
    initSwiperHomeNumbers();
    window.addEventListener("resize", initSwiperHomeNumbers);
  }

  // Page - Project
  function goToPreviousProject() {
    if (document.referrer.indexOf(actualHost) >= 0) {
      window.location.href = document.referrer;
    } else {
      console.log(actualHost + "/nos-projets/");
      window.location.href = actualHost + "/nos-projets/";
    }
  }
  if (document.querySelector(".single-avs_project .btn-back")) {
    document
      .querySelector(".single-avs_project .btn-back")
      .addEventListener("click", goToPreviousProject);
  }

  // Page - Workshops
  if (document.querySelector(".post-type-archive-avs_workshop .map .workshops")) {
    if (window.innerWidth <= 991) {
      document.querySelector(".post-type-archive-avs_workshop .map .workshops h2").addEventListener("click", function () {
        document.querySelector(".post-type-archive-avs_workshop .map .workshops").classList.toggle("condensed");
      });
      document.querySelector(".post-type-archive-avs_workshop .map .workshops h2").addEventListener("keypress", function (e) {
        if (e.key === "Enter" || e.keyCode === 13) {
          document.querySelector(".post-type-archive-avs_workshop .map .workshops").classList.toggle("condensed");
        }
      });
      document.querySelector(".post-type-archive-avs_workshop .map .workshops h2").tabIndex = 0;
    }
  }
});
