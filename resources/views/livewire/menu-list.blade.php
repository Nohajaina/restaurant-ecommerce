<div class="row">
    @foreach ($menus as $menu)
        <div class="col-md-4">
            <div class="card mb-3">
                <img src="{{ asset('images/' . $menu->image) }}" class="card-img-top">
                <div class="card-body">
                    <h5>{{ $menu->nom }}</h5>
                    <p>{{ number_format($menu->prix) }} Ar</p>
                    <button wire:click="$emit('ajouterAuPanier', {{ $menu->id }})" class="btn btn-success">
                        Ajouter au panier
                    </button>
                </div>
            </div>
        </div>
    @endforeach
</div>

