<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;

class ProdutoEdit extends Component
{
    public $produto;
    public $nome;
    public $descricao; 
    public $preco;
     public $quantidade;
      public $quantidade_minima;

    public function mount(Produto $produto)
    {
        $this->produto = $produto;
        $this->nome = $produto->nome;
        $this->descricao = $produto->descricao;
        $this->preco = $produto->preco;
        $this->quantidade = $produto->quantidade;
        $this->quantidade_minima = $produto->quantidade_minima;
       
    }

    protected $rules = [
         'nome' => 'required',
        'descricao' => 'required',
        'preco' => 'required', 
        'quantidade' => 'required|integer',
        'quantidade_minima' => 'required|integer'
        
    ];

    public function update()
    {
        $this->validate();


        $this->produto->update([
       'nome' => $this->nome,
            'descricao' => $this->descricao,
            'preco' => $this->preco,
            'quantidade' => $this->quantidade,
            'quantidade_minima' => $this->quantidade_minima
            
        ]);

        session()->flash('success', 'Produto atualizado com sucesso!');
        return redirect()->route('produto-index');
    }
    public function render()
    {
        return view('livewire.produto.produto-edit');
    }
}
