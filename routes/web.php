<?php

use App\Livewire\Auth\Login;
use App\Livewire\Logout;
use App\Livewire\Movimentacoes\Create;
use App\Livewire\Movimentacoes\Edit;
use App\Livewire\Movimentacoes\Index;
use App\Livewire\Movimentacoes\Show;
use App\Livewire\Produto\ProdutoCreate;
use App\Livewire\Produto\ProdutoEdit;
use App\Livewire\Produto\ProdutoIndex;
use App\Livewire\Produto\ProdutoShow;
use App\Livewire\User\Dashboard;

use App\Models\Produto;
use Illuminate\Support\Facades\Route;

Route::get('/', Login::class)->name('auth.login');
Route::get('/logout', Logout::class)->name('logout');
Route::get('/dashboard', Dashboard::class)->name('user.dashboard');


Route::get('/movimentaçoes/create', Create::class)->name('movimentacoes.create');
Route::get('/movimentacoes/index', Index::class)->name('movimentacoes.index');
Route::get('/movimentaçoes/show', Show::class)->name('movimentacoes.show');






Route::get('create/produto', ProdutoCreate::class)->name('produto-create');
Route::get('index/produto', ProdutoIndex::class)->name('produto-index');
Route::get('show/produto', ProdutoShow::class)->name('produto-show');
Route::get('edit/produto', ProdutoEdit::class)->name('produto-edit');