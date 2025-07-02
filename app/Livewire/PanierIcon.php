<?php

namespace App\Livewire;

use Livewire\Component;

class PanierIcon extends Component
{

    public $items = [];

    protected $listeners = ['cartUpdated' => 'refreshCart'];

    public function mount()
    {
        $this->items = session()->get('cart', []);
    }

    public function refreshCart()
    {
        $this->items = session()->get('cart', []);
    }

    public function render()
    {
        $totalQuantity = collect($this->items)->sum('quantity');
        
        return view('livewire.panier-icon', [
            'totalQuantity' => $totalQuantity,
            
        ]);
        
    }
    
}
