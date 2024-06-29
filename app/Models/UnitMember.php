<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class UnitMember extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id", "unit_id", "station_id"
    ];

    public function member(): HasOne
    {
        return $this->hasOne(User::class, 'id', "user_id");
    }
    public function unit(): HasMany
    {
        return $this->hasMany(Unit::class, 'id', "unit_id");
    }
}
