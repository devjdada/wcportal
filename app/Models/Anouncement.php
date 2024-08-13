<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anouncement extends Model
{
    use HasFactory;
    protected $fillable = [
        'text',
        'title',
        'fileDoc',
        'fileType',
        'fileName',
        'image',
        'orientation',
        'station_id',
        'user_id',
    ];
}
