<?php

namespace Database\Seeders;

use App\Models\Game;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'nama' => 'Administrator',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
        ]);

        Game::create([
            'nama_game' => 'Mobile Legends',
            'product' => '100 Diamonds',
            'harga' => '15000',
        ]);
        Game::create([
            'nama_game' => 'Mobile Legends',
            'product' => '300 Diamonds',
            'harga' => '45000',
        ]);
        Game::create([
            'nama_game' => 'Mobile Legends',
            'product' => '500  Diamonds',
            'harga' => '71000',
        ]);
        Game::create([
            'nama_game' => 'Mobile Legends',
            'product' => '700 Diamonds',
            'harga' => '100000',
        ]);
        Game::create([
            'nama_game' => 'Mobile Legends',
            'product' => '1000  Diamonds',
            'harga' => '145000',
        ]);
        Game::create([
            'nama_game' => 'Valorant',
            'product' => '475 VP',
            'harga' => '55000',
        ]);
        Game::create([
            'nama_game' => 'Valorant',
            'product' => '1000  VP',
            'harga' => '112000',
        ]);
        Game::create([
            'nama_game' => 'Valorant',
            'product' => '2000 VP',
            'harga' => '215000',
        ]);
        Game::create([
            'nama_game' => 'Valorant',
            'product' => '3600 VP',
            'harga' => '380000',
        ]);
        Game::create([
            'nama_game' => 'Valorant',
            'product' => '5000 VP',
            'harga' => '540000',
        ]);
        Game::create([
            'nama_game' => 'PUBG',
            'product' => '30 UC',
            'harga' => '7000',
        ]);
        Game::create([
            'nama_game' => 'PUBG',
            'product' => '300+70 UC',
            'harga' => '70000',
        ]);
        Game::create([
            'nama_game' => 'PUBG',
            'product' => '600+60  UC',
            'harga' => '140000',
        ]);
        Game::create([
            'nama_game' => 'PUBG',
            'product' => '1500+300  UC',
            'harga' => '35000',
        ]);
        Game::create([
            'nama_game' => 'PUBG',
            'product' => '3000+1000 UC',
            'harga' => '800000',
        ]);
    }
}
