@extends('layouts.pengunjung')

@section('title', 'Program Kursus | Elips Academy')

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

{{-- JENIS KELAS --}}
<div class="classtype">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading text-center">
            <h4>Pilihan 3 Kelas <em>Kursus Komputer Siap Kerja</em> dan <em>Bersertifikat Resmi</em></h4>
            <img src="assets/images/heading-line-dec.png" alt="">
            <p class="t pb-5" style="color: black">Elips Academy menyediakan 3 jenis kelas kursus komputer bersertifikat yang dirancang untuk meningkatkan keterampilan dan mempersiapkan peserta agar siap kerja secara profesional.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="pricing-item-regular">
            <h4 style="font-weight: bold">HOME PRIVATE</h4>
            <div class="icon">
              <img src="{{ asset('assets/images/3.png') }}" alt="">
            </div>
            <ul>
              <li><b>Belajar Lebih Nyaman Dirumah</b></li>
              <li>1 Pengajar 1 Siswa</li>
              <li>Jadwal Fleksibel</li>
              <li>Materi Dapat Menyesuaikan</li>
              <li>Pengajar Profesional</li>
              <li>Materi Pembelakaran</li>
              <li>Sertifikat Resmi</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="pricing-item-pro">
            <h4 style="font-weight: bold">KELAS ROMBEL</h4>
            <div class="icon">
              <img src="{{ asset('assets/images/1.png') }}" alt="">
            </div>
            <ul>
              <li><b>Biaya Lebih Terjangkau</b></li>
              <li>Interaktif dan Seru</li>
              <li>Relasi dan Diskusi Bersama</li>
              <li>Cocok Untuk Pelajar/Mahasiswa</li>
              <li>Grup Belajar</li>
              <li>Pengajar Profesional</li>
              <li>Materi Pembelakaran</li>
              <li>Sertifikat Resmi</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="pricing-item-regular">
            <h4 style="font-weight: bold">REGULER PRIVATE</h4>
            <div class="icon">
              <img src="{{ asset('assets/images/2.png') }}" alt="">
            </div>
            <ul>
              <li><b>1 Pengajar 1 Siswa</b></li>
              <li>Jadwal Fleksibel</li>
              <li>Materi Dapat Menyesuaikan</li>
              <li>Pengajar Profesional</li>
              <li>Materi Pembelakaran</li>
              <li>Sertifikat Resmi</li>
            </ul>
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
            <button type="button" class="action" data-bs-toggle="modal" data-bs-target="#modalDaftarKelas" data-program="contoh"> {{-- data-program harus diisi sesuai nama program --}}
                DAFTAR
            </button>
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
            <button type="button" class="action" data-bs-toggle="modal" data-bs-target="#modalDaftarKelas" data-program="contoh"> {{-- data-program harus diisi sesuai nama program --}}
                DAFTAR
            </button>
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
            <button type="button" class="action" data-bs-toggle="modal" data-bs-target="#modalDaftarKelas" data-program="contoh"> {{-- data-program harus diisi sesuai nama program --}}
                DAFTAR
            </button>
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
            <button type="button" class="action" data-bs-toggle="modal" data-bs-target="#modalDaftarKelas" data-program="contoh"> {{-- data-program harus diisi sesuai nama program --}}
                DAFTAR
            </button>
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
            <button type="button" class="action" data-bs-toggle="modal" data-bs-target="#modalDaftarKelas" data-program="contoh"> {{-- data-program harus diisi sesuai nama program --}}
                DAFTAR
            </button>
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
            <button type="button" class="action" data-bs-toggle="modal" data-bs-target="#modalDaftarKelas" data-program="contoh"> {{-- data-program harus diisi sesuai nama program --}}
                DAFTAR
            </button>
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
            <a href="#" class="featured-btn" data-bs-toggle="modal" data-bs-target="#modalDaftarKelas" data-program="contoh"> {{-- data-program harus diisi sesuai nama program --}}
                DAFTAR
            </a>        
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
            <a href="#" class="featured-btn" data-bs-toggle="modal" data-bs-target="#modalDaftarKelas" data-program="contoh"> {{-- data-program harus diisi sesuai nama program --}}
                DAFTAR
            </a>
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
            <a href="#" class="featured-btn" data-bs-toggle="modal" data-bs-target="#modalDaftarKelas" data-program="contoh"> {{-- data-program harus diisi sesuai nama program --}}
                DAFTAR
            </a>        
        </div>
    </div>
</div>

@endsection
