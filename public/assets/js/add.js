// SWIPPER IMAGE WELCOME
var swiper = new Swiper(".mySwiper", {
    loop: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});


document.addEventListener("DOMContentLoaded", function () {
    let sticker = document.getElementById("promo-sticker");
    let closeButton = document.getElementById("close-sticker");
    let targetSection = document.querySelector(".services.section");
    let hasAppeared = false; // Untuk memastikan hanya muncul sekali
    let isClosed = false; // Menyimpan status apakah sudah ditutup

    window.addEventListener("scroll", function () {
        let sectionTop = targetSection.offsetTop;
        let scrollY = window.scrollY;

        if (!hasAppeared && !isClosed && scrollY >= sectionTop) {
            sticker.style.display = "block";
            sticker.classList.add("animate__jackInTheBox"); // Animasi masuk
            hasAppeared = true;
        }
    });

    // Event untuk menutup stiker saat tombol close diklik
    closeButton.addEventListener("click", function () {
        sticker.classList.remove("animate__jackInTheBox");
        sticker.classList.add("animate__hinge"); // Animasi keluar

        // Sembunyikan setelah animasi selesai
        setTimeout(() => {
            sticker.style.display = "none";
            isClosed = true;
        }, 2000); // Sesuaikan dengan durasi animasi hinge (2 detik)
    });
});


document.addEventListener("DOMContentLoaded", function () {
    const track = document.querySelector(".logo-track");
    
    function setAnimationSpeed() {
        const trackWidth = track.scrollWidth; // Panjang total track
        const speed = trackWidth / 100; // Semakin panjang track, semakin lama durasi animasi
        track.style.animation = `scrollLoop ${speed}s linear infinite`;
    }

    // Buat animasi secara dinamis
    setAnimationSpeed();
});


document.addEventListener("DOMContentLoaded", function () {
    const track = document.querySelector(".slider-track");
    const prevBtn = document.querySelector(".prev-btn");
    const nextBtn = document.querySelector(".next-btn");
    const images = document.querySelectorAll(".slider-track img");
    let index = 0;
    const visibleImages = 3;
    const imageWidth = images[0].clientWidth;

    function updateSlider() {
        track.style.transform = `translateX(-${index * imageWidth}px)`;
    }

    nextBtn.addEventListener("click", function () {
        if (index < images.length - visibleImages) {
            index++;
        } else {
            index = 0; // Reset ke awal jika sudah sampai akhir
        }
        updateSlider();
    });

    prevBtn.addEventListener("click", function () {
        if (index > 0) {
            index--;
        } else {
            index = images.length - visibleImages; // Pergi ke akhir jika di awal
        }
        updateSlider();
    });
});




