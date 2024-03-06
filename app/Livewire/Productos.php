<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class Productos extends Component
{
    public $search = "";

    protected $queryString = [
        "search" => ["except" => ""]
    ];

    public function render(){
        $productos = Product::where('nombre', 'LIKE', "%{$this->search}%")->get();
        return view('livewire.productos')->with([
            'productos' => $productos
        ]);
    }
}
