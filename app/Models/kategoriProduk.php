<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategoriProduk extends Model
{
    use HasFactory;

    protected $table = 'kategori_produk';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_kategori',
    ];

    public function kategoriProduks()
    {
        return $this->hasMany(produk::class);
    } 
}
