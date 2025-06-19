<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Menu;
class MenuList extends Component
{

    public $menus;

    public function mount()
    {
        $this->menus = Menu::all();
    }

    public function addToCart($menuId)
    {
        $this->dispatch('menuAdded', $menuId);
    }

    public function render()
    {
        return view('livewire.menu-list');
    }
}
