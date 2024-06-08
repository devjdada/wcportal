<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class NewConvert extends Model
{
    use HasFactory;
    protected $fillable = [
        'invitted_by',
        'post_by',
        'station_id',
        'surname',
        'firstname',
        'location',
        'phone',
        'marital',
        'gender',
        'ocupation',
        'address',
        'email',
        'bus_stop',
        'born_again',
        'born_again_on',
        'prayer_point',
        'type',
        'fc',
        'wb'
    ];

    public function scopeSearch($query, $value)
    {
        $query->where('phone', 'like', "%{$value}%")
            ->orWhere('surname', 'like', "%{$value}%")
            ->orWhere('firstname', 'like', "%{$value}%")
            ->orWhere('location', 'like', "%{$value}%");
    }

    public function winner(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'invitted_by');
    }

    public function posted(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'post_by');
    }
}
