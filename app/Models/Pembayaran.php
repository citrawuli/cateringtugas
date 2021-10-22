<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pembayaran extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'pembayaran';
    protected $primaryKey = 'id_pembayaran';
    protected $dates = ['deleted_at'];

    public $incrementing = false;//so it doesnt return 0 in table ID blade

    protected $fillable = [
        'id_pembayaran',
        'id_pemesanan',
        'jumlah_bayar',
        'tanggal_pembayaran',
        'bank_transfer',
        'atas_nama',
        'status_bayar',
        'bukti_bayar',
        'nomor_rekening',
        'deleted_at',
        'created_at',
        'updated_at',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public function detpems()
    {
        //foreign key model in table pembayaran is id_pemesanan
        return $this->belongsTo(Pemesanan::class, 'id_pemesanan');
    } 
}
