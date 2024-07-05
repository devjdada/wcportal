<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimony extends Model
{
    use HasFactory;
    protected $table = 'testimonies';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'title',
        'testimony',
        'image',
        'status',
        'station_id',
        'user_id',
        'poster_id',
    ];
}