<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Menu;
class Panier extends Component
{

   public $items = [];

    protected $listeners = ['menuAdded'];

    public function menuAdded($menuId)
    {
        $menu = Menu::find($menuId);

        if (!$menu) return;

        // Si déjà dans le panier → ajouter +1
        if (isset($this->items[$menuId])) {
            $this->items[$menuId]['quantity'] += 1;
        } else {
            $this->items[$menuId] = [
                'id' => $menu->id,
                'name' => $menu->name,
                'price' => $menu->price,
                'quantity' => 1
            ];
        }
    }

    public function increment($menuId)
    {
        if (isset($this->items[$menuId])) {
            $this->items[$menuId]['quantity']++;
        }
    }

    public function decrement($menuId)
    {
        if (isset($this->items[$menuId]) && $this->items[$menuId]['quantity'] > 1) {
            $this->items[$menuId]['quantity']--;
        } else {
            unset($this->items[$menuId]);
        }
    }

    public function render()
    {
        return view('livewire.panier');
    }

}
