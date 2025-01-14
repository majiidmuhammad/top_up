<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Game extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $table = 'game';
    protected $fillable = ['nama_game', 'product', 'harga'];
}
