<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-light">

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow-lg border-0 rounded-4" style="max-width: 500px; width: 100%;">
            <div class="card-header bg-success text-white text-center rounded-top-4">
                <h4 class="mb-0">Cadastrar Produtos</h4>
            </div>

            <div class="card-body p-4">

                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form wire:submit.prevent="store">
                    <div class="mb-3">
                        <label for="nome" class="form-label fw-semibold">Nome</label>
                        <input type="text" class="form-control" id="nome" placeholder="Ex.: Nome" wire:model.defer="nome">
                        @error('nome')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="descricao" class="form-label fw-semibold">Descrição</label>
                        <input type="text" class="form-control" id="descricao" placeholder="Ex.: Descrição do produto" wire:model.defer="descricao">
                        @error('descricao')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="preco" class="form-label fw-semibold">Preço</label>
                        <input type="text" class="form-control" id="preco" placeholder="Ex.: R$ 00,00" wire:model.defer="preco">
                        @error('preco')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="quantidade" class="form-label fw-semibold">Quantidade</label>
                        <input type="number" class="form-control" id="quantidade" placeholder="Ex.: 10" wire:model.defer="quantidade">
                        @error('quantidade')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="quantidade_minima" class="form-label fw-semibold">Quantidade mínima</label>
                        <input type="number" class="form-control" id="quantidade_minima" placeholder="Ex.: 5" wire:model.defer="quantidade_minima">
                        @error('quantidade_minima')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="d-grid mt-4">
                        <button type="submit" class="btn btn-success btn-lg">Cadastrar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
</body>
</html>
