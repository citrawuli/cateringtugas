<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class kategoriProduk extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'kategori_produk';
    public $timestamps = false;
    protected $dates = ['deleted_at'];

    public $incrementing = false;//so it doesnt return 0
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
