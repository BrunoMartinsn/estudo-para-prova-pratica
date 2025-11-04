<div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>


    <body class="text-bg-secondary p-3">







        <div class="container py-5">

    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white text-center">
                    <h5 class="mb-0">Registrar Movimentação de Produto</h5>
                </div>

                <div class="card-body p-4">
                   
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                  
                    <form wire:submit.prevent="store">
                        
                    
                        <div class="mb-3">
                            <label for="produto_id" class="form-label fw-bold">Produto</label>
                            <select wire:model="produto_id" id="produto_id" class="form-select">
                                <option value="">Selecione um produto</option>
                                @foreach ($produtos as $produto)
                                    <option value="{{ $produto->id }}">{{ $produto->nome }}</option>
                                @endforeach
                            </select>
                            @error('produto_id') <span class="text-danger small">{{ $message }}</span> @enderror
                        </div>

                       
                        <div class="mb-3">
                            <label for="tipo" class="form-label fw-bold">Tipo de Movimentação</label>
                            <select wire:model="tipo" id="tipo" class="form-select">
                                <option value="">Selecione o tipo</option>
                                <option value="entrada">Entrada</option>
                                <option value="saida">Saída</option>
                            </select>
                            @error('tipo') <span class="text-danger small">{{ $message }}</span> @enderror
                        </div>

                    
                        <div class="mb-3">
                            <label for="quantidade" class="form-label fw-bold">Quantidade</label>
                            <input type="number" wire:model="quantidade" id="quantidade" class="form-control"
                                placeholder="Ex: 10">
                            @error('quantidade') <span class="text-danger small">{{ $message }}</span> @enderror
                        </div>

                     
                        <div class="mb-3">
                            <label class="form-label fw-bold">Data da Movimentação</label>
                            <input type="text" class="form-control" value="{{ now()->format('d/m/Y H:i') }}" disabled>
                        </div>

                      
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">
                                <i class="bi bi-save me-1"></i> Salvar Movimentação
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>

</div>

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
                </script>
    </body>

</div>
</div>
</div>
