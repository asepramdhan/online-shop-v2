<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use function Laravel\Folio\{middleware};

middleware(['guest']);

new class extends Component {

  #[Validate('required|min:3')]
  public $name = '';

  #[Validate('required|email:dns|unique:users')]
  public $email = '';
  
  #[Validate('required|min:6')]
  public $password = '';

  public function daftar() {
    
    $validateData = $this->validate();

    $validateData['password'] = Hash::make($this->password);

    User::create($validateData);

    session()->flash('success', 'Pendaftaran akun berhasil, silahkan masuk!');

    $this->redirect('/masuk', navigate:true); 

  }
    
}; 

?>

<x-app-layout>

  @volt

  <div class="py-4">

    <main class="form-signin w-100 m-auto">

      <form wire:submit='daftar'>

        <h1 class="h3 mb-3 fw-normal">Silahkan daftar</h1>

        <div class="form-floating">

          <input wire:model='name' type="name" class="form-control rounded-bottom-0 @error('name')is-invalid @enderror" id="name">

          <label for="name">Nama Lengkap</label>

          @error('name')

          <div class="invalid-feedback">

            {{ $message }}

          </div>

          @enderror

        </div>

        <div class="form-floating">

          <input wire:model='email' type="email" class="form-control rounded-0 @error('email')is-invalid @enderror" id="email">

          <label for="email">Email address</label>

          @error('email')

          <div class="invalid-feedback">

            {{ $message }}

          </div>

          @enderror

        </div>

        <div class="form-floating">

          <input wire:model='password' type="password" class="form-control @error('password')is-invalid @enderror" id="password">

          <label for="password">Password</label>

          @error('password')

          <div class="invalid-feedback">

            {{ $message }}

          </div>

          @enderror

        </div>

        <button class="btn btn-primary w-100 py-2 my-2" type="submit">DAFTAR</button>

      </form>

    </main>

  </div>

  @endvolt

</x-app-layout>
