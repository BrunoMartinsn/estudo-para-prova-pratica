 <div class="card shadow-lg p-4 text-center" style="width: 22rem;">
     <h4 class="card-title mb-3">Você deseja sair?</h4>
     <p class="card-text mb-4">Clique em "Sair" para encerrar sua sessão de forma segura.</p>
 <a href="{{ route('auth.login') }}" class="btn btn-danger w-100 mt-2">
            <i class="bi bi-arrow-left me-2"></i> sair
        </a>
   <a href="{{ url()->previous() }}" class="btn btn-secondary w-100 mt-2">
            <i class="bi bi-arrow-left me-2"></i> Voltar
        </a>
</div>
