<?php

namespace App\Livewire\Movimentacoes;

use App\Models\movimentacoes;
use Livewire\Component;

class Index extends Component
{
    public $search = '';
public $perPage = 10;
public $sortField = 'nome';
public $sortDirection = 'asc';
    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => 10],
    ];
    public function render()
    {
          $movimentacoes = movimentacoes::join('produtos', 'movimentacoes.produto_id', '=', 'produtos.id')
        ->select('movimentacoes.*', 'produtos.nome as nome')
        ->where(function ($query) {
            $query->where('produtos.nome', 'like', "%{$this->search}%")
                  ->orWhere('movimentacoes.tipo', 'like', "%{$this->search}%")
                  ->orWhere('movimentacoes.quantidade', 'like', "%{$this->search}%")
                  ->orWhere('movimentacoes.data_movimentacao', 'like', "%{$this->search}%");
        })
        ->orderBy($this->sortField, $this->sortDirection)
        ->paginate($this->perPage);
        return view('livewire.movimentacoes.index', [
        'movimentacoes' => movimentacoes::orderBy('created_at', 'desc')->paginate(10),
    ]);
    }
}
