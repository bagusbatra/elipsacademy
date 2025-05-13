<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengunjungController extends Controller
{
    public function HalamanUtama()
    {
        return view('welcome'); // Mengarahkan ke halaman welcome.blade.php
    }
}
