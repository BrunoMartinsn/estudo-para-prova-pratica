<?php

use App\Livewire\Auth\Login;
use App\Livewire\Produto\ProdutoCreate;
use App\Livewire\Produto\ProdutoEdit;
use App\Livewire\Produto\ProdutoIndex;
use App\Livewire\Produto\ProdutoShow;
use App\Models\Produto;
use Illuminate\Support\Facades\Route;

Route::get('/', Login::class);

Route::get('create/produto', ProdutoCreate::class)->name('produto-create');
Route::get('index/produto', ProdutoIndex::class)->name('produto-index');
Route::get('show/produto', ProdutoShow::class)->name('produto-show');
Route::get('edit/produto', ProdutoEdit::class)->name('produto-edit');