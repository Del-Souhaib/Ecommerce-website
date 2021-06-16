<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pane extends Model
{
    use HasFactory;
    public $fillable=['id','client_id','product_id','color_id','quantity','created_at'];
}
