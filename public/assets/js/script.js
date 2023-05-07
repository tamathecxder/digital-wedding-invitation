
$(document).ready(function () {
    const navbar = $('.custom-navbar');
    let isScrolling = false;

    feather.replace()

    AOS.init({
        duration: 1000,
        offset: 200,
        easing: 'ease-in-out',
        delay: 0,
    });

    function debounce(func, wait = 20) {
        let timeout;
        return function () {
            const context = this;
            const args = arguments;
            clearTimeout(timeout);
            timeout = setTimeout(() => {
                timeout = null;
                func.apply(context, args);
            }, wait);
        };
    }

    function checkScroll() {
        if ($(window).width() >= 1200) {
            const showNavbarY = 600;
            const scrollY = $(window).scrollTop();

            if (scrollY > showNavbarY) {
                navbar.addClass('show-navbar');
            } else {
                navbar.removeClass('show-navbar');
            }
        }
    }

    $(window).on('scroll', function () {
        if (!isScrolling) {
            isScrolling = true;
            window.requestAnimationFrame(() => {
                checkScroll();
                isScrolling = false;
            });
        }
    });

    var audio = document.getElementById("myAudio");
    audio.play();

    $('a').on('click', function (event) {
        if (this.hash !== "") {
            event.preventDefault();

            let hash = this.hash;

            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function () {
                window.location.hash = hash;
            });
        }
    });

    const mobileNavbar = $('.mobile-navbar');
    const navToggle = $('.nav-toggle');
    const navMenu = $('.nav-menu');

    // Toggle the active class on the navbar elements
    navToggle.on('click', function () {
        console.log('clicked');
        mobileNavbar.toggleClass('active');
        navMenu.toggleClass('active');
        navToggle.toggleClass('active');
    });
});
