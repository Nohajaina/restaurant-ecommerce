<div class="p-4 border-t">
    <h3 class="text-xl font-semibold mb-4">🛒 Panier</h3>
    @foreach($items as $item)
        <div class="border-b py-2">
            {{ $item->name }} — {{ $item->price }} Ar
        </div>
    @endforeach
</div>
