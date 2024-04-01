<?php

use Livewire\Volt\Component;

new class extends Component {

  public $produk;
    
}; 

?>

<x-dashboard-layout>

  @volt

  <div class="py-4">

    <div class="row">

      <div class="col-md-10 mb-2">

        <h5>{{ $produk->title }}</h5>

        <a href="/dashboard/produk" class="btn btn-success btn-sm" wire:navigate>

          <i class="bi bi-arrow-left"></i>

          Kembali ke produk

        </a>

        <a href="" class="btn btn-warning btn-sm" wire:navigate>

          Ubah

        </a>

        <a href="" class="btn btn-danger btn-sm" wire:navigate>

          Hapus

        </a>

        <img src="/img/1/1.jpeg" class="img-fluid mt-2" alt="laptop_gaming">

        <p>

          <a href="/kategori/{{ $produk->kategori->slug }}" wire:navigate>

            {{ $produk->kategori->nama }}

          </a>

        </p>

        <p>{!! $produk->body !!}</p>

        <a href="#" class="btn btn-primary btn-sm rounded-0">

          Beli Sekarang

        </a>

      </div>

    </div>

  </div>

  @endvolt

</x-dashboard-layout>
