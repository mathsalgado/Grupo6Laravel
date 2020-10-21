<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maquinas extends Model
{
    protected $fillable = ['id', 'descricao'];

    public function getItens(){
        return $this->hasMany('App\ItemRequisicao');
    }
}
