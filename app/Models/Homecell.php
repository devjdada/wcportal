<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homecell extends Model
{
    use HasFactory;
    protected $fillable = [
        "station_id",  "province_id",  "district_id", "phone", "title", "about", "address"
    ];

    public function district()
    {
        return $this->belongsTo(District::class, 'district_id');
    }
    public function province()
    {
        return $this->belongsTo(Province::class,  'province_id');
    }
}
