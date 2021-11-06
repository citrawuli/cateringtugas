<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pemesanan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'pemesanan';
    protected $primaryKey = 'id_pemesanan';
    protected $dates = ['deleted_at'];

    public $incrementing = false;//so it doesnt return 0

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'nama_lengkap_pembeli',
        'no_hp_pembeli',
        'alamat_lengkap_pembeli',
        'untuk_tanggal',
        'untuk_jam',
        'pengambilan',
        'keterangan',
        'total_transaksi',
        'status_pemesanan',
        'status_progress',
        'created_at',
        'updated_at',
        "discount",
        "discount_inpercent",
        "total_sub"

    ];

    public function products()
    {
        return $this->belongsToMany(produk::class, detail_transaksi::class, 'id_pemesanan', 'id_produk')->withPivot(['sub_total', 'kuantitas', 'deleted_at', 'created_at', 'updated_at']);
    } 

    public function payments()
    {
        return $this->hasMany(Pembayaran::class, 'id_pemesanan');
    }

    
    
}
