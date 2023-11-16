document.addEventListener("DOMContentLoaded", function () {
    var navbar = document.querySelector(".navbar");

    window.addEventListener("scroll", function () {
        var scrollPosition = window.scrollY;

        if (scrollPosition > 0) {
            // Efek saat scroll ke bawah
            navbar.style.background = "rgb(26, 26, 46, 0.7)"; // Warna dengan opacity
            navbar.style.backdropFilter = "blur(10px)"; // Efek blur
        } else {
            // Efek saat berada di atas
            navbar.style.background = "var(--primary)"; // Warna solid
            navbar.style.backdropFilter = "none"; // Hapus efek blur
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    var mySwiper = new Swiper(".hero-slider", {
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        effect: "fade",
        fadeEffect: {
            crossFade: true,
        },
        speed: 1000, // Atur durasi animasi fade menjadi 1 detik
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        loop: true,
    });
});

document.addEventListener("DOMContentLoaded", function () {
    var swiper = new Swiper(".event-slider", {
        pagination: {
            el: ".event-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        spaceBetween: 15,
        slidesPerView: 4, // Set to 1 to display one slide at a time
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        // loop: true,
        breakpoints: {
            375: {
                slidesPerView: 1,
            },
            // Ketika lebar viewport kurang dari atau sama dengan 768px
            768: {
                slidesPerView: 2, // Ubah jumlah slide menjadi 2
            },
            // Ketika lebar viewport kurang dari atau sama dengan 992px
            992: {
                slidesPerView: 4, // Ubah jumlah slide menjadi 4
            },
            // Dan seterusnya...
        },
    });
});

document.addEventListener("DOMContentLoaded", function () {
    var swiper = new Swiper(".gallery-slider", {
        pagination: {
            el: ".gallery-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        spaceBetween: 15,
        slidesPerView: 2, // Set to 1 to display one slide at a time
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
            loop: true,
        },

        breakpoints: {
            375: {
                slidesPerView: 1,
            },
            // Ketika lebar viewport kurang dari atau sama dengan 768px
            768: {
                slidesPerView: 1, // Ubah jumlah slide menjadi 2
            },
            // Ketika lebar viewport kurang dari atau sama dengan 992px
            992: {
                slidesPerView: 2, // Ubah jumlah slide menjadi 4
            },
            // Dan seterusnya...
        },
    });
});

document.addEventListener("DOMContentLoaded", function () {
    var swiper = new Swiper(".release-slider", {
        pagination: {
            el: ".release-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        spaceBetween: 15,
        slidesPerView: 6, // Set to 1 to display one slide at a time
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        // loop: true,
        breakpoints: {
            375: {
                slidesPerView: 2,
            },
            // Ketika lebar viewport kurang dari atau sama dengan 768px
            768: {
                slidesPerView: 3, // Ubah jumlah slide menjadi 2
            },
            // Ketika lebar viewport kurang dari atau sama dengan 992px
            992: {
                slidesPerView: 5,
            },
            1440: {
                slidesPerView: 6,
            },
        },
    });
});

document.addEventListener("DOMContentLoaded", function () {
    var swiper = new Swiper(".review-slider", {
        pagination: {
            el: ".review-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        spaceBetween: 15,
        slidesPerView: 6, // Set to 1 to display one slide at a time
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        // loop: true,
        breakpoints: {
            375: {
                slidesPerView: 2,
            },
            // Ketika lebar viewport kurang dari atau sama dengan 768px
            768: {
                slidesPerView: 3, // Ubah jumlah slide menjadi 2
            },
            // Ketika lebar viewport kurang dari atau sama dengan 992px
            992: {
                slidesPerView: 5,
            },
            1440: {
                slidesPerView: 6,
            },
        },
    });
});

document.addEventListener("DOMContentLoaded", function () {
    var swiper = new Swiper(".article-slider", {
        pagination: {
            el: ".article-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        spaceBetween: 15,
        slidesPerView: 4, // Set to 1 to display one slide at a time
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        // loop: true,
        breakpoints: {
            375: {
                slidesPerView: 1,
            },
            // Ketika lebar viewport kurang dari atau sama dengan 768px
            768: {
                slidesPerView: 2, // Ubah jumlah slide menjadi 2
            },
            // Ketika lebar viewport kurang dari atau sama dengan 992px
            992: {
                slidesPerView: 4, // Ubah jumlah slide menjadi 4
            },
            // Dan seterusnya...
        },
    });
});
