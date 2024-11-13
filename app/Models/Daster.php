<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daster extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_daster',
        'ukuran',
        'stok',
        'harga',
        'deskripsi',
    ];
}
