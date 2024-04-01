<?php

  use Livewire\Volt\Component;
 
  new class extends Component {

    public function keluar() {

      auth()->logout();

      session()->flash('success', 'Berhasil keluar, silahkan masuk kembali!');

      $this->redirect('/masuk', navigate:true); 

    }
      
  }; 

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">

  <div class="container-fluid">

    <a class="navbar-brand py-2" href="/" wire:navigate>ONLINE SHOP</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">

      <span class="navbar-toggler-icon"></span>

    </button>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

      <div class="navbar-nav ms-auto">

        @auth

        <li class="nav-item dropdown">

          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">

            Selamat datang kembali, <span class="text-capitalize">{{ auth()->user()->name }}</span>

          </a>

          <ul class="dropdown-menu">

            <li><a class="dropdown-item" href="/dashboard" wire:navigate>My Dashboard</a></li>

            <li>

              <hr class="dropdown-divider">

            </li>

            <li>

              @volt

              <form wire:submit='keluar'>

                <button type="submit" class="dropdown-item">Keluar</button>

              </form>

              @endvolt

            </li>

          </ul>

        </li>

        @else

        <a class="nav-link" href="/masuk" wire:navigate>MASUK</a>

        <a class="nav-link active btn btn-primary btn-sm" href="/daftar" wire:navigate>DAFTAR</a>

        @endauth

      </div>

    </div>

  </div>

</nav>
