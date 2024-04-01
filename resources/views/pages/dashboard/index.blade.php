<?php

use Livewire\Volt\Component;
use function Laravel\Folio\{middleware};

middleware(['auth']);

new class extends Component {

  public function keluar() {

    auth()->logout();

    session()->flash('success', 'Berhasil keluar, silahkan masuk kembali!');

    $this->redirect('/masuk', navigate:true); 

  }
    
}; 

?>

<x-dashboard-layout>

  @volt

  <div>

    <header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow" data-bs-theme="dark">

      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="/dashboard" wire:navigate>ONLINE SHOP</a>

      <ul class="navbar-nav flex-row d-md-none">

        <li class="nav-item text-nowrap">

          <button class="nav-link px-3 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSearch" aria-controls="navbarSearch" aria-expanded="false" aria-label="Toggle search">

            <svg class="bi">

              <use xlink:href="#search" />

            </svg>

          </button>

        </li>

        <li class="nav-item text-nowrap">

          <button class="nav-link px-3 text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">

            <svg class="bi">

              <use xlink:href="#list" />

            </svg>

          </button>

        </li>

      </ul>

      <div id="navbarSearch" class="navbar-search w-100 collapse">

        <input class="form-control w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">

      </div>

    </header>

    <div class="container-fluid">

      <div class="row">

        <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">

          <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">

            <div class="offcanvas-header">

              <h5 class="offcanvas-title" id="sidebarMenuLabel">

                <a href="/dashboard" class="text-decoration-none text-dark" wire:navigate>

                  ONLINE SHOP

                </a>

              </h5>

              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>

            </div>

            <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">

              <ul class="nav flex-column">

                <li class="nav-item">

                  <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="#">

                    <svg class="bi">

                      <use xlink:href="#house-fill" />

                    </svg>

                    Dashboard

                  </a>

                </li>

                <li class="nav-item">

                  <a class="nav-link d-flex align-items-center gap-2" href="#">

                    <svg class="bi">

                      <use xlink:href="#file-earmark" />

                    </svg>

                    Orders

                  </a>

                </li>

                <li class="nav-item">

                  <a class="nav-link d-flex align-items-center gap-2" href="#">

                    <svg class="bi">

                      <use xlink:href="#cart" />

                    </svg>

                    Products

                  </a>

                </li>

                <li class="nav-item">

                  <a class="nav-link d-flex align-items-center gap-2" href="#">

                    <svg class="bi">

                      <use xlink:href="#people" />

                    </svg>

                    Customers

                  </a>

                </li>

                <li class="nav-item">

                  <a class="nav-link d-flex align-items-center gap-2" href="#">

                    <svg class="bi">

                      <use xlink:href="#graph-up" /></svg>

                    Reports

                  </a>

                </li>

                <li class="nav-item">

                  <a class="nav-link d-flex align-items-center gap-2" href="#">

                    <svg class="bi">

                      <use xlink:href="#puzzle" />

                    </svg>

                    Integrations

                  </a>

                </li>

              </ul>

              <hr class="my-3">

              <ul class="nav flex-column mb-auto">

                <li class="nav-item">

                  <a class="nav-link d-flex align-items-center gap-2" href="#">

                    <svg class="bi">

                      <use xlink:href="#gear-wide-connected" />

                    </svg>

                    Settings

                  </a>

                </li>

                <li class="nav-item">

                  <form wire:submit='keluar'>

                    <button type="submit" class="nav-link d-flex align-items-center gap-2" href="#">

                      <svg class="bi">

                        <use xlink:href="#door-closed" /></svg>

                      Sign out

                    </button>

                  </form>

                </li>

              </ul>

            </div>

          </div>

        </div>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

            <h1 class="h2">Selamat datang kembali, <span class="text-capitalize">{{ auth()->user()->name }}</span></h1>

          </div>

          {{-- <h2>Section title</h2>
          <div class="table-responsive small">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Header</th>
                  <th scope="col">Header</th>
                  <th scope="col">Header</th>
                  <th scope="col">Header</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1,001</td>
                  <td>random</td>
                  <td>data</td>
                  <td>placeholder</td>
                  <td>text</td>
                </tr>
                <tr>
                  <td>1,002</td>
                  <td>placeholder</td>
                  <td>irrelevant</td>
                  <td>visual</td>
                  <td>layout</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>data</td>
                  <td>rich</td>
                  <td>dashboard</td>
                  <td>tabular</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>information</td>
                  <td>placeholder</td>
                  <td>illustrative</td>
                  <td>data</td>
                </tr>
                <tr>
                  <td>1,004</td>
                  <td>text</td>
                  <td>random</td>
                  <td>layout</td>
                  <td>dashboard</td>
                </tr>
                <tr>
                  <td>1,005</td>
                  <td>dashboard</td>
                  <td>irrelevant</td>
                  <td>text</td>
                  <td>placeholder</td>
                </tr>
                <tr>
                  <td>1,006</td>
                  <td>dashboard</td>
                  <td>illustrative</td>
                  <td>rich</td>
                  <td>data</td>
                </tr>
                <tr>
                  <td>1,007</td>
                  <td>placeholder</td>
                  <td>tabular</td>
                  <td>information</td>
                  <td>irrelevant</td>
                </tr>
                <tr>
                  <td>1,008</td>
                  <td>random</td>
                  <td>data</td>
                  <td>placeholder</td>
                  <td>text</td>
                </tr>
                <tr>
                  <td>1,009</td>
                  <td>placeholder</td>
                  <td>irrelevant</td>
                  <td>visual</td>
                  <td>layout</td>
                </tr>
                <tr>
                  <td>1,010</td>
                  <td>data</td>
                  <td>rich</td>
                  <td>dashboard</td>
                  <td>tabular</td>
                </tr>
                <tr>
                  <td>1,011</td>
                  <td>information</td>
                  <td>placeholder</td>
                  <td>illustrative</td>
                  <td>data</td>
                </tr>
                <tr>
                  <td>1,012</td>
                  <td>text</td>
                  <td>placeholder</td>
                  <td>layout</td>
                  <td>dashboard</td>
                </tr>
                <tr>
                  <td>1,013</td>
                  <td>dashboard</td>
                  <td>irrelevant</td>
                  <td>text</td>
                  <td>visual</td>
                </tr>
                <tr>
                  <td>1,014</td>
                  <td>dashboard</td>
                  <td>illustrative</td>
                  <td>rich</td>
                  <td>data</td>
                </tr>
                <tr>
                  <td>1,015</td>
                  <td>random</td>
                  <td>tabular</td>
                  <td>information</td>
                  <td>text</td>
                </tr>
              </tbody>
            </table>
          </div> --}}

        </main>

      </div>

    </div>

  </div>

  @endvolt

</x-dashboard-layout>
