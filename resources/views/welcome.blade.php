@extends('layouts.pengunjung')

@section('title', 'Elips Academy | Kursus Komputer Surabaya Sidoarjo')

@section('content')

    <div class="main-banner wow fadeIn" id="home" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s"
                                data-wow-delay="1s">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2>Tempat Kursus Komputer di Sidoarjo dengan Materi Lengkap & Bersertifikat</h2>
                                        <p>Elips Academy merupakan lembaga kursus resmi dan profesional untuk membangun karier di
                                            desain & komputer. Dengan metode <b>hands-on</b>, <b>project-based learning</b>,
                                            dan <b>update teknologi terbaru</b>, Anda akan siap bersaing di dunia digital!
                                            Daftar
                                            sekarang dan kuasai masa depan!</p>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="white-button first-button scroll-to-section">
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#modalHubungiKami">
                                                <i class="bi bi-telephone-inbound-fill"></i> Hubungi Kami
                                            </a>
                                        </div>
                                        <div class="white-button scroll-to-section">
                                            <a href="{{ route('program') }}"><i class="bi bi-calendar3 me-2"></i>Daftar Kelas</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                <img src="{{ asset('assets/images/slider-dec.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- ANIMATION DAFTAR --}}
    {{-- <div id="promo-sticker" class="animate__animated">
        <span id="close-sticker">✖</span>
        Daftar Sekarang!  
        <a href="https://elipsacademy.com" class="promo-button">Gabung</a>
    </div> --}}

    <div id="services" class="services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h4>Belajar <em>Lebih Mudah</em> dengan Program Terarah</h4>
                        <img src="{{ asset('assets/images/heading-line-dec.png') }}" alt="">
                        <p>Teknologi terus berkembang, apakah Anda siap mengikuti? Elips Academy menawarkan layanan kursus
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
                                <div class="swiper-slide"><img src="{{ asset('assets/images/10.png') }}" alt="Gambar 1"></div>
                                <div class="swiper-slide"><img src="{{ asset('assets/images/10.png') }}" alt="Gambar 2"></div>
                                <div class="swiper-slide"><img src="{{ asset('assets/images/10.png') }}" alt="Gambar 3"></div>
                                <div class="swiper-slide"><img src="{{ asset('assets/images/10.png') }}" alt="Gambar 4"></div>
                                <div class="swiper-slide"><img src="{{ asset('assets/images/10.png') }}" alt="Gambar 5"></div>
                                <div class="swiper-slide"><img src="{{ asset('assets/images/10.png') }}" alt="Gambar 6"></div>
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
                            <h5 class="text-light pt-3 pb-4 ps-2">KURSUS UNGGULAN</h5>
                            <div class="row d-flex justify-content-around pt-2 pb-2">
                                <div class="col-2 col-lg-4 text-center pb-3">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalDaftarKelas" data-program="Coding">
                                        <img src="{{ asset('assets/images/43.png') }}" class="img mb-2" alt="">
                                        <p class="text-light fw-normal lh-base">Coding</p>
                                    </a>
                                </div>
                                <div class="col-2 col-lg-4 text-center  pb-3">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalDaftarKelas" data-program="Office">
                                        <img src="{{ asset('assets/images/39.png') }}" class="img mb-2" alt="">
                                        <p class="text-light fw-normal lh-base">Office</p>
                                    </a>
                                </div>
                                <div class="col-2 col-lg-4 text-center pb-3">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalDaftarKelas" data-program="Desain">
                                        <img src="{{ asset('assets/images/41.png') }}" class="img mb-2" alt="">
                                        <p class="text-light fw-normal lh-base">Desain</p>
                                    </a>
                                </div>
                                <div class="col-2 col-lg-4 text-center pb-3">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalDaftarKelas" data-program="Digital Marketing">
                                        <img src="{{ asset('assets/images/40.png') }}" class="img mb-2" alt="">
                                        <p class="text-light fw-normal lh-base">Digital Marketing</p>
                                    </a>
                                </div>
                                <div class="col-2 col-lg-4 text-center pb-3">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalDaftarKelas" data-program="AutoCAD">
                                        <img src="{{ asset('assets/images/44.png') }}" class="img mb-2" alt="">
                                        <p class="text-light fw-normal lh-base">AutoCAD</p>
                                    </a>
                                </div>
                                <div class="col-2 col-lg-4 text-center pb-3 lain">
                                    <a href="{{ route('program') }}">
                                        <img src="{{ asset('assets/images/46.png') }}" class="img mb-2" alt="">
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
            Kursus Program Profesional di Elips Academy <span class="highlight-text"> SOLUSINYA!</span>
        </h4>
    </div>


    <div id="about" class="about-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="section-heading">
                        <h4>Informasi Tentang <em>Elips Academy</em></h4>
                        <p>ELIPS ACADEMY menghadirkan <b>layanan kursus profesional Komputer dan Desain</b>, pilihan
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
                        <img src="{{ asset('assets/images/about-right-dec.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    {{-- TAMBAHKAN SLIDER INSTANSI YANG TELAH BEKERJASAMA --}}




    {{-- TAMBHKAN VISI MISI --}}





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
                <div class="col-lg-3 col-6 p-2">
                    <div class="service-item">
                        <div class="icon"><i class="ph ph-desktop-tower"></i></div>
                        <h4>FASILITAS KOMPUTER</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-6 p-2">
                    <div class="service-item">
                        <div class="icon"><i class="ph ph-chalkboard-teacher"></i></div>
                        <h4>TENTOR BERPENGALAMAN</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-6 p-2">
                    <div class="service-item">
                        <div class="icon"><i class="ph ph-wind"></i></div>
                        <h4>RUANGAN BER AC</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-6 p-2">
                    <div class="service-item">
                        <div class="icon"><i class="ph ph-files"></i></div>
                        <h4>MATERI LENGKAP</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-6 p-2">
                    <div class="service-item">
                        <div class="icon"><i class="ph ph-projector-screen-chart"></i></div>
                        <h4>MEDIA PRESENTASI</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-6 p-2">
                    <div class="service-item">
                        <div class="icon"><i class="ph ph-certificate"></i></div>
                        <h4>SERTIFIKAT RESMI</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-6 p-2">
                    <div class="service-item">
                        <div class="icon"><i class="ph ph-sparkle"></i></div>
                        <h4>GARANSI MAHIR</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-6 p-2">
                    <div class="service-item">
                        <div class="icon"><i class="ph ph-users-four"></i></div>
                        <h4>PENYALURAN KERJA</h4>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    @endsection
