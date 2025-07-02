<div class="relative inline-block">
    <a href="#" class="text-white text-xl">
        <i class='bx bx-cart bx-sm'></i>
    </a>
    @if ($totalQuantity >= 0)
        <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs font-bold rounded-full px-[5px]">
            {{ $totalQuantity }}
        </span>
    @endif
</div>