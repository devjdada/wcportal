<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OwPosting extends Model
{
    use HasFactory;

    protected $fillable = [
        'station_id',
        'tag',
        'wing',
        'location',
        'name',
        'phone',
        'service',
        'for',
        'available',
        'user_id',
        'backup_id',
        'serviced_id',
        'ordained_id',
    ];

    public function scopeSearch($query, $value)
    {
        $query->
            // where('phone', 'like', "%{$value}%")
            //     ->orWhere('name', 'like', "%{$value}%")
            //     ->orWhere('phone', 'like', "%{$value}%")
            Where('location', 'like', "%{$value}%")
            ->orWhere('wing', 'like', "%{$value}%")
            ->orWhere('for', 'like', "%{$value}%")
            ->orWhere('tag', 'like', "%{$value}%")
            ->orWhere('service', 'like', "%{$value}%");
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id',  'user_id');
    }

    public function ow()
    {
        return $this->hasOne(User::class, 'id',  'ordained_id');
    }
}
