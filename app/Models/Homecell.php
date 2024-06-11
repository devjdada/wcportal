<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Homecell extends Model
{
    use HasFactory;
    protected $fillable = [
        "station_id",  "province_id",  "district_id", "phone", "title", "about", "address"
    ];

    public function scopeSearch($query, $value)
    {
        $query->where('phone', 'like', "%{$value}%")
            ->orWhere('title', 'like', "%{$value}%")
            ->orWhere('about', 'like', "%{$value}%")
            ->orWhere('district_id', 'like', "%{$value}%")
            ->orWhere('address', 'like', "%{$value}%");
    }

    public function district(): BelongsTo
    {
        return $this->belongsTo(District::class, 'district_id');
    }
    public function province(): BelongsTo
    {
        return $this->belongsTo(Province::class,  'province_id');
    }
    public function leaders(): HasMany
    {
        return $this->hasMany(HomecellLeader::class, 'homecell_id');
    }
}
