<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Register extends Component
{
    public $name, $email, $no_hp, $tggl_lahir, $password, $password_confirmation;

    public function render()
    {
        return view('livewire.auth.register')->extends('layouts.app')->section('content');
    }

    public function rules()
    {
        return [
            'name' => ['required'],
            'email' => ['required', 'email:rfc,dns', 'unique:users'],
            'no_hp' => ['required', 'unique:users', 'max:12', 'min:11'],
            'tggl_lahir' => ['required', 'date'],
            'password' => ['required', 'confirmed']
        ];
    }

    public function registerUser()
    {
        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'no_hp' => $this->no_hp,
            'tggl_lahir' => $this->tggl_lahir,
            'password' => bcrypt($this->password),
        ]);

        Auth::login($user, true);
        event(new Registered($user));
        return redirect()->to(RouteServiceProvider::HOME);
    }
}
