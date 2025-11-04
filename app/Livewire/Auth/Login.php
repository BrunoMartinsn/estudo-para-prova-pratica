<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
     public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:6'
    ];

    protected $messages = [
        'email.required' => 'O email é obrigatório.',
        'email.email' => 'O formato de email é inválido.',
        'password.required' => 'A senha é obrigatória.',
        'password.min' => 'A senha deve conter no mínimo 6 caracteres.'
    ];

    public function login()
    {
        // Valida os dados
        $this->validate();

        // Tenta fazer o login
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
    session()->regenerate();
    return redirect()->route('user.dashboard');
}

        // Caso as credenciais estejam incorretas, exibe uma mensagem de erro
        session()->flash('error', 'Email ou senha incorretos.');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
