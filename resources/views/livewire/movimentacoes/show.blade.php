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
                    <h5 class="mb-0">Detalhes da Movimentação</h5>
                </div>

                <div class="card-body p-4">
                    <table class="table table-borderless">
                        <tbody>
                                                <thead>
                        <tr>
                            
                            <th>ID</th>
                            <th>Produto_id</th>
                            <th>Tipo</th>
                            <th>Quantidade</th>
                            <th>Data_movimentacao</th>
                           
                        </tr>
                    </thead>
@foreach($movimentacoes as $mov)

    <tr>
        <td>{{ $mov->id }}</td>
        <td>{{ $mov->produto->nome ?? 'Produto não encontrado' }}</td>
        <td>{{ $mov->tipo }}</td>
        <td>{{ $mov->quantidade }}</td>
          <td>{{ $mov->data_movimentacao }}</td>
    </tr>
@endforeach
                        </tbody>
                    </table>

                    <div class="text-center mt-4">
                        <a href="{{ route('movimentacoes.index') }}" class="btn btn-secondary">
                            <i class="bi bi-arrow-left me-1"></i> Voltar
                        </a>
                    </div>
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