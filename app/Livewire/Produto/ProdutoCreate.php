<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;

class ProdutoCreate extends Component
{
     public $nome;
    public $descricao;
    public $preco;
    public $quantidade;
    public $quantidade_minima;

    protected $rules = [
        'nome' => 'required',
        'descricao' => 'required',
        'preco' => 'required', // 'decimal' precisa de parâmetros. 'numeric' é mais genérico.
        'quantidade' => 'required|integer',
        'quantidade_minima' => 'required|integer'
    ];

    protected $messages = [
        'nome.required' => 'O campo nome é obrigatório.',
        'descricao.required' => 'O campo descrição é obrigatório.',
        'preco.required' => 'O campo preço é obrigatório.',
        
        'quantidade.required' => 'O campo quantidade é obrigatório.',
        'quantidade.integer' => 'A quantidade deve ser um número inteiro.',
        'quantidade_minima.required' => 'O campo quantidade mínima é obrigatório.',
        'quantidade_minima.integer' => 'A quantidade mínima deve ser um número inteiro.',
    ];

    public function store()
    {
        // 1. Valida os dados antes de criar o produto
        $this->validate();

        // 2. Cria o produto no banco de dados
        Produto::create([
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'preco' => $this->preco,
            'quantidade' => $this->quantidade,
            'quantidade_minima' => $this->quantidade_minima
        ]);

        // 3. Limpa o formulário após o cadastro
        $this->reset();

        // 4. (Opcional) Emite um evento ou mostra uma mensagem de sucesso
        session()->flash('success', 'Produto criado com sucesso!');
    
    }
    public function render()
    {
        return view('livewire.produto.produto-create');
    }
}
