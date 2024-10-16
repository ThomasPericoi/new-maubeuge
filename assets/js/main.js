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
    document.querySelectorAll(
        "header .menu-header>li>a"
    )
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
                        !(document.querySelector("main").getAttribute("aria-hidden") == "true"
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
            if (event.code === "Enter") {
                item.click();
            }
        });
    });

    // Template Part - Partners Grid
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

    // Page - Page d'accueil
    const swiperHero = new Swiper('.home-hero-slider', {
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

    if (document.querySelector('#homepage-map')) {
        const homepageMap = L.map('homepage-map').setView([50.2558, 3.9314], 12);
        L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(homepageMap);
    }

    // Page - Project
    function goToPreviousProject() {
        if (document.referrer.indexOf(actualHost) >= 0) {
            window.location.href = document.referrer;
        }
        else {
            console.log(actualHost + '/nos-projets/');
            window.location.href = actualHost + '/nos-projets/';
        }
    }
    if (document.querySelector(".single-avs_project .btn-back")) {
        document.querySelector(".single-avs_project .btn-back").addEventListener("click", goToPreviousProject);
    }

    // Page - Workshops
    if (document.querySelector('#archive-workshops-map')) {
        const archiveWorkshopsMap = L.map('archive-workshops-map').setView([50.2558, 3.9314], 12);
        L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(archiveWorkshopsMap);
    }
});