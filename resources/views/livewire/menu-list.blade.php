<div class="grid grid-cols-1 md:grid-cols-3 gap-6 p-4">
    @foreach($menus as $menu)
        <div class="border rounded-xl p-4 shadow">
            <h2 class="text-xl font-bold">{{ $menu->name }}</h2>
            <p class="text-gray-600">{{ $menu->description }}</p>
            <p class="text-green-600">{{ $menu->price }} Ar</p>
            <button wire:click="$emit('addToCart', {{ $menu->id }})"
                class="bg-blue-500 text-white px-4 py-2 mt-2 rounded hover:bg-blue-600">
                Ajouter au panier
            </button>
        </div>
    @endforeach
</div>
