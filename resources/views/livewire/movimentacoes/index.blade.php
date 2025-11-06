<div class="container mt-4">
   
    <div class="row mb-3">
        <div class="col-md-6">
            <h2>Produtos</h2>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('produto-create') }}" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> Novo Movimentação
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6">
                    <input type="text" wire:model.debounce.300ms="search" class="form-control"
                        placeholder="Buscar produtos...">
                </div>
                <div class="col-md-3">
                    <select wire:model="perPage" class="form-select">
                        <option value="10">10 por página</option>
                        <option value="25">25 por página</option>
                        <option value="50">50 por página</option>
                        <option value="100">100 por página</option>
                    </select>
                </div>
            </div>

            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <th>Produto ID</th>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Tipo</th>
                        <th>Quantidade</th>
                        <th>Data</th>
                        <th>Ações</th>
                    </thead>
                    <tbody>
                        @forelse($movimentacoes as $movimentacoe)
                            <tr>
                                <td>{{ $movimentacoe->produto_id }}</td>
                                <td>{{ $movimentacoe->id }}</td>
                                <td>{{ $movimentacoe->nome }}</td>
                                <td>{{ $movimentacoe->tipo }}</td>
                                <td>{{ $movimentacoe->quantidade }}</td>
                                <td>{{ $movimentacoe->data_movimentacao }}</td>
                                <td>
                                    <a href="{{ route('movimentacoes.show', $movimentacoe->id) }}"
                                        class="btn btn-sm btn-info" title="Ver detalhes">
                                        <i class="bi bi-eye"></i>
                                    </a>

                                    <button wire:click="delete({{ $movimentacoe->id }})" 
        class="btn btn-sm btn-danger"
        onclick="return confirm('Tem certeza que deseja excluir?')" 
        title="Excluir">
    <i class="bi bi-trash"></i> 
</button>

                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">
                                    Nenhuma movimentação encontrado.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-3">
                {{ $movimentacoes->links() }}
            </div>
        </div>
    </div>
