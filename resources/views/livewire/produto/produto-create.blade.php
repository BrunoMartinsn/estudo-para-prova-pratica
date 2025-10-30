<div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>


    <body class="text-bg-secondary p-3">







        <div class="container d-flex justify-content-center" style="width: 39%">
            <div class="row">

                <div class="row">


                    <div class="row align-items-center">

                        <div class="col">
                            <div class="card  bor" style="width: 30rem;" class="mb-10">
                                <div class="card-body">
                                    @if (session()->has('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            {{ session('success') }}
                                            <button type="button" class="btn-close" data-bs-dimiss="alert"
                                                aria-label="close"></button>
                                        </div>
                                    @endif
                                    <div class="card text-bg-secondary p-3">
                                        <h5 class="card-header  text-center">Cadastrar Produtos</h5>
                                        <div class="card-body">
                                            <form wire:submit.prevent="store">
                                                <div class="mb-3">

                                                    <label for="nome" class="form-label">Nome</label>

                                                    <input type="text" class="form-control" id="nome"
                                                        nome="nome" placeholder="Ex.: Nome" wire:model.defer="nome">
                                                    @error('nome')
                                                        <span class="text-danger small">{{ $message }}</span>
                                                    @enderror

                                                </div>
                                                <div class="mb-3">
                                                    <label for="descricao">descricao</label>
                                                    <input type="text" class="form-control" id="descricao"
                                                        nome="descricao" placeholder="Ex.: descricao"
                                                        wire:model.defer="descricao">
                                                    @error('descricao')
                                                        <span class="text-danger small">{{ $message }}</span>
                                                    @enderror


                                                </div>
                                                <div class="mb-3">
                                                    <label for="preco">preco</label>
                                                    <input type="text" class="form-control" id="preco"
                                                        nome="preco" placeholder="Ex.: R$ 00,00"
                                                        wire:model.defer="preco">
                                                    @error('preco')
                                                        <span class="text-danger small">{{ $message }}</span>
                                                    @enderror


                                                </div>

                                                 <div class="mb-3">
                                                    <label for="quantidade">quantidade</label>
                                                    <input type="text" class="form-control" id="quantidade"
                                                        nome="quantidade" placeholder="Ex.: quantidade"
                                                        wire:model.defer="quantidade">
                                                    @error('quantidade')
                                                        <span class="text-danger small">{{ $message }}</span>
                                                    @enderror


                                                </div>

                                                <div class="mb-3">
                                                    <label for="quantidade_minima">quantidade_minima</label>
                                                    <input type="text" class="form-control" id="quantidade_minima"
                                                        nome="quantidade_minima" placeholder="Ex.: quantidade_minima"
                                                        wire:model.defer="quantidade_minima">
                                                    @error('quantidade_minima')
                                                        <span class="text-danger small">{{ $message }}</span>
                                                    @enderror


                                                </div>

                                                <div class="mb-3">

                                                    <button type="submit" class="btn btn-success">Cadastrar</button>


                                                </div>
                                            </form>

                                        </div>
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
