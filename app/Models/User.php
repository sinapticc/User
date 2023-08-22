<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    public $timestamps = false;

    public function userProvince()
    {
        return $this->belongsTo(Province::class, 'province');
    }
    public function userCity()
    {
        return $this->belongsTo(City::class, 'city');
    }

    public function phoneNumbers(): HasMany
    {
        return $this->hasMany(PhoneNumber::class);
    }



    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'family_name',
        'father_name',
        'nat_id',
        'birth_place',
        'birth_date',
        'marriage',
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<int, string>
     */
    protected $casts = [
        'national_code' => 'string',
        'day' => 'string',
        'month' => 'string',
        'year' => 'string',
    ];
}
