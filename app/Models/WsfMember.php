<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WsfMember extends Model
{
    use HasFactory;
    protected $fillable = ['station_id', 'user_id', 'homecell_id'];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function wsf()
    {
        return $this->belongsTo(Homecell::class, 'homecell_id');
    }
}
