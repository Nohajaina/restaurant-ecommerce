<div class="card">
    <div class="card-header">🛒 Panier</div>
    <div class="card-body">
        @forelse ($articles as $article)
            <div class="d-flex justify-content-between">
                <div>{{ $article->nom }} ({{ $panier[$article->id] }})</div>
                <button wire:click="retirerDuPanier({{ $article->id }})" class="btn btn-danger btn-sm">-</button>
            </div>
        @empty
            <div>Votre panier est vide.</div>
        @endforelse
    </div>
</div>
