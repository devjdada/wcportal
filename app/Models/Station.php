<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Station extends Model
{

    use HasFactory;
    protected $fillable = [
        'phone',
        'email',
        'location',
        'about',
        'state',
        'address',
        'capacity',
        'average_attendance',
        'average_income',
        'long',
        'lat',
    ];

    /**
     * Get all of the user for the Station
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function user(): HasMany
    {
        return $this->hasMany(User::class, 'station_id', 'id');
    }
}
