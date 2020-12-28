<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class produk extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'produk';
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_kategori',
        'nama_produk',
        'tipe_produk',
        'deskripsi_produk',
        'harga_produk',
        'created_at',
        'updated_at',
    ];

    public function produks()
    {
        return $this->belongsTo(kategoriProduk::class);
    } 
}
