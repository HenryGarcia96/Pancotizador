<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class Producto extends Component
{
    public $search="";
    // public $showEditModal = false;

    // Esto genera el uri con el campo de busqueda ?search=example
    protected $queryString = [
        "search" => ['except' => ""] //para remover el ?search de la uri cuando no se este ocupando el campo de busqueda
    ];

    public function render(){
        $productos = Product::where('nombre', 'LIKE', "%{$this->search}%")->get();
        return view('livewire.producto')->with([
            'productos' => $productos
        ]);
    }
}
