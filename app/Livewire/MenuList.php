<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Menu;
class MenuList extends Component
{

    public function render()
    {
        $menus = Menu::all();
        return view('livewire.menu-list', compact('menus'));
    }
}
