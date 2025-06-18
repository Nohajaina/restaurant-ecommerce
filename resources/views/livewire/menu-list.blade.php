<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    @foreach($menus as $menu)
        <div class="border p-4 rounded-xl shadow bg-white">
            <h2 class="text-xl font-bold">{{ $menu->name }}</h2>
            <p class="text-sm text-gray-600">{{ $menu->description }}</p>
            <p class="text-green-600 font-semibold">{{ $menu->price }} Ar</p>
            <button wire:click="addToCart({{ $menu->id }})"
                class="bg-blue-600 text-white px-4 py-2 rounded mt-2 hover:bg-blue-700">
                Ajouter au panier
            </button>
        </div>
    @endforeach
</div>
