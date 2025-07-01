<div class="relative inline-block">
    <a href="#" class="text-white text-xl">
        <i class='bx bx-cart bx-sm'></i>
    </a>
    @if ($totalQuantity > 0)
        <span class="absolute -top-2 -right-3 bg-red-500 text-white text-xs font-bold rounded-full px-2">
            {{ $totalQuantity }}
        </span>
    @endif
</div>