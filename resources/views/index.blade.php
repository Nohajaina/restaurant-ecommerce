@extends('layouts.app',[$title="Accueil"])
@section("section")
   <section class="relative h-[600px] bg-cover bg-center" style="background-image: url('/assets/img/burger.jpg')">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>

        <div class="relative z-10 flex items-center justify-center h-full">
            <h1 class="text-white text-3xl font-bold">Bienvenue sur TastyFood</h1>
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