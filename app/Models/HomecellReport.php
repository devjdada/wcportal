<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomecellReport extends Model
{
    use HasFactory;
    protected $fillable = [
        "homecell_id",
        "station_id",
        "province_id",
        "user_id",
        "male",
        "female",
        "children",
        "new_convert",
        "first_timer",
        "total",
        "week"
    ];

    public function scopeSearch($query, $value)
    {
        $query->where('station_id', 'like', "%{$value}%")
            ->orWhere('user_id', 'like', "%{$value}%");
    }

    public function homecells()
    {
        return $this->hasOne(Homecell::class, 'id', 'homecell_id');
    }
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
