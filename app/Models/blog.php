<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class blog extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'blogs';
    protected $primaryKey = 'id_blog';
    protected $dates = ['deleted_at'];

    public $incrementing = false;//so it doesnt return 0
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'judul_blog',
        'konten_blog',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'tanggal_blog' => 'datetime',
    ];

    public function blogs()
    {
        return $this->belongsTo(User::class);
    } 
}
