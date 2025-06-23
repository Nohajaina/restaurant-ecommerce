<div class="grid grid-cols-1 md:grid-cols-3 gap-6 p-4">
    @foreach($menus as $menu)
        <div class="bg-white p-4 rounded-xl shadow">
            <h2 class="text-xl font-bold">{{ $menu->name }}</h2>
            <p class="text-gray-600 text-sm">{{ $menu->description }}</p>
            <p class="text-green-600 font-semibold">{{ $menu->price }} Ar</p>
            <button
                wire:click="addToCart({{ $menu->id }})"
                class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 mt-2 rounded">
                Ajouter au panier
            </button>
        </div>
    @endforeach
</div>
