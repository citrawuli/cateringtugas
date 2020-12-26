<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;

    protected $table = 'produk';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_produk',
        'tipe_produk',
        'deskripsi_produk',
        'harga_produk',
        'rating_produk',
    ];

    public function produks()
    {
        return $this->belongsTo(kategoriProduk::class);
    } 
}
