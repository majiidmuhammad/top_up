<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $game = Game::orderBy('nama_game', 'asc')->get();
        return view('product.index', [
            'judul' => 'game',
            'index' => $game
        ]);
    }

    public function create()
    {
        return view('product.create', [
            'judul' => 'game',
        ]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'nama_game' => 'required',
            'product' => 'required',
            'harga' => 'required',
        ]);
        Game::create($validatedData);
        return redirect()->route('product')->with('success', 'Data berhasil tersimpan');
    }

    public function edit(string $id)
    {
        $game = Game::find($id);
        return view('product.edit', [
            'judul' => 'service',
            'edit' => $game
        ]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Temukan game berdasarkan ID
        $game = Game::findOrFail($id);

        // Aturan validasi dengan pengecualian untuk nama_game yang sudah ada
        $rules = [
            'nama_game' => 'required|max:255' . $id,  // Mengabaikan nama_game yang sudah ada pada ID yang sama
            'product' => 'required',
            'harga' => 'required|numeric',  // Pastikan harga adalah angka
        ];

        // Validasi data
        $validatedData = $request->validate($rules);

        // Perbarui data game
        $game->update($validatedData);

        // Redirect ke halaman daftar produk dengan pesan sukses
        return redirect()->route('product')->with('success', 'Data berhasil diperbaharui');
    }



    public function destroy(string $id)
    {
        $user = Game::findOrFail($id);
        $user->delete();
        return redirect()->route('product')->with('success', 'Data berhasil dihapus');
    }
}
