<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use function Laravel\Folio\{middleware};
use function Laravel\Folio\name;
 
name('login');

middleware(['guest']);

new class extends Component {

  #[Validate('required|email:dns')]
  public $email = '';
  
  #[Validate('required')]
  public $password = '';

  public function masuk() {
    
    $credentials = $this->validate();

    if (Auth::attempt($credentials)) {

      $this->redirect('/dashboard', navigate:true); 

    } else {
      
      session()->flash('error', 'Email atau password anda salah!');

      $this->redirect('/masuk', navigate:true); 
      
    }

  }
    
}; 

?>

<x-app-layout>

  @volt

  <div class="py-4">

    <main class="form-signin w-100 m-auto">

      <form wire:submit='masuk'>

        <h1 class="h3 mb-3 fw-normal">Silahkan masuk</h1>

        @if(session()->has('success'))

        <div class="alert alert-success alert-dismissible fade show" role="alert">

          {{ session('success') }}

          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

        </div>

        @endif

        @if(session()->has('error'))

        <div class="alert alert-danger alert-dismissible fade show" role="alert">

          {{ session('error') }}

          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

        </div>

        @endif

        <div class="form-floating">

          <input wire:model='email' type="email" class="form-control @error('email')is-invalid @enderror" id="floatingInput">

          <label for="floatingInput">Email address</label>

          @error('email')

          <div class="invalid-feedback">

            {{ $message }}

          </div>

          @enderror

        </div>

        <div class="form-floating">

          <input wire:model='password' type="password" class="form-control @error('password')is-invalid @enderror" id="floatingPassword">

          <label for="floatingPassword">Password</label>

          @error('password')

          <div class="invalid-feedback">

            {{ $message }}

          </div>

          @enderror

        </div>

        <button class="btn btn-primary w-100 py-2" type="submit">MASUK</button>

      </form>

    </main>

  </div>

  @endvolt

</x-app-layout>
