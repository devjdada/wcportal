<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blogs';
    protected $fillable = [
        'title',
        'slug',
        'content',
        'image',
        'status',
        'station_id',
        'user_id',
        'poster_id',
        'dated',
        'edit_by',
        'summary',
        'views',
        'category',
        'tags',
        'published_date',
        'published',
    ];
}
