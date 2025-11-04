<?php

namespace App\Livewire\Movimentacoes;

use App\Models\movimentacoes;
use App\Models\Produto;
use Livewire\Component;

class Create extends Component
{
    

       public $produto_id; 
    public $tipo;
    public $quantidade;
    public $data_movimentacao;

    protected $rules = [
        'tipo' => 'required',
        'quantidade' => 'required|numeric',
    ];

    protected $messages = [
        'tipo.required' => 'O campo tipo é obrigatório.',
        'quantidade.required' => 'O campo quantidade é obrigatório.',
        'quantidade.numeric' => 'A quantidade deve ser numérica.',
    ];

    public function store()
    {
       
        $this->validate();

       
        $produto = Produto::find($this->produto_id);


        movimentacoes::create([
            'produto_id' => $this->produto_id,
            'tipo' => $this->tipo,
            'quantidade' => $this->quantidade,
            'data_movimentacao' => now(),
        ]);

        
        $this->reset(['tipo', 'quantidade', 'data_movimentacao']);

       
        session()->flash('success', 'Movimentação registrada com sucesso!');

       
        return redirect()->route('movimentacoes.index');
    

    }
    public function render()
    {
        return view('livewire.movimentacoes.create', [
            'produtos' => Produto::all(), 
        ]);
    }
}
