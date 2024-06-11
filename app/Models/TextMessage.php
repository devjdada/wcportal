<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TextMessage extends Model
{
    use HasFactory;
    protected $table = 'text_messages';
    protected $fillable = [
        'station_id',
        'message',
        'phone',
        'status'
    ];
}
