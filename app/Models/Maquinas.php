<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maquinas extends Model
{
    protected $fillable = ['id','tipo','produto'] ;

    public function getMaquinas(){
        return $this->hasMany('App\Maquinas');
    }
}
