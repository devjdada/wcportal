<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProvinceLeader extends Model
{
    use HasFactory;
    protected $table = 'province_leaders';
    protected $fillable = [
        'station_id',
        'user_id',
        'province_id',
        'position',
        'status',
        'start',
        'end',
        'about',
    ];
}
