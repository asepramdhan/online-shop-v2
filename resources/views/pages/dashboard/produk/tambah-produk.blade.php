<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Str; // Import untuk class Str
use App\Models\Produk;

new class extends Component {

  #[Validate('required')]
  public $title;

  public function tambahProduk()
  {

    $validatedData = $this->validate();

    $validatedData['slug'] = Str::slug($validatedData['title'], '-');

    // Generate a random string of 10 characters
    $randomString = substr(str_shuffle(str_repeat("abcdefghijklmnopqrstuvwxyz0123456789", 10)), 0, 10);

    // Append the random string to the slug
    $validatedData['slug'] = $validatedData['slug'] . '-' . $randomString;

    dd($validatedData);

    $produk = Produk::create($validatedData);

    session()->flash('success', 'Produk berhasil ditambahkan!');

    $this->redirect('/dashboard/produk', navigate:true); 

  }
    
}; 

?>

<x-dashboard-layout>

  @volt

  <div class="py-4">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

      <h1 class="h2">Tambah Produk Baru</h1>

    </div>

    <div class="col-lg-8">

      <form wire:submit='tambahProduk'>

        <div class="mb-3">

          <label for="title" class="form-label">Title</label>

          <input wire:model='title' type="text" class="form-control" id="title">

        </div>

        <button type="submit" class="btn btn-primary">Tambah Produk</button>

      </form>

    </div>

  </div>

  @endvolt

</x-dashboard-layout>
