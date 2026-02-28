@extends('layouts.pengunjung')

@section('title', 'Program Kursus - Elips Academy')

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
                                    <h2>Program Kursus Komputer Lengkap untuk Pemula hingga Mahir</h2>
                                    <p>Program ini dirancang untuk membantu peserta memahami dasar-dasar dari pembelajaran yang dipilih 
                                        secara bertahap, mulai pemahaman konsep awal hingga praktik secara langsung, sehingga peserta dapat 
                                        meningkatkan keterampilan digital secara mandiri dan lebih percaya diri dalam menghadapi kebutuhan 
                                        sekolah, perkuliahan, pekerjaan, maupun aktivitas sehari-hari.</p>
                                </div>
                                <div class="col-lg-12">
                                    <div class="white-button scroll-to-section">
                                        <a href="#kelas"><i class="bi bi-calendar3 me-2"></i>Daftar Kelas</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                            <img src="{{ asset('assets/images/bg5.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="kelas" id="kelas">
    <h2>Pilihan Program Kelas Kursus Komputer Terbaik di Sidoarjo</h2>
    <div class="program-grid">

        <div class="card mx-2">
            <div class="header">
                <span class="title">Beginner</span>
                <span class="price">Free</span>
            </div>
            <p class="desc">Etiam ac convallis enim, eget euismod dolor.</p>
            <ul class="lists">
                <li class="list">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Aenean quis</span>
                </li>
                <li class="list">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Morbi semper</span>
                </li>
                <li class="list">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Tristique enim nec</span>
                </li>
            </ul>
            <button type="button" class="action">Get Started</button>
        </div>
        
        <div class="card mx-2">
            <div class="header">
                <span class="title">Beginner</span>
                <span class="price">Free</span>
            </div>
            <p class="desc">Etiam ac convallis enim, eget euismod dolor.</p>
            <ul class="lists">
                <li class="list">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Aenean quis</span>
                </li>
                <li class="list">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Morbi semper</span>
                </li>
                <li class="list">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Tristique enim nec</span>
                </li>
            </ul>
            <button type="button" class="action">Get Started</button>
        </div>
        
        <div class="card mx-2">
            <div class="header">
                <span class="title">Beginner</span>
                <span class="price">Free</span>
            </div>
            <p class="desc">Etiam ac convallis enim, eget euismod dolor.</p>
            <ul class="lists">
                <li class="list">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Aenean quis</span>
                </li>
                <li class="list">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Morbi semper</span>
                </li>
                <li class="list">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Tristique enim nec</span>
                </li>
            </ul>
            <button type="button" class="action">Get Started</button>
        </div>
        
        <div class="card mx-2">
            <div class="header">
                <span class="title">Beginner</span>
                <span class="price">Free</span>
            </div>
            <p class="desc">Etiam ac convallis enim, eget euismod dolor.</p>
            <ul class="lists">
                <li class="list">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Aenean quis</span>
                </li>
                <li class="list">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Morbi semper</span>
                </li>
                <li class="list">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Tristique enim nec</span>
                </li>
            </ul>
            <button type="button" class="action">Get Started</button>
        </div>
        
        <div class="card mx-2">
            <div class="header">
                <span class="title">Beginner</span>
                <span class="price">Free</span>
            </div>
            <p class="desc">Etiam ac convallis enim, eget euismod dolor.</p>
            <ul class="lists">
                <li class="list">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Aenean quis</span>
                </li>
                <li class="list">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Morbi semper</span>
                </li>
                <li class="list">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Tristique enim nec</span>
                </li>
            </ul>
            <button type="button" class="action">Get Started</button>
        </div>
        
        <div class="card mx-2">
            <div class="header">
                <span class="title">Beginner</span>
                <span class="price">Free</span>
            </div>
            <p class="desc">Etiam ac convallis enim, eget euismod dolor.</p>
            <ul class="lists">
                <li class="list">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Aenean quis</span>
                </li>
                <li class="list">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Morbi semper</span>
                </li>
                <li class="list">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Tristique enim nec</span>
                </li>
            </ul>
            <button type="button" class="action">Get Started</button>
        </div>

    </div>
</div>

{{-- TOP 3 --}}
<div class="topthree">
    <div class="toptittle">
        <h2>Program Unggulan Kursus Komputer Terbaik di Sidoarjo</h2>
    </div>
    <div class="featured-programs">
        <div class="card_box">
            <span></span>
            <h2>Microsoft Office</h2>
            <h3>Kelas Rombel</h3>
            <p>
                Program unggulan untuk menguasai Microsoft Word, Excel, dan PowerPoint secara terstruktur 
                untuk kebutuhan sekolah, kuliah, dan dunia kerja modern.
            </p>
            <ul class="featured-points">
                <li>Word, Excel & PowerPoint</li>
                <li>Latihan berbasis studi kasus</li>
                <li>Sertifikat kelulusan</li>
            </ul>
            <a href="#" class="featured-btn">Lihat Detail</a>
        </div>

        <div class="card_box">
            <span></span>
            <h2>Microsoft Office</h2>
            <h3>Kelas Rombel</h3>
            <p>
                Program unggulan untuk menguasai Microsoft Word, Excel, dan PowerPoint secara terstruktur 
                untuk kebutuhan sekolah, kuliah, dan dunia kerja modern.
            </p>
            <ul class="featured-points">
                <li>Word, Excel & PowerPoint</li>
                <li>Latihan berbasis studi kasus</li>
                <li>Sertifikat kelulusan</li>
            </ul>
            <a href="#" class="featured-btn">Lihat Detail</a>
        </div>

        <div class="card_box">
            <span></span>
            <h2>Microsoft Office</h2>
            <h3>Kelas Rombel</h3>
            <p>
                Program unggulan untuk menguasai Microsoft Word, Excel, dan PowerPoint secara terstruktur 
                untuk kebutuhan sekolah, kuliah, dan dunia kerja modern.
            </p>
            <ul class="featured-points">
                <li>Word, Excel & PowerPoint</li>
                <li>Latihan berbasis studi kasus</li>
                <li>Sertifikat kelulusan</li>
            </ul>
            <a href="#" class="featured-btn">Lihat Detail</a>
        </div>
    </div>
</div>


@endsection
