@extends('layouts.app',[$title="Accueil"])
@section("section")
   <section class="banner">
        <div class="container">
            <div class="banner-content">
                <h2 class="text-light">Commandez en Ligne, Savourez en Paix</h2>
            </div>
        </div>
   </section>
   <div class="box"></div>
   <section class="menu">
        <div class="container mt-5">
            <h2 class="mb-4">Nos menus</h2>
            <div class="row">
                <div class="col-md-8">
                    <livewire:menu-list />
                </div>
                <div class="col-md-4">
                    <livewire:panier />
                </div>
            </div>
        </div>
        {{-- <div class="container">
            <div class="row">
                <div class="col-md-6 bg-light shadow p-2">
                    <div class="row">
                        <div class="menu-img col-md-4">
                            <img src="{{asset('assets/img/crispy-french-fries-with-ketchup-mayonnaise-300x200.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <h5>Crispy french fries with ketchup mayonnaise</h5>
                            <h4>30 000 Ar</h4>

                            <form action="" method="post" class=" d-flex justify-content-end">
                                <input type="hidden" name="">
                                <button class="btn btn-success p-1 rounded-2 text-center"><i class='bx bxs-cart-add bx-sm'></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
   </section>
   
@endsection