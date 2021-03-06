<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requisicao extends Model
{
    protected $fillable = ['id','data','funcionario_id'];

    public function getFuncionario() {
        return $this->hasMany('App\Material');
    }
}
