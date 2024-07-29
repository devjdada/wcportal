<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class OrdainedWorker extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'ordained_workers';
    public $fillable = [
        'wing',
        'status',
        'register',
        'type',
        'user_id',
        'station_id',
        'ordain_date',
        'ordain_where'
    ];

    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    public function posting(): HasMany
    {
        return $this->hasMany(OwPosting::class, 'ordained_id', 'id');
    }
    public function units(): HasManyThrough
    {
        return $this->hasManyThrough(Unit::class, UnitMember::class, 'user_id', 'id', 'user_id', 'unit_id');
    }
    public function wsf_member(): HasOneThrough
    {
        return $this->hasOneThrough(Homecell::class, WsfMember::class, 'user_id', 'id', 'user_id', 'homecell_id');
    }
}
