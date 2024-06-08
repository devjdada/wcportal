<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WsfLeader extends Model
{
    use HasFactory;
    protected $table = 'wsf_leaders';
    protected $fillable = [
        'station_id',
        'user_id',
        'unit_id',
        'position',
        'status',
        'start',
        'end',
        'about',
    ];
}
