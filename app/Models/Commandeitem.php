<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commandeitem extends Model
{
    use HasFactory;
    public $fillable=['commade_id','pane_id'];
    public function pane(){
        return $this->belongsTo(Pane::class,'pane_id');
    }
}
