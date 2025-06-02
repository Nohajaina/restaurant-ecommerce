<?php

namespace App\Livewire;

use Livewire\Component;

class Panier extends Component
{

    public $panier = [];

    protected $listeners = ['ajouterAuPanier'];

    public function ajouterAuPanier($menuId)
    {
        if (!isset($this->panier[$menuId])) {
            $this->panier[$menuId] = 1;
        } else {
            $this->panier[$menuId]++;
        }
    }

    public function retirerDuPanier($menuId)
    {
        if (isset($this->panier[$menuId])) {
            $this->panier[$menuId]--;
            if ($this->panier[$menuId] <= 0) {
                unset($this->panier[$menuId]);
            }
        }
    }

    public function render()
    {
        $articles = Menu::find(array_keys($this->panier));
        return view('livewire.panier', compact('articles'));
    }

}
