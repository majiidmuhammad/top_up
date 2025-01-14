<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function valorant()
    {
        $coin = Game::where('nama_game', 'valorant')->get();
        return view('game.valorant', [
            'judul' => 'Valorant',
            'coin' => $coin
        ]);
    }

    public function buyValorant(Request $request)
    {
            // Validasi data form
            $validated = $request->validate([
            'akun_game' => 'required|string',
            'coin' => 'required|string',
            'email' => 'required|email',
            'telp' => 'required|string',
        ]);

        // Ambil data coin berdasarkan product yang dipilih
        $coin = $request->input('coin');
        $selectedCoin = Game::where('product', $coin)->first();

        if (!$selectedCoin) {
            return back()->with('error', 'product tidak ditemukan');
        }

        // Simpan data transaksi ke database
        $transaction = new Transaksi();
        $transaction->email = $request->input('email');
        $transaction->telp = $request->input('telp');
        $transaction->akun_game = $request->input('akun_game'); 
        $transaction->nama_game = $selectedCoin->nama_game; 
        $transaction->product = $selectedCoin->product; 
        $transaction->harga = $selectedCoin->harga;

        // Simpan ke database
        $transaction->save();

        // Redirect ke halaman sukses
        return redirect()->route('confirm', $transaction->id)->with('success', 'Transaksi berhasil!');;
    }

    public function show($id)
    {
        $transaksi = Transaksi::findOrFail($id);

        return view('game.konfirmasi', compact('transaksi'));
    }
}
