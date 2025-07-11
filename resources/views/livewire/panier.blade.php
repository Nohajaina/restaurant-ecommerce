<div class="max-w-3xl mx-auto bg-white shadow-md rounded-xl p-6 mt-8">
    <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-2">
        Votre panier
    </h2>

    @forelse($items as $item)
        <div class="flex justify-between items-center py-4 border-b border-gray-200">
            <div class="flex flex-col">
                <span class="text-lg font-semibold text-gray-800">{{ $item['name'] }}</span>
                <span class="text-sm text-gray-500">
                    {{ number_format($item['unit_price'], 0, ',', ' ') }} Ar / unité
                </span>
                <span class="text-sm font-medium text-green-600 mt-1">
                    Total : {{ number_format($item['total_price'], 0, ',', ' ') }} Ar
                </span>
            </div>

            <div class="flex items-center gap-2">
                <button wire:click="decrement({{ $item['id'] }})"
                        class="bg-red-100 hover:bg-red-200 text-red-600 font-bold px-2 rounded">
                    -
                </button>
                <span class="text-md font-medium">{{ $item['quantity'] }}</span>
                <button wire:click="increment({{ $item['id'] }})"
                        class="bg-green-100 hover:bg-green-200 text-green-600 font-bold px-2 rounded">
                    +
                </button>
            </div>
        </div>
    @empty
        <div class="text-center text-gray-500 py-12">
            Aucun article dans le panier.
        </div>
    @endforelse

    @if(count($items) > 0)
        <div class="mt-6 text-right">
            @php
                $total = collect($items)->sum('total_price');
            @endphp

            <div class="text-lg font-semibold text-gray-800 mb-4">
                Total à payer : <span class="text-green-600">{{ number_format($total, 0, ',', ' ') }} Ar</span>
            </div>

            <button class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-xl transition">
                Commander
            </button>
        </div>
    @endif
</div>
