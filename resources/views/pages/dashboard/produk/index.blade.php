<?php

use Livewire\Volt\Component;
use function Laravel\Folio\name;
use App\Models\Produk;
 
name('produk');

new class extends Component {

  public $produks;

  public function mount() {
    
    $this->produks = Produk::all();

  }
    
}; 

?>

<x-dashboard-layout>

  @volt

  <div>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

      <h1 class="h2">My Produk</h1>

    </div>

    <div class="table-responsive small col-lg-8">

      <a href="/dashboard/produk/tambah-produk" class="btn btn-primary btn-sm mb-3" wire:navigate>Tambah Produk</a>

      @if(session()->has('success'))

      <div class="alert alert-success alert-dismissible fade show" role="alert">

        {{ session('success') }}

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

      </div>

      @endif

      <table class="table table-striped table-sm">

        <thead>

          <tr>

            <th scope="col">#</th>

            <th scope="col">Nama Produk</th>

            <th scope="col">Kategori</th>

            <th scope="col">Aksi</th>

          </tr>

        </thead>

        <tbody>

          @foreach ($produks as $produk)

          <tr>

            <td>{{ $loop->iteration }}</td>

            <td>{{ $produk->title }}</td>

            <td>{{ $produk->kategori->nama }}</td>

            <td>

              <a class="badge bg-info" href="/dashboard/produk/{{ $produk->slug }}" wire:navigate>

                <svg class="bi">

                  <use xlink:href="#eye" />

                </svg>

              </a>

              <a class="badge bg-warning" href="" wire:navigate>

                <svg class="bi">

                  <use xlink:href="#edit" />

                </svg>

              </a>

              <a class="badge bg-danger" href="" wire:navigate>

                <svg class="bi">

                  <use xlink:href="#delete" />

                </svg>

              </a>

            </td>

          </tr>

          @endforeach

        </tbody>

      </table>

    </div>

  </div>

  @endvolt

</x-dashboard-layout>
