<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UnitLeader extends Model
{
    use HasFactory;

    protected $fillable = [
        'station_id',
        'user_id',
        'unit_id',
        'position',
        'status',
        'start',
        'end',
        'about',
    ];

    public function userLeader(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
