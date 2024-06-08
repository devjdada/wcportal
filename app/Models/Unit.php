<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Unit extends Model
{
    use HasFactory;
    protected $fillable = [
        "title", "email", "about",  "phone",  "cover_image_path", "station_id"
    ];

    public function leaders(): HasMany
    {
        return $this->hasMany(UnitLeader::class, 'unit_id');
    }

    public function unitleaderUser(): HasManyThrough
    {
        return $this->hasManyThrough(
            UnitLeader::class,
            User::class,
            'id',
            'unit_id',
            'user_id',
            'id'
        );
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
