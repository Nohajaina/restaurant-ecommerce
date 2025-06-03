<!-- resources/views/livewire/panier.blade.php -->
<div>
    <h4>🛒 Panier</h4>
    @forelse($panier as $item)
        <p>
            {{ $item['nom'] }} - {{ $item['quantite'] }} x {{ number_format($item['prix'], 0, ',', ' ') }} Ar
        </p>
    @empty
        <p>Aucun article dans le panier</p>
    @endforelse
</div>
