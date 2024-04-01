<?php

use Livewire\Volt\Component;
use App\Models\Kategori;
 
new class extends Component {

  public $kategoris;

  public function mount() {
    
    $this->kategoris = Kategori::all();

  }

}; 

?>

<x-app-layout>

  @volt

  <div class="py-4">

    <div class="row mb-3">

      <div class="col-md text-center">

        <h4>Semua Kategori</h4>

      </div>

    </div>

    <div class="row g-2">

      @foreach ($kategoris as $kategori)

      <ul class="list-group">

        <a href="/kategori/{{ $kategori->slug }}" class="text-decoration-none" wire:navigate>

          <li class="list-group-item">{{ $kategori->nama }}</li>

        </a>

      </ul>

      @endforeach

    </div>

  </div>

  @endvolt

</x-app-layout>
