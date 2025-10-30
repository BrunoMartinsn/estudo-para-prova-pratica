<?php

namespace App\Livewire\Auth;

use Illuminate\Container\Attributes\Auth;
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
        'email.required' => 'email obrigatório',
        'email.email' => 'formato de email invalido',
        'password.required' => 'password obrigatório',
        'password.min' => 'senha deve conter no minimo 6 caracteres'
    ];


    public function login()
    {
        $this->validate();
       
        if (Auth::attempt(['email' => $this->$email , 'password' => $this-> $password])) {
            session()->regenerate();
            return redirect()->route('deshboard');
        }

        session()->flash('error', 'Email e senha incorretos ');
    }
    public function render()
    {
        return view('livewire.auth.login');
    }
}
