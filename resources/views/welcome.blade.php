@extends('layouts.pengunjung')

@section('title', 'Elips Academy - Kursus Komputer Surabaya Sidoarjo')

@section('content')

    <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s"
                                data-wow-delay="1s">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2>Ikuti Program Profesional 1 Tahun Komputer dan Desain di Elips Academy</h2>
                                        <p>Elips Academy menghadirkan Program Profesional 1 Tahun untuk membangun karier di
                                            desain & komputer. Dengan metode <b>hands-on</b>, <b>project-based learning</b>,
                                            dan <b>update teknologi terbaru</b>, Anda akan siap bersaing di dunia digital!
                                            Daftar
                                            sekarang dan kuasai masa depan!</p>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="white-button first-button scroll-to-section">
                                            <a href="#contact"><i class="bi bi-search me-1"></i> Lihat Program</a>
                                        </div>
                                        <div class="white-button scroll-to-section">
                                            <a href="#contact"><i class="bi bi-calendar3 me-2"></i>Daftar Kelas</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                <img src="assets/images/slider-dec.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="promo-sticker" class="animate__animated">
        <span id="close-sticker">✖</span>
        Daftar Sekarang!  
        <a href="https://elipsacademy.com" class="promo-button">Gabung</a>
    </div>

    <div id="services" class="services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h4>Belajar <em>Lebih Mudah</em> dengan Program Terarah</h4>
                        <img src="assets/images/heading-line-dec.png" alt="">
                        <p>Teknologi terus berkembang, apakah Anda siap mengikuti? Elips Academy menawarkan Program 1 Tahun
                            Komputer dan Desain untuk membekali Anda dengan skill yang dibutuhkan industri modern. Belajar
                            berbasis
                            proyek, instruktur berpengalaman, dan kurikulum terkini <b>semua ada di sini</b> Gabung sekarang
                            &
                            jadilah profesional masa depan</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="swi">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="assets/images/10.png" alt="Gambar 1"></div>
                                <div class="swiper-slide"><img src="assets/images/11.png" alt="Gambar 2"></div>
                                <div class="swiper-slide"><img src="assets/images/12.png" alt="Gambar 3"></div>
                                <div class="swiper-slide"><img src="assets/images/13.png" alt="Gambar 4"></div>
                                <div class="swiper-slide"><img src="assets/images/12.png" alt="Gambar 5"></div>
                                <div class="swiper-slide"><img src="assets/images/11.png" alt="Gambar 6"></div>
                            </div>
                            <!-- Tombol Navigasi -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- Pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 cats">
                    <div class="row wow fadeInDown cat">
                        <div class="category">
                            <h5 class="text-light pt-3 pb-4 ps-2">MATERI PEMBELAJARAN</h5>
                            <div class="row d-flex justify-content-around pt-2 pb-2">
                                <div class="col-2 col-lg-4 text-center pb-3">
                                    <a href="#">
                                        <img src="assets/images/43.png" class="img mb-2" alt="">
                                        <p class="text-light fw-normal lh-base">Komputer</p>
                                    </a>
                                </div>
                                <div class="col-2 col-lg-4 text-center  pb-3">
                                    <a href="#">
                                        <img src="assets/images/39.png" class="img mb-2" alt="">
                                        <p class="text-light fw-normal lh-base">Office</p>
                                    </a>
                                </div>
                                <div class="col-2 col-lg-4 text-center pb-3">
                                    <a href="#">
                                        <img src="assets/images/41.png" class="img mb-2" alt="">
                                        <p class="text-light fw-normal lh-base">Desain</p>
                                    </a>
                                </div>
                                <div class="col-2 col-lg-4 text-center pb-3">
                                    <a href="#">
                                        <img src="assets/images/40.png" class="img mb-2" alt="">
                                        <p class="text-light fw-normal lh-base">Digital Marketing</p>
                                    </a>
                                </div>
                                <div class="col-2 col-lg-4 text-center pb-3">
                                    <a href="#">
                                        <img src="assets/images/40.png" class="img mb-2" alt="">
                                        <p class="text-light fw-normal lh-base">Bahasa Inggris</p>
                                    </a>
                                </div>
                                <div class="col-2 col-lg-4 text-center pb-3">
                                    <a href="#">
                                        <img src="assets/images/46.png" class="img mb-2" alt="">
                                        <p class="text-light fw-normal lh-base">Lihat Detail</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row sulit">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h4>Apakah <em>Kamu</em> Mengalami Hal Seperti Ini?</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <ul>
                        <li style="display: flex; align-items: center; gap: 8px;" class="mb-3">
                            <div class="elementor-icon-list-icon mb-2" style="display: flex; align-items: center;">
                                <svg aria-hidden="true" class="e-font-icon-svg e-far-sad-tear" viewBox="0 0 496 512"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 448c-110.3 0-200-89.7-200-200S137.7 56 248 56s200 89.7 200 200-89.7 200-200 200zm8-152c-13.2 0-24 10.8-24 24s10.8 24 24 24c23.8 0 46.3 10.5 61.6 28.8 8.1 9.8 23.2 11.9 33.8 3.1 10.2-8.5 11.6-23.6 3.1-33.8C330 320.8 294.1 304 256 304zm-88-64c17.7 0 32-14.3 32-32s-14.3-32-32-32-32 14.3-32 32 14.3 32 32 32zm160-64c-17.7 0-32 14.3-32 32s14.3 32 32 32 32-14.3 32-32-14.3-32-32-32zm-165.6 98.8C151 290.1 126 325.4 126 342.9c0 22.7 18.8 41.1 42 41.1s42-18.4 42-41.1c0-17.5-25-52.8-36.4-68.1-2.8-3.7-8.4-3.7-11.2 0z">
                                    </path>
                                </svg>
                            </div>
                            <span class="elementor-icon-list-text fw-semibold">Mau melamar kerja tapi tidak punya skill dan
                                sertifikat
                                komputer?</span>
                        </li>
                        <li style="display: flex; align-items: center; gap: 8px;" class="mb-3">
                            <div class="elementor-icon-list-icon mb-2" style="display: flex; align-items: center;">
                                <svg aria-hidden="true" class="e-font-icon-svg e-far-sad-tear" viewBox="0 0 496 512"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 448c-110.3 0-200-89.7-200-200S137.7 56 248 56s200 89.7 200 200-89.7 200-200 200zm8-152c-13.2 0-24 10.8-24 24s10.8 24 24 24c23.8 0 46.3 10.5 61.6 28.8 8.1 9.8 23.2 11.9 33.8 3.1 10.2-8.5 11.6-23.6 3.1-33.8C330 320.8 294.1 304 256 304zm-88-64c17.7 0 32-14.3 32-32s-14.3-32-32-32-32 14.3-32 32 14.3 32 32 32zm160-64c-17.7 0-32 14.3-32 32s14.3 32 32 32 32-14.3 32-32-14.3-32-32-32zm-165.6 98.8C151 290.1 126 325.4 126 342.9c0 22.7 18.8 41.1 42 41.1s42-18.4 42-41.1c0-17.5-25-52.8-36.4-68.1-2.8-3.7-8.4-3.7-11.2 0z">
                                    </path>
                                </svg>
                            </div>
                            <span class="elementor-icon-list-text fw-semibold">Mau kuliah tapi terkendala dengan
                                biaya?</span>
                        </li>
                        <li style="display: flex; align-items: center; gap: 8px;" class="mb-3">
                            <div class="elementor-icon-list-icon mb-2" style="display: flex; align-items: center;">
                                <svg aria-hidden="true" class="e-font-icon-svg e-far-sad-tear" viewBox="0 0 496 512"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 448c-110.3 0-200-89.7-200-200S137.7 56 248 56s200 89.7 200 200-89.7 200-200 200zm8-152c-13.2 0-24 10.8-24 24s10.8 24 24 24c23.8 0 46.3 10.5 61.6 28.8 8.1 9.8 23.2 11.9 33.8 3.1 10.2-8.5 11.6-23.6 3.1-33.8C330 320.8 294.1 304 256 304zm-88-64c17.7 0 32-14.3 32-32s-14.3-32-32-32-32 14.3-32 32 14.3 32 32 32zm160-64c-17.7 0-32 14.3-32 32s14.3 32 32 32 32-14.3 32-32-14.3-32-32-32zm-165.6 98.8C151 290.1 126 325.4 126 342.9c0 22.7 18.8 41.1 42 41.1s42-18.4 42-41.1c0-17.5-25-52.8-36.4-68.1-2.8-3.7-8.4-3.7-11.2 0z">
                                    </path>
                                </svg>
                            </div>
                            <span class="elementor-icon-list-text fw-semibold">Tidak ada izin dari orang tua kuliah di luar
                                kota?</span>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <ul>
                        <li style="display: flex; align-items: center; gap: 8px;" class="mb-3">
                            <div class="elementor-icon-list-icon mb-2" style="display: flex; align-items: center;">
                                <svg aria-hidden="true" class="e-font-icon-svg e-far-sad-tear" viewBox="0 0 496 512"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 448c-110.3 0-200-89.7-200-200S137.7 56 248 56s200 89.7 200 200-89.7 200-200 200zm8-152c-13.2 0-24 10.8-24 24s10.8 24 24 24c23.8 0 46.3 10.5 61.6 28.8 8.1 9.8 23.2 11.9 33.8 3.1 10.2-8.5 11.6-23.6 3.1-33.8C330 320.8 294.1 304 256 304zm-88-64c17.7 0 32-14.3 32-32s-14.3-32-32-32-32 14.3-32 32 14.3 32 32 32zm160-64c-17.7 0-32 14.3-32 32s14.3 32 32 32 32-14.3 32-32-14.3-32-32-32zm-165.6 98.8C151 290.1 126 325.4 126 342.9c0 22.7 18.8 41.1 42 41.1s42-18.4 42-41.1c0-17.5-25-52.8-36.4-68.1-2.8-3.7-8.4-3.7-11.2 0z">
                                    </path>
                                </svg>
                            </div>
                            <span class="elementor-icon-list-text fw-semibold">Belum mengenal atau mempelajari komputer
                                sama sekali?</span>
                        </li>
                        <li style="display: flex; align-items: center; gap: 8px;" class="mb-3">
                            <div class="elementor-icon-list-icon mb-2" style="display: flex; align-items: center;">
                                <svg aria-hidden="true" class="e-font-icon-svg e-far-sad-tear" viewBox="0 0 496 512"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 448c-110.3 0-200-89.7-200-200S137.7 56 248 56s200 89.7 200 200-89.7 200-200 200zm8-152c-13.2 0-24 10.8-24 24s10.8 24 24 24c23.8 0 46.3 10.5 61.6 28.8 8.1 9.8 23.2 11.9 33.8 3.1 10.2-8.5 11.6-23.6 3.1-33.8C330 320.8 294.1 304 256 304zm-88-64c17.7 0 32-14.3 32-32s-14.3-32-32-32-32 14.3-32 32 14.3 32 32 32zm160-64c-17.7 0-32 14.3-32 32s14.3 32 32 32 32-14.3 32-32-14.3-32-32-32zm-165.6 98.8C151 290.1 126 325.4 126 342.9c0 22.7 18.8 41.1 42 41.1s42-18.4 42-41.1c0-17.5-25-52.8-36.4-68.1-2.8-3.7-8.4-3.7-11.2 0z">
                                    </path>
                                </svg>
                            </div>
                            <span class="elementor-icon-list-text fw-semibold">Mau kursus dulu tapi setelah itu mau lanjut
                                kuliah?</span>
                        </li>
                        <li style="display: flex; align-items: center; gap: 8px;" class="mb-3">
                            <div class="elementor-icon-list-icon mb-2" style="display: flex; align-items: center;">
                                <svg aria-hidden="true" class="e-font-icon-svg e-far-sad-tear" viewBox="0 0 496 512"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 448c-110.3 0-200-89.7-200-200S137.7 56 248 56s200 89.7 200 200-89.7 200-200 200zm8-152c-13.2 0-24 10.8-24 24s10.8 24 24 24c23.8 0 46.3 10.5 61.6 28.8 8.1 9.8 23.2 11.9 33.8 3.1 10.2-8.5 11.6-23.6 3.1-33.8C330 320.8 294.1 304 256 304zm-88-64c17.7 0 32-14.3 32-32s-14.3-32-32-32-32 14.3-32 32 14.3 32 32 32zm160-64c-17.7 0-32 14.3-32 32s14.3 32 32 32 32-14.3 32-32-14.3-32-32-32zm-165.6 98.8C151 290.1 126 325.4 126 342.9c0 22.7 18.8 41.1 42 41.1s42-18.4 42-41.1c0-17.5-25-52.8-36.4-68.1-2.8-3.7-8.4-3.7-11.2 0z">
                                    </path>
                                </svg>
                            </div>
                            <span class="elementor-icon-list-text fw-semibold">Tidak punya fasilitas untuk belajar
                                komputer?</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="striped text-center mt-5 animate__animated animate__fadeInUp">
        <h2 class="fw-semibold text-light pt-2 pb-2 interactive-text">
            PUNYA MASALAH DI ATAS DAN BINGUNG HARUS MULAI DARI MANA?
        </h2>
        <h4 class="fw-semibold text-light pb-2 interactive-subtitle">
            Kursus Program Profesional 1 Tahun <span class="highlight-text"> SOLUSINYA!</span>
        </h4>
    </div>


    <div id="about" class="about-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="section-heading">
                        <h4>Informasi Tentang <em>Elips Academy</em></h4>
                        <p>ELIPS ACADEMY menghadirkan <b>Program Profesional 1 Tahun Komputer dan Desain</b>, pilihan
                            terbaik bagi
                            Anda yang ingin belajar cepat dan langsung kerja. Dengan materi terbaik seperti Desain Grafis,
                            Web Programming, IT dan Multimedia, serta Aplikasi Perkantoran, anda akan mendapatkan
                            pengalaman nyata dalam proyek industri. Serta, kami juga membantu penyaluran
                            kerja ke perusahaan terkemuka, memastikan setiap lulusan siap berkarier di bidangnya.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="box-item">
                                <h4><a href="#">Rekam Jejak Berpengalaman</a></h4>
                                <p>Telah berdiri sejak 1990 dan masih terus aktif berkembang hingga saat ini.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box-item">
                                <h4><a href="#">Kurikulum Sesuai Kebutuhan Kerja</a></h4>
                                <p>Metode pembelajaran dan materi sesuai dengan yang dibutuhkan oleh perusahaan.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box-item">
                                <h4><a href="#">Kerjasama Berbagai Perusahaan</a></h4>
                                <p>Menjalin banyak kerjasama dengan perusahaan negeri ataupun swasta dengan baik.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box-item">
                                <h4><a href="#">Pengajar Yang Berpengalaman</a></h4>
                                <p>Memiliki pengajar yang profesional dan berpengalaman dibidangnya masing-masing.</p>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <p>Jangan lewatkan kesempatan untuk meningkatkan keterampilan Anda dan
                                mempersiapkan diri untuk karier yang lebih sukses. <b>Daftarkan diri Anda</b>
                                sekarang di Elips Academy dan mulai perjalanan belajar Anda bersama kami.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-image">
                        <img src="assets/images/about-right-dec.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="facility" class="facility section">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading  wow fadeInDown mb-5" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h4><em>Fasilitas</em> Yang Akan Anda Dapatkan</h4>
                    </div>
                </div>
            </div>

            <div class="row  wow fadeInDown mb-3">
                <div class="col-lg-4 col-6">
                    <div class="service-item third-service">
                        <div class="icon"></div>
                        <h4>DESAIN GRAFIS</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-6">
                    <div class="service-item fourth-service">
                        <div class="icon"></div>
                        <h4>ARSITEKTUR INTERIOR</h4>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-item fiveth-service">
                        <div class="icon"></div>
                        <h4>WEB PROGRAMMING</h4>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-item sixth-service">
                        <div class="icon"></div>
                        <h4>TEKNIK MESIN DAN SIPIL</h4>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-item seventh-service">
                        <div class="icon"></div>
                        <h4>SKETCHUP VRAY</h4>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-item eighth-service">
                        <div class="icon"></div>
                        <h4>LIHAT SEMUA PROGRAM</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div id="clients" class="the-clients">
        <div class="container">
            <div class="row">
                <div class="logo-slider">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h4>Klien <em>dan</em> Partner Kami</h4>
                        </div>
                        <div class="logo-track mb-5">
                            <img src="assets/images/23.png" alt="Company 1">
                            <img src="assets/images/25.png" alt="Company 3">
                            <img src="assets/images/27.png" alt="Company 5">
                            <img src="assets/images/29.png" alt="Company 7">
                            <img src="assets/images/23.png" alt="Company 1">
                            <img src="assets/images/25.png" alt="Company 3">
                            <img src="assets/images/27.png" alt="Company 5">
                            <img src="assets/images/29.png" alt="Company 7">
                            <img src="assets/images/23.png" alt="Company 1">
                            <img src="assets/images/25.png" alt="Company 3">
                            <img src="assets/images/27.png" alt="Company 5">
                            <img src="assets/images/29.png" alt="Company 7">
                            <img src="assets/images/23.png" alt="Company 1">
                            <img src="assets/images/25.png" alt="Company 3">
                            <img src="assets/images/27.png" alt="Company 5">
                            <img src="assets/images/29.png" alt="Company 7">
                            <img src="assets/images/23.png" alt="Company 1">
                            <img src="assets/images/25.png" alt="Company 3">
                            <img src="assets/images/27.png" alt="Company 5">    
                        </div>
                        <div class="image-slider">
                            <button class="prev-btn">&#10094;</button>
                            <div class="slider-container">
                                <div class="slider-track">
                                    <img src="assets/images/errors.png" alt="Image 1">
                                    <img src="assets/images/error.png" alt="Image 2">
                                    <img src="assets/images/errors.png" alt="Image 3">
                                    <img src="assets/images/error.png" alt="Image 4">
                                    <img src="assets/images/errors.png" alt="Image 5">
                                    <img src="assets/images/error.png" alt="Image 4">
                                    <img src="assets/images/errors.png" alt="Image 5">
                                    <img src="assets/images/error.png" alt="Image 4">
                                    <img src="assets/images/errors.png" alt="Image 5">
                                </div>
                            </div>
                            <button class="next-btn">&#10095;</button>
                        </div>
                        
                    </div>
                    <div class="col-lg-12">
                        <div class="naccs">
                            <div class="grid">
                                <div class="row">
                                    <div class="col-lg-7 align-self-center">
                                        <div class="menu">
                                            <div class="first-thumb active">
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-sm-4 col-12">
                                                            <h4>David Martino Co</h4>
                                                            <span class="date">30 November 2021</span>
                                                        </div>
                                                        <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                                                            <span class="category">Financial Apps</span>
                                                        </div>
                                                        <div class="col-lg-4 col-sm-4 col-12">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <span class="rating">4.8</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-sm-4 col-12">
                                                            <h4>Jake Harris Nyo</h4>
                                                            <span class="date">29 November 2021</span>
                                                        </div>
                                                        <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                                                            <span class="category">Digital Business</span>
                                                        </div>
                                                        <div class="col-lg-4 col-sm-4 col-12">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <span class="rating">4.5</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-sm-4 col-12">
                                                            <h4>May Catherina</h4>
                                                            <span class="date">27 November 2021</span>
                                                        </div>
                                                        <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                                                            <span class="category">Business &amp; Economics</span>
                                                        </div>
                                                        <div class="col-lg-4 col-sm-4 col-12">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <span class="rating">4.7</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-sm-4 col-12">
                                                            <h4>Random User</h4>
                                                            <span class="date">24 November 2021</span>
                                                        </div>
                                                        <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                                                            <span class="category">New App Ecosystem</span>
                                                        </div>
                                                        <div class="col-lg-4 col-sm-4 col-12">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <span class="rating">3.9</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="last-thumb">
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-sm-4 col-12">
                                                            <h4>Mark Amber Do</h4>
                                                            <span class="date">21 November 2021</span>
                                                        </div>
                                                        <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                                                            <span class="category">Web Development</span>
                                                        </div>
                                                        <div class="col-lg-4 col-sm-4 col-12">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <span class="rating">4.3</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <ul class="nacc">
                                            <li class="active">
                                                <div>
                                                    <div class="thumb">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="client-content">
                                                                    <img src="assets/images/quote.png" alt="">
                                                                    <p>“Lorem ipsum dolor sit amet, consectetur adpiscing
                                                                        elit, sed do eismod tempor idunte ut labore et
                                                                        dolore magna aliqua darwin kengan
                                                                        lorem ipsum dolor sit amet, consectetur picing elit
                                                                        massive big blasta.”</p>
                                                                </div>
                                                                <div class="down-content">
                                                                    <img src="assets/images/client-image.jpg"
                                                                        alt="">
                                                                    <div class="right-content">
                                                                        <h4>David Martino</h4>
                                                                        <span>CEO of David Company</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <div class="thumb">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="client-content">
                                                                    <img src="assets/images/quote.png" alt="">
                                                                    <p>“CTO, Lorem ipsum dolor sit amet, consectetur
                                                                        adpiscing elit, sed do eismod tempor idunte ut
                                                                        labore et dolore magna aliqua darwin kengan
                                                                        lorem ipsum dolor sit amet, consectetur picing elit
                                                                        massive big blasta.”</p>
                                                                </div>
                                                                <div class="down-content">
                                                                    <img src="assets/images/client-image.jpg"
                                                                        alt="">
                                                                    <div class="right-content">
                                                                        <h4>Jake H. Nyo</h4>
                                                                        <span>CTO of Digital Company</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <div class="thumb">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="client-content">
                                                                    <img src="assets/images/quote.png" alt="">
                                                                    <p>“May, Lorem ipsum dolor sit amet, consectetur
                                                                        adpiscing elit, sed do eismod tempor idunte ut
                                                                        labore et dolore magna aliqua darwin kengan
                                                                        lorem ipsum dolor sit amet, consectetur picing elit
                                                                        massive big blasta.”</p>
                                                                </div>
                                                                <div class="down-content">
                                                                    <img src="assets/images/client-image.jpg"
                                                                        alt="">
                                                                    <div class="right-content">
                                                                        <h4>May C.</h4>
                                                                        <span>Founder of Catherina Co.</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <div class="thumb">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="client-content">
                                                                    <img src="assets/images/quote.png" alt="">
                                                                    <p>“Lorem ipsum dolor sit amet, consectetur adpiscing
                                                                        elit, sed do eismod tempor idunte ut labore et
                                                                        dolore magna aliqua darwin kengan
                                                                        lorem ipsum dolor sit amet, consectetur picing elit
                                                                        massive big blasta.”</p>
                                                                </div>
                                                                <div class="down-content">
                                                                    <img src="assets/images/client-image.jpg"
                                                                        alt="">
                                                                    <div class="right-content">
                                                                        <h4>Random Staff</h4>
                                                                        <span>Manager, Digital Company</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <div class="thumb">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="client-content">
                                                                    <img src="assets/images/quote.png" alt="">
                                                                    <p>“Mark, Lorem ipsum dolor sit amet, consectetur
                                                                        adpiscing elit, sed do eismod tempor idunte ut
                                                                        labore et dolore magna aliqua darwin kengan
                                                                        lorem ipsum dolor sit amet, consectetur picing elit
                                                                        massive big blasta.”</p>
                                                                </div>
                                                                <div class="down-content">
                                                                    <img src="assets/images/client-image.jpg"
                                                                        alt="">
                                                                    <div class="right-content">
                                                                        <h4>Mark Am</h4>
                                                                        <span>CTO, Amber Do Company</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="pricing" class="pricing-tables">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="section-heading">
                            <h4>We Have The Best Pre-Order <em>Prices</em> You Can Get</h4>
                            <img src="assets/images/heading-line-dec.png" alt="">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eismod tempor incididunt ut
                                labore et dolore magna.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="pricing-item-regular">
                            <span class="price">$12</span>
                            <h4>Standard Plan App</h4>
                            <div class="icon">
                                <img src="assets/images/pricing-table-01.png" alt="">
                            </div>
                            <ul>
                                <li>Lorem Ipsum Dolores</li>
                                <li>20 TB of Storage</li>
                                <li class="non-function">Life-time Support</li>
                                <li class="non-function">Premium Add-Ons</li>
                                <li class="non-function">Fastest Network</li>
                                <li class="non-function">More Options</li>
                            </ul>
                            <div class="border-button">
                                <a href="#">Purchase This Plan Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="pricing-item-pro">
                            <span class="price">$25</span>
                            <h4>Business Plan App</h4>
                            <div class="icon">
                                <img src="assets/images/pricing-table-01.png" alt="">
                            </div>
                            <ul>
                                <li>Lorem Ipsum Dolores</li>
                                <li>50 TB of Storage</li>
                                <li>Life-time Support</li>
                                <li>Premium Add-Ons</li>
                                <li class="non-function">Fastest Network</li>
                                <li class="non-function">More Options</li>
                            </ul>
                            <div class="border-button">
                                <a href="#">Purchase This Plan Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="pricing-item-regular">
                            <span class="price">$66</span>
                            <h4>Premium Plan App</h4>
                            <div class="icon">
                                <img src="assets/images/pricing-table-01.png" alt="">
                            </div>
                            <ul>
                                <li>Lorem Ipsum Dolores</li>
                                <li>120 TB of Storage</li>
                                <li>Life-time Support</li>
                                <li>Premium Add-Ons</li>
                                <li>Fastest Network</li>
                                <li>More Options</li>
                            </ul>
                            <div class="border-button">
                                <a href="#">Purchase This Plan Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

    @endsection
