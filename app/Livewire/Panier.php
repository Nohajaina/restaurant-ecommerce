<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Menu;
class Panier extends Component
{

    public $items = [];

    protected $listeners = ['addToCart'];

    public function addToCart($menuId)
    {
        $menu = Menu::find($menuId);
        $this->items[] = $menu;
    }

    public function render()
    {
        return view('livewire.panier');
    }

}
