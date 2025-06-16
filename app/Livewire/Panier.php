<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Menu;
class Panier extends Component
{

    public $cart = [];

public function addToCart($productId)
{
    $this->cart[$productId] = ($this->cart[$productId] ?? 0) + 1;
    session()->flash('message', 'Produit ajouté au panier !');
}

    public function render()
    {
        return view('livewire.panier');
    }

}
