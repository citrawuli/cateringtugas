<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class galeriProduk extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'galeri_produk';
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public function product()
    {
        return $this->belongsTo(produk::class);
    } 
}
