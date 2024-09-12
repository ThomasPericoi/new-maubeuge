// On load
document.addEventListener("DOMContentLoaded", function () {
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
        .querySelectorAll(
            "header .menu-header>li>a, .super-menu-wrapper .menu-header li a"
        )
        .forEach(function (item) {
            item.tabIndex = 0;
        });
});