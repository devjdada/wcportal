<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomecellLeader extends Model
{
    use HasFactory;
    protected $table = 'homecell_leaders';
    protected $fillable = [
        'station_id',
        'user_id',
        'homecell_id',
        'position',
        'status',
        'start',
        'end',
        'about',
    ];
}
