



    <table class="table table-striped align-middle">
    <thead>
        <tr>
            <th>Produto ID</th>
            <th>ID</th>

            {{-- Botão de ordenação pelo nome --}}
            <th wire:click="sortBy('nome')" style="cursor: pointer;">
                Nome
                @if($sortField === 'nome')
                    @if($sortDirection === 'asc')
                        <i class="bi bi-arrow-up-short"></i>
                    @else
                        <i class="bi bi-arrow-down-short"></i>
                    @endif
                @endif
            </th>

            <th>Tipo</th>
            <th>Quantidade</th>
            <th>Data</th>
            <th>Ações</th>
        </tr>
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
                <td colspan="7" class="text-center text-muted py-4">
                    Nenhuma movimentação encontrada.
                </td>
            </tr>
        @endforelse
    </tbody>
</table>

