/* global Splide, GLightbox, AOS */
((u) => {
    // jQuery plugin helper
    u.fn.is_exist = function () {
        return this.length > 0;
    };

    u(function () {
        // ---------- Header scroll ----------
        function handleHeaderScroll() {
            const header = u(".header-wrapper");
            if (!header.length) return;

            const upperHeight = u(".upper-header").length ? u(".upper-header").outerHeight() : 0;
            if (u(window).scrollTop() > upperHeight) {
                header.addClass("scroll-header");
            } else {
                header.removeClass("scroll-header");
            }
        }

        u(window).on("scroll", handleHeaderScroll);
        handleHeaderScroll();

        // ---------- Preloader ----------
        setTimeout(() => {
            const preloader = u(".preloader");
            if (preloader.length) {
                preloader.fadeOut(200, function () {
                    u(this).remove();
                });
            }
        }, 200);

        // ---------- Mobile menu ----------
        u(".mobile-menu-trigger").on("click", function (e) {
            e.preventDefault();
            u(".menu-block, .menu-overlay").addClass("active");
        });
        u(".menu-close, .menu-overlay").on("click", function () {
            u(".menu-block, .menu-overlay").removeClass("active");
        });

        // ---------- Dropdowns ----------
        u(".nav-item-has-children > a").on("click", function (e) {
            e.preventDefault();
            const submenu = u(this).parent().find(".sub-menu").first();
            u(".sub-menu").not(submenu).removeClass("show");
            u(".mega-menu-sub").removeClass("show");
            submenu.toggleClass("show");
        });

        u(".mega-menu-header").on("click", function (e) {
            e.preventDefault();
            const megaSub = u(this).next(".mega-menu-sub");
            u(".mega-menu-sub").not(megaSub).removeClass("show");
            u(".sub-menu").removeClass("show");
            megaSub.toggleClass("show");
        });

        // ---------- Scroll arrow ----------
        const arrowPath = document.querySelector(".arrow-round-wrap path");
        const arrowWrap = document.querySelector(".arrow-round-wrap");

        if (arrowPath && arrowWrap) {
            const totalLength = arrowPath.getTotalLength();
            arrowPath.style.strokeDasharray = `${totalLength} ${totalLength}`;
            arrowPath.style.strokeDashoffset = totalLength;
            arrowPath.style.transition = "stroke-dashoffset 10ms linear";

            const updateArrow = () => {
                const scroll = window.scrollY;
                const scrollMax = document.documentElement.scrollHeight - window.innerHeight;
                const dashOffset = totalLength - (scroll * totalLength) / scrollMax;
                arrowPath.style.strokeDashoffset = dashOffset;
                arrowWrap.classList.toggle("active-arrow", scroll > 50);
            };

            updateArrow();
            window.addEventListener("scroll", updateArrow);

            arrowWrap.addEventListener("click", (e) => {
                e.preventDefault();
                window.scrollTo({ top: 0, behavior: "smooth" });
            });
        }

        // ---------- Splide carousels ----------

        // Ensure Splide is loaded
        if (typeof Splide === 'undefined') {
            console.error('❌ Splide not loaded. Check your script path.');
            return;
        }
        if (typeof Splide === "function") {
            const initSplide = (selector, options, extensions) => {
                const el = document.querySelector(selector);
                if (el) {
                    const splideInstance = new Splide(el, options);
                    extensions ? splideInstance.mount(extensions) : splideInstance.mount();
                }
            };

            // Testimonial carousel
            initSplide("#testimonial-carousel", {
                type: "fade",
                perPage: 1,
                arrows: true,
                pagination: true,
            });

            // Feedback carousel
            initSplide("#feedback-carousel", {
                type: "loop",
                perPage: 3,
                gap: 15,
                arrows: true,
                pagination: true,
                breakpoints: { 1024: { perPage: 2 }, 768: { perPage: 1 } },
            });

            // Auto-scroll carousel
            initSplide("#autoscroll-carousel", {
                type: "loop",
                drag: "free",
                focus: "center",
                perPage: 6,
                pagination: false,
                breakpoints: { 1024: { perPage: 6 }, 768: { perPage: 4 }, 480: { perPage: 2 } },
                autoScroll: { speed: 1 },
            }, window.splide.Extensions);

            // Counter carousel
            const counterEl = document.querySelector("#counter-carousel");
            if (counterEl) {
                const splideCounter = new Splide(counterEl, {
                    type: "loop",
                    perPage: 1,
                    autoplay: true,
                    pauseOnHover: true,
                    arrows: true,
                    pagination: false,
                });
                const counterDisplay = counterEl.querySelector(".counter-carousel-counter span.display4-size");
                splideCounter.on("mounted move", () => {
                    if (counterDisplay) counterDisplay.textContent = (splideCounter.index + 1).toString();
                });
                splideCounter.mount();
            }

            // Vertical carousel
            const verticalEl = document.querySelector("#vertical-carousel");
            if (verticalEl) {
                const verticalSplide = new Splide(verticalEl, {
                    direction: "ttb",
                    height: "140px",
                    perPage: 3,
                    perMove: 1,
                    autoplay: true,
                    interval: 3000,
                    arrows: false,
                    pagination: true,
                    drag: false,
                });
                verticalSplide.on("mounted move", () => {
                    document.querySelectorAll(".splide__slide").forEach(slide => {
                        slide.classList.remove("slider-active", "slider-active-1", "slider-active-2");
                    });
                    const slides = verticalSplide.Components.Slides.get();
                    [0, 1, 2].forEach((offset, idx) => {
                        const slideObj = slides[(verticalSplide.index + offset) % slides.length];
                        if (slideObj) {
                            if (idx === 0) slideObj.slide.classList.add("slider-active-2");
                            if (idx === 1) slideObj.slide.classList.add("slider-active-1");
                            if (idx === 2) slideObj.slide.classList.add("slider-active");
                        }
                    });
                });
                verticalSplide.mount();
            }
        }

        // ---------- Exsit counter animation ----------
        const counterSection = u("#exsit-counter");
        if (counterSection.length) {
            let counted = false;
            u(window).on("scroll", function () {
                const offsetTop = counterSection.offset().top - window.innerHeight;
                if (!counted && u(window).scrollTop() > offsetTop) {
                    u(".exsit-counter").each(function () {
                        const elem = u(this);
                        const target = parseFloat(elem.data("percentage"));
                        u({ countNum: 0 }).animate({ countNum: target }, {
                            duration: 2000,
                            step: function (now) {
                                elem.text(Number.isInteger(target) ? Math.floor(now) : now.toFixed(1));
                            },
                            complete: function () {
                                elem.text(target);
                            },
                        });
                    });
                    counted = true;
                }
            });
        }

        // ---------- Search toggle ----------
        const searchBtn = u("#search-btn");
        const searchWrap = u(".search-wrap");
        const closeSearch = u("#close-search");

        searchBtn.on("click", () => searchWrap.addClass("active"));
        closeSearch.on("click", () => searchWrap.removeClass("active"));

        // ---------- Theme toggle ----------
        const darkClass = "dark-theme";
        const darkSwitch = u("#dark-switch");

        const updateLogo = () => {
            u(".brand-logo").each(function () {
                const img = u(this);
                const darkSrc = img.data("dark");
                img.attr("src", u("body").hasClass(darkClass) ? darkSrc : darkSrc.replace("-w", ""));
            });
        };

        if (localStorage.getItem("theme") === "dark") {
            u("body").addClass(darkClass);
            darkSwitch.addClass("active");
        }
        updateLogo();

        darkSwitch.on("click", function () {
            u("body").toggleClass(darkClass);
            if (u("body").hasClass(darkClass)) {
                localStorage.setItem("theme", "dark");
                darkSwitch.addClass("active");
            } else {
                localStorage.setItem("theme", "light");
                darkSwitch.removeClass("active");
            }
            updateLogo();
        });

        // ---------- Initialize AOS ----------
        if (typeof AOS !== "undefined") {
            AOS.init({ duration: 800, once: true });
        }

        // ---------- Initialize GLightbox ----------
        if (typeof GLightbox === "function") {
            GLightbox({ selector: ".glightbox" });
        }
    });
})(jQuery);
