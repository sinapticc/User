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

    protected $table = 'users';


<<<<<<< HEAD
    public function bProvince()
=======
    public function userProvince()
>>>>>>> 565adabba8cb7b70602df239b271647cd6000fa8
    {
        return $this->belongsTo(Province::class, 'province1');
    }
    public function bCity()
    {
        return $this->belongsTo(City::class, 'city1');
    }
    public function lProvince()
    {
        return $this->belongsTo(Province::class, 'province2');
    }
    public function luserCity()
    {
        return $this->belongsTo(City::class, 'city2');
    }

    public function phoneNumbers(): HasMany
    {
        return $this->hasMany(PhoneNumber::class);
    }

    public function addresses(): HasMany
    {
        return $this->hasMany(Address::class);
    }



    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'image_path',
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
