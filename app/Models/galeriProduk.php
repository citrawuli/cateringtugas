<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class galeriProduk extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'galeri_produk';
    protected $primaryKey = 'id_galeri';
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'id_galeri',
        'id_produk',
        'foto',
        'id_default',
        'deleted_at',
        'created_at',
        'updated_at',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public function product()
    {
        return $this->belongsTo(produk::class, 'id');
    } 
}
