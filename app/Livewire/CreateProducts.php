<?php

namespace App\Livewire;

use App\Models\Product;
use Illuminate\Support\Facades\Gate;
use LivewireUI\Modal\ModalComponent;

class CreateProducts extends ModalComponent
{

    public function render()
    {
        return view('livewire.create-products');
    }
}
