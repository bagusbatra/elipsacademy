<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function HalamanDaftarKursus()
    {
        return view('daftarkursus'); // Mengarahkan ke halaman program.blade.php
    }
}
