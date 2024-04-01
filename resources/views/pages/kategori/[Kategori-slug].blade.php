<?php

use Livewire\Volt\Component;
 
new class extends Component {

  public $kategori;

}; 

?>

<x-app-layout>

  @volt

  <div class="py-4">

    <div class="row mb-3">

      <div class="col-md text-center">

        <h4>Produk Kategori : {{ $kategori->nama }}</h4>

      </div>

    </div>

    <div class="row g-2">

      @foreach ($kategori->produks as $produk)

      <div class="col-md-3 mb-2">

        <div class="card border-0 shadow">

          <a href="/produk/{{ $produk->slug }}" class="text-decoration-none text-dark" wire:navigate>

            <img src="/img/1/1.jpeg" class="card-img-top" alt="laptop_gaming">

          </a>

          <div class="card-body">

            <h5 class="card-title">

              <a href="/produk/{{ $produk->slug }}" class="text-decoration-none" wire:navigate>

                {{ $produk->title }}

              </a>

            </h5>

            <p class="card-text">{{ $produk->excerpt }}</p>

            <div class="d-grid gap-2">

              <a href="#" class="btn btn-primary btn-sm rounded-0">

                Beli Sekarang

              </a>

            </div>

          </div>

        </div>

      </div>

      @endforeach

    </div>

  </div>

  @endvolt

</x-app-layout>
