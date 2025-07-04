<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Menu;
class Panier extends Component
{

   public $items = [];

    protected $listeners = ['menuAdded'];
    public function mount()
    {
        $this->items = session()->get('cart', []);
    }
    public function menuAdded($menuId)
    {
        $menu = Menu::find($menuId);

        if (!$menu) return;

        // Si déjà dans le panier → ajouter +1
        if (isset($this->items[$menuId])) {
            $this->items[$menuId]['quantity'] += 1;
            $this->items[$menuId]['total_price'] = $this->items[$menuId]['unit_price'] * $this->items[$menuId]['quantity'];
        } else {
            $this->items[$menuId] = [
                'id' => $menu->id,
                'name' => $menu->name,
                'unit_price' => $menu->price,
                'total_price' => $menu->price,
                'quantity' => 1
            ];
        }

        session()->put('cart', $this->items);
         $this->dispatch('cartUpdated');
    }

    
    public function increment($menuId)
    {
        if (isset($this->items[$menuId])) {
            $this->items[$menuId]['quantity']++;
            $this->items[$menuId]['total_price'] = $this->items[$menuId]['unit_price'] * $this->items[$menuId]['quantity'];
        }

        session()->put('cart', $this->items);
         $this->dispatch('cartUpdated');
    }

    public function decrement($menuId)
    {
        if (isset($this->items[$menuId]) && $this->items[$menuId]['quantity'] > 1) {
            $this->items[$menuId]['quantity']--;
             $this->items[$menuId]['total_price'] = $this->items[$menuId]['unit_price'] * $this->items[$menuId]['quantity'];
        } else {
            unset($this->items[$menuId]);
        }
        session()->put('cart', $this->items);
         $this->dispatch('cartUpdated');
    }

    public function render()
    {
        return view('livewire.panier');
    }

    

}
