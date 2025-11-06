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
        ->where('produtos.nome', 'like', "%{$this->search}%")
        ->orderBy($this->sortField, $this->sortDirection)  // Ordenação dinâmica
        ->paginate($this->perPage);


    return view('livewire.movimentacoes.index', [
        'movimentacoes' => $movimentacoes,
    ]);
}

public function sortBy($field)
{
    // Alterna a direção da ordenação
    if ($this->sortField === $field) {
        $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
    } else {
        $this->sortField = $field;
        $this->sortDirection = 'asc';  // Reseta para ascendente quando muda o campo
    }
}
}