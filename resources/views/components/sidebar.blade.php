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

<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">

  <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">

    <div class="offcanvas-header">

      <h5 class="offcanvas-title" id="sidebarMenuLabel">

        <a href="/dashboard" class="text-decoration-none text-dark">

          ONLINE SHOP

        </a>

      </h5>

      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>

    </div>

    <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">

      <ul class="nav flex-column">

        <li class="nav-item">

          <a class="nav-link d-flex align-items-center gap-2 {{ Route::is('dashboard') ? 'active' : 'text-secondary' }}" aria-current="page" href="/dashboard" wire:navigate>

            <svg class="bi">

              <use xlink:href="#{{ Route::is('dashboard') ? 'house-fill' : 'house' }}" />

            </svg>

            Dashboard

          </a>

        </li>

        <li class="nav-item">

          <a class="nav-link d-flex align-items-center gap-2 {{ Route::is('pesanan') ? 'active' : 'text-secondary' }}" href="/dashboard/pesanan" wire:navigate>

            <svg class="bi">

              <use xlink:href="#{{ Route::is('pesanan') ? 'file-text-fill' : 'file-text' }}" />

            </svg>

            Pesanan

          </a>

        </li>

        <li class="nav-item">

          <a class="nav-link d-flex align-items-center gap-2 {{ Route::is('produk') ? 'active' : 'text-secondary' }}" href="/dashboard/produk" wire:navigate>

            <svg class="bi">

              <use xlink:href="#{{ Route::is('produk') ? 'cart-fill' : 'cart' }}" />

            </svg>

            Produk

          </a>

        </li>

        <li class="nav-item">

          <a class="nav-link d-flex align-items-center gap-2 {{ Route::is('pelanggan') ? 'active' : 'text-secondary' }}" href="/dashboard/pelanggan" wire:navigate>

            <svg class="bi">

              <use xlink:href="#{{ Route::is('pelanggan') ? 'people-fill' : 'people' }}" />

            </svg>

            Pelanggan

          </a>

        </li>

        <li class="nav-item">

          <a class="nav-link d-flex align-items-center gap-2 {{ Route::is('laporan') ? 'active' : 'text-secondary' }}" href="/dashboard/laporan" wire:navigate>

            <svg class="bi">

              <use xlink:href="#{{ Route::is('laporan') ? 'graph-up-arrow' : 'graph-up' }}" /></svg>

            Laporan

          </a>

        </li>

        <li class="nav-item">

          <a class="nav-link d-flex align-items-center gap-2 {{ Route::is('integrasi') ? 'active' : 'text-secondary' }}" href="/dashboard/integrasi" wire:navigate>

            <svg class="bi">

              <use xlink:href="#{{ Route::is('integrasi') ? 'puzzle-fill' : 'puzzle' }}" />

            </svg>

            Integrasi

          </a>

        </li>

      </ul>

      <hr class="my-3">

      <ul class="nav flex-column mb-auto">

        <li class="nav-item">

          <a class="nav-link d-flex align-items-center gap-2 {{ Route::is('pengaturan') ? 'active' : 'text-secondary' }}" href="/dashboard/pengaturan" wire:navigate>

            <svg class="bi">

              <use xlink:href="#{{ Route::is('pengaturan') ? 'gear-wide-connected' : 'gear-wide' }}" />

            </svg>

            Pengaturan

          </a>

        </li>

        <li class="nav-item">

          @volt

          <form wire:submit='keluar'>

            <button type="submit" class="nav-link d-flex align-items-center gap-2 text-secondary">

              <svg class="bi">

                <use xlink:href="#door-closed" /></svg>

              Keluar

            </button>

          </form>

          @endvolt

        </li>

      </ul>

    </div>

  </div>

</div>
