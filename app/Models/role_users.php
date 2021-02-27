<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role_users extends Model
{
    use HasFactory;

    protected $table = 'role_users';
    protected $primaryKey = 'user_id';
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role_id',
        'user_id',//addthistodbv2
        'created_at',
        'updated_at',
    ];

   
}
