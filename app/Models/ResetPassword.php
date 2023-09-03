<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;



class ResetPassword extends Model
{

    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'password_reset_tokens';
    public $timestamps = false;


    /**
     * @var array<int,string>
     */
    protected $fillable = [
      'email',
      'token',
    ];
}
