<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::orderBy('nama_game', 'asc')->get();
        return view('pembelian.index', [
            'judul' => 'game',
            'index' => $transaksi
        ]);
    }
}
