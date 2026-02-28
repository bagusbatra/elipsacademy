<?php

namespace App\Http\Controllers;

class PengunjungController extends Controller
{
    public function HalamanUtama()
    {
        return view('welcome'); // Mengarahkan ke halaman welcome.blade.php
    }
    public function HalamanProgram()
    {
        return view('program'); // Mengarahkan ke halaman program.blade.php
    }
    public function HalamanTentangKami()
    {
        abort(400);
        // return view('tentang'); // Mengarahkan ke halaman tentang.blade.php
    }
    public function HalamanSertifikat()
    {
        abort(400);
        // return view('sertifikat'); // Mengarahkan ke halaman sertifikat.blade.php
    }
    public function HalamanArtikel()
    {
        abort(400);
        // return view('artikel'); // Mengarahkan ke halaman artikel.blade.php
    }
    public function HalamanPortofolio()
    {
        abort(400);
        // return view('portofolio'); // Mengarahkan ke halaman portofolio.blade.php
    }
}
