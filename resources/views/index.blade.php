@extends('layouts.app',[$title="Accueil"])
@section("section")
   <section class="banner flex justify-center items-center">
        <div class="banner-content">
            <h2 class="text-white">Commandez en Ligne, Savourez en Paix</h2>
        </div>
   </section>
   <div class="box"></div>

{{-- 
   <section class="menu">
        <div class="container mt-5">
            <h2 class="mb-4">Nos menus</h2>
            <div class="row">
                <div class="col-md-8">
                    <livewire:menu-list>
                </div>
                <div class="col-md-4">
                    <livewire:panier>
                </div>
            </div>
        </div>
   </section> --}}
   <section class="max-w-7xl mx-auto p-6 grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
        <div class="md:col-span-2">
            @livewire('menu-list') 
        </div>
        <div>
            <livewire:panier />
        </div>
   </section>
@endsection