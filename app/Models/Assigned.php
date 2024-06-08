<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assigned extends Model
{
    use HasFactory;
    protected $fillable = [
        'assigned_to', 'contact_id', 'type', 'station_id'
    ];

    public function assign_to()
    {
        return $this->hasOne(User::class, 'id', 'assigned_to');
    }

    public function contact()
    {
        return $this->hasOne(Soul::class, 'id', 'contact_id');
    }
}
