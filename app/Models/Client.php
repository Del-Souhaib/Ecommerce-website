<?php

namespace App\Models;

use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Client extends Authenticatable implements  CanResetPassword
{
    use HasFactory,Notifiable ;
    public $fillable=['id','user_name','email','telephone','city','adresse','password','created_at'];
    public $hidden=['password'];

}
