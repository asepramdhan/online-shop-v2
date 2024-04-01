<?php

use Livewire\Volt\Component;

new class extends Component {

  public $produk;

}; 

?>

<x-app-layout>

  @volt

  <div class="py-4">

    <div class="row justify-content-center">

      <div class="col-md-10 mb-2">

        <div class="card border-0 shadow-lg">

          <img src="/img/1/1.jpeg" class="card-img-top" alt="laptop_gaming">

          <div class="card-body p-4">

            <h5 class="card-title">{{ $produk->title }}</h5>

            <p>

              <a href="/kategori/{{ $produk->kategori->slug }}" wire:navigate>

                {{ $produk->kategori->nama }}

              </a>

            </p>

            <p class="card-text">{!! $produk->body !!}</p>

            <a href="#" class="btn btn-primary btn-sm rounded-0">

              Beli Sekarang

            </a>

          </div>

        </div>

      </div>

    </div>

  </div>

  @endvolt

</x-app-layout>
