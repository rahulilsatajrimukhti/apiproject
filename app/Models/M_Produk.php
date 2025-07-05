<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_Produk extends Model
{
    use HasFactory;
    protected $table = 'tbl_produk';
    protected $fillable = ['nama', 'deskripsi', 'harga'];
}
