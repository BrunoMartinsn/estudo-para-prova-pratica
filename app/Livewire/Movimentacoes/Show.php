<?php

namespace App\Livewire\Movimentacoes;

use App\Models\movimentacoes;
use Livewire\Component;

class Show extends Component
{
     public $movimentacao; 
   public function mount()
{
    $this->movimentacao = movimentacoes::all();
}

    public function render()
    {
        return view('livewire.movimentacoes.show',[
            'movimentacoes' => movimentacoes::all(), 
        ]);
    }
}
