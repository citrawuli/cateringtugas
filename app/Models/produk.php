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

    public $incrementing = false;//so when I called it in blade"addphoto", it doesnt return 0

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
        'rating_produk',
        'created_at',
        'updated_at',
    ];

    public function produks()
    {
        return $this->belongsTo(kategoriProduk::class);
    } 

    public function images()
    {
        return $this->hasMany(galeriProduk::class);
    }

    public function pemesanans()
    {
        //return $this->belongsToMany(RelatedModel, pivot_table_name, foreign_key_of_current_model_in_pivot_table, foreign_key_of_other_model_in_pivot_table);
        return $this->belongsToMany(Pemesanan::class, detail_transaksi::class, 'id_pemesanan', 'id_produk');
    }


}
