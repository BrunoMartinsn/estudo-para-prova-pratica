<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'nome',
        'descricao',
        'preco',
        'quantidade',
        'quantidade_minima'
    ];
   
public function produto(){
    return $this->hasMany(movimentacoes::class);
}
  

}
