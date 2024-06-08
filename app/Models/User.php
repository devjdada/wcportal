<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'phone',
        'email',
        'password',
        'surname', 'station_id', 'firstname',  'marital', 'dob', 'status', 'gender',  'address'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function scopeSearch($query, $value)
    {
        $query->where('phone', 'like', "%{$value}%")
            ->orWhere('surname', 'like', "%{$value}%")
            ->orWhere('firstname', 'like', "%{$value}%")
            ->orWhere('name', 'like', "%{$value}%")
            ->orWhere('dob', 'like', "%{$value}%")
            ->orWhere('email', 'like', "%{$value}%")
            ->orWhere('address', 'like', "%{$value}%");
    }

    public function unit(): HasMany
    {
        return $this->hasMany(UnitMember::class, 'user_id');
    }

    public function souls(): HasMany
    {
        return $this->hasMany(Soul::class, 'soul_winner');
    }

    public function report(): HasMany
    {
        return $this->hasMany(SoulReport::class, 'user_id');
    }

    public function assigned(): HasMany
    {
        return $this->hasMany(Assigned::class, 'assigned_to');
    }
    // public function avatar()
    // {
    //     return $this->hasMany(Avatar::class, 'user_id');
    // }
    public function unitLeader(): HasMany
    {
        return $this->hasMany(UnitLeader::class, 'user_id');
    }
    public function homecell(): HasOne
    {
        return $this->hasOne(WsfMember::class,  'user_id');
    }
    // public function staff()
    // {
    //     return $this->hasOne(Staff::class,  'user_id');
    // }


    public function station(): BelongsTo
    {
        return $this->belongsTo(Station::class,  'station_id');
    }
}
