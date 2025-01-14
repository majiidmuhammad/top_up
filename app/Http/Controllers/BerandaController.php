<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function beranda()
    {
        return view('beranda.index', [
            'judul' => 'Halaman Utama',
        ]);
    }
}
