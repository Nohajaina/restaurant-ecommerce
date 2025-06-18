<div class="bg-white shadow rounded-xl p-4">
    <h3 class="text-xl font-bold mb-4">🛒 Votre panier</h3>

    @forelse($items as $item)
        <div class="flex justify-between items-center border-b py-2">
            <div>
                <p class="font-semibold">{{ $item['name'] }}</p>
                <p class="text-sm text-gray-500">{{ $item['price'] }} Ar</p>
            </div>

            <div class="flex items-center gap-2">
                <button wire:click="decrement({{ $item['id'] }})" class="bg-gray-200 px-2 rounded">-</button>
                <span>{{ $item['quantity'] }}</span>
                <button wire:click="increment({{ $item['id'] }})" class="bg-gray-200 px-2 rounded">+</button>
            </div>
        </div>
    @empty
        <p class="text-gray-500">Aucun article dans le panier.</p>
    @endforelse
</div>
