<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class SoulReport extends Model
{
    use HasFactory;
    protected $fillable = [
        "station_id", "soul_id", "user_id", "report", "prayer", "homecell", "baptised", "unit", "last_service", "foundation_class", "exblish", "born_again"
    ];

    public function report_by(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function soul(): HasOne
    {
        return $this->hasOne(Soul::class, 'id', 'soul_id');
    }
}
