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

    public function ajouterAuPanier($menuId)
    {
        $menu = Menu::find($menuId);

        $panier = session()->get('panier', []);

        if (isset($panier[$menuId])) {
            $panier[$menuId]['quantite'] += 1;
        } else {
            $panier[$menuId] = [
                'nom' => $menu->nom,
                'prix' => $menu->prix,
                'quantite' => 1,
            ];
        }

        session()->put('panier', $panier);

        $this->dispatch('panierMisAJour'); // Notifier Panier
    }

    public function render()
    {
        return view('livewire.menu-list');
    }
}
