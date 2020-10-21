<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemRequisicao extends Model
{
    protected $fillable = ['id','material_id', 'quantidade'];

    public function getMaterial(){
        return $this->belongsTo('App\Material');
    }
}
