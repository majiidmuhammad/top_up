<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaksi extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $table = 'transaksi';
    protected $fillable = ['email', 'telp', 'akun_game', 'nama_game', 'harga','product'];
}
