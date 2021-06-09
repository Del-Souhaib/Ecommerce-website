<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    public $fillable=['id','user_name','email','telephone','city','adresse','passwpord','created_at'];
    public $hidden=['password'];
}
