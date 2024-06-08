<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitLeader extends Model
{
    use HasFactory;

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
