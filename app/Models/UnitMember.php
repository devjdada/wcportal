<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitMember extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id", "unit_id"
    ];

    // public function member()
    // {
    //     return $this->hasOne(User::class, 'id', "user_id");
    // }
    // public function unit()
    // {
    //     return $this->hasMany(Unit::class, 'id', "unit_id");
    // }
}
