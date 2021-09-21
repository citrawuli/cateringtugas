<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class detail_transaksi extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'detail_transaksi';
    protected $primaryKey = ['id_produk', 'id_pemesanan'];
    protected $dates = ['deleted_at'];
    public $incrementing = false;//so when I called it in blade, it doesnt return 0

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_produk',
        'id_pemesanan',
        'sub_total',
        'kuantitas',
        'created_at',
        'updated_at',
    ];


}
