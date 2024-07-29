<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostingLocation extends Model
{
    use HasFactory;
    protected $table = 'posting_locations';

    protected $fillable = [
        'wing',
        'tag',
        'location',
        'station_id'
    ];
}
