<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Img extends Model
{
    use HasFactory;
    protected $table = 'imgs';
    protected $fillable = [
        'image',
        'title',
        'galleries_id',
    ];
}
