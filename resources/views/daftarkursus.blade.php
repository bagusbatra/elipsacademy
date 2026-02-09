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
    <div class="program-grid">

        <div class="program-card">
            <h3>Kursus Komputer Dasar</h3>
            <p>Belajar komputer dari nol hingga mampu menggunakan komputer dan aplikasi dasar untuk kebutuhan sehari-hari.</p>
            <a href="#" class="btn-detail">Lihat Detail</a>
        </div>

        <div class="program-card">
            <h3>Microsoft Office Lengkap</h3>
            <p>Pelatihan Word, Excel, dan PowerPoint untuk sekolah, kuliah, dan kebutuhan kerja perkantoran.</p>
            <a href="#" class="btn-detail">Lihat Detail</a>
        </div>

        <div class="program-card">
            <h3>Desain Grafis</h3>
            <p>Belajar desain grafis menggunakan CorelDRAW dan Photoshop untuk kebutuhan kreatif dan percetakan.</p>
            <a href="#" class="btn-detail">Lihat Detail</a>
        </div>

        <div class="program-card">
            <h3>Komputer Perkantoran</h3>
            <p>Program untuk meningkatkan produktivitas kerja dan pengelolaan administrasi perkantoran.</p>
            <a href="#" class="btn-detail">Lihat Detail</a>
        </div>

        <div class="program-card">
            <h3>Komputer Akuntansi</h3>
            <p>Pelatihan pembukuan dan administrasi digital untuk UMKM dan bisnis kecil.</p>
            <a href="#" class="btn-detail">Lihat Detail</a>
        </div>
    </div>
</div>

{{-- TOP 3 --}}

<div class="featured-programs">

    <div class="featured-card">
        <div class="featured-badge">Unggulan</div>
        <h3>Microsoft Office Profesional</h3>
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

    <div class="featured-card utama">
        <div class="featured-badge">Unggulan</div>
        <h3>Desain Grafis & Multimedia</h3>
        <p>
            Program kreatif untuk mempelajari desain grafis menggunakan software populer 
            untuk kebutuhan industri kreatif dan percetakan.
        </p>
        <ul class="featured-points">
            <li>Photoshop & CorelDRAW</li>
            <li>Project desain nyata</li>
            <li>Portofolio peserta</li>
        </ul>
        <a href="#" class="featured-btn">Lihat Detail</a>
    </div>

    <div class="featured-card">
        <div class="featured-badge">Unggulan</div>
        <h3>Komputer Perkantoran & Administrasi</h3>
        <p>
            Program unggulan untuk meningkatkan keterampilan administrasi dan pengelolaan data 
            menggunakan komputer secara profesional.
        </p>
        <ul class="featured-points">
            <li>Administrasi & pengarsipan</li>
            <li>Pengolahan data kantor</li>
            <li>Siap kerja</li>
        </ul>
        <a href="#" class="featured-btn">Lihat Detail</a>
    </div>

</div>



@endsection
