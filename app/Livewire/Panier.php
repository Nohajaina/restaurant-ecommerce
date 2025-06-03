<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Menu;
class Panier extends Component
{

    public $panier = [];

    protected $listeners = ['panierMisAJour' => 'actualiserPanier'];

    public function mount()
    {
        $this->actualiserPanier();
    }

    public function actualiserPanier()
    {
        
        $this->panier = session()->get('panier', []);
    }

    public function render()
    {
        return view('livewire.panier');
    }

}
