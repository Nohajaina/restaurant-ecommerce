<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Menu;
class Panier extends Component
{

    public $items = [];

    protected $listeners = ['ajouterAuPanier' => 'ajouter'];

    public function ajouter($menuId)
    {
        $menu = Menu::find($menuId);
        if (!$menu) return;

        $this->items[$menuId] = [
            'nom' => $menu->nom,
            'prix' => $menu->prix,
            'quantite' => isset($this->items[$menuId]) ? $this->items[$menuId]['quantite'] + 1 : 1,
        ];
    }

    public function render()
    {
        return view('livewire.panier');
    }

}
