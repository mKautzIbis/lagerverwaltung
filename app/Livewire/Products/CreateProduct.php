<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Flux\Flux;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateProduct extends Component
{
    #[Validate('required|min:3|max:20')]
    public $name;
    #[Validate('required')]
    public $description;

    public function mount()
    {
        $this->name="";
        $this->description="";
    }

    public function store(){
        $this->validate();
        $product=new Product([ 'name' => $this->name,
            'description' => $this->description,]);
        $product->save();
        $this->reset();
        Flux::modal('create-product')->close();
        $this->dispatch('list-changed');
    }

    public function render()
    {
        return view('livewire.products.create-product');
    }
}
