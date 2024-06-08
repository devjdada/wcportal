<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DistrictLeader extends Model
{
    use HasFactory;
    protected $table = 'district_leaders';
    protected $fillable = [
        'station_id',
        'user_id',
        'district_id',
        'position',
        'status',
        'start',
        'end',
        'about',
    ];
}
