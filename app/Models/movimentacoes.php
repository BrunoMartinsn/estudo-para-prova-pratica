<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class movimentacoes extends Model
{

    protected $fillable = [
        'produto_id',
        'tipo',
        'quantidade',
        'data_movimentacao'
    ];





    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }
}
