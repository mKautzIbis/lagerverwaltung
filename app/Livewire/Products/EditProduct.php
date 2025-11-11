<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Flux\Flux;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class EditProduct extends Component
{
    #[Validate('required|min:3|max:20')]
    public $name;
    #[Validate('required')]
    public $description;
    public $edit_product;

    public function mount(){
        $this->name="";
        $this->description="";
        $this->edit_product=null;
    }

    #[On('edit-product')]
    public function openDialog($id){
        $product=Product::find($id)[0];
        if($product == null)
            return;
        $this->name=$product->name;
        $this->description=$product->description;
        $this->edit_product=$product;
        Flux::modal('edit-product')->show();
    }

    public function store()
    {
        $this->validate();
        $this->edit_product->name=$this->name;
        $this->edit_product->description=$this->description;
        $this->edit_product->save();
        $this->reset();
        Flux::modal('edit-product')->close();
        $this->dispatch('list-changed');
    }
    public function render()
    {
        return view('livewire.products.edit-product');
    }
}
