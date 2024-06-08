<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soul extends Model
{
    use HasFactory;
    protected $fillable = [
        'soul_winner',
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

    public function winner()
    {
        return $this->hasOne(User::class, 'id',  'soul_winner');
    }


    public function station()
    {
        return $this->hasOne(Station::class, 'id',  'station_id');
    }

    public function report()
    {
        return $this->hasMany(SoulReport::class,  'soul_id');
    }

    public function assigned()
    {
        return $this->hasMany(Assigned::class,  'contact_id');
    }
}
