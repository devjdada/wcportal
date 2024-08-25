<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Assigned extends Model
{
    use HasFactory;
    protected $fillable = [
        'assigned_to',
        'contact_id',
        'type',
        'station_id'
    ];

    public function assign_to(): hasOne
    {
        return $this->hasOne(User::class, 'id', 'assigned_to');
    }

    public function contact(): HasOne
    {
        return $this->hasOne(Soul::class, 'id', 'contact_id');
    }

    public function reports(): HasMany
    {
        return $this->hasMany(SoulReport::class, 'soul_id', 'contact_id');
    }
}
