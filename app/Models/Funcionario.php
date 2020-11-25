<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $fillable = ['id','nome','endereco'];

    public function getRequisicoes(){
        return $this->hasMany('App\Requisicao');
    }

}
