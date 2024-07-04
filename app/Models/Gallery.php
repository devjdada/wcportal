<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Gallery extends Model
{
    use HasFactory;
    protected $table = 'galleries';
    protected $fillable = [
        'image',
        'title',
        'description',
        'status',
        'station_id',
        'poster_id',
    ];

    public function images(): HasMany
    {
        return $this->HasMany(Img::class, 'galleries_id', 'id');
    }
}
