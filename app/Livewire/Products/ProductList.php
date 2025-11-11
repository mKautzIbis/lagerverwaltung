<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Livewire\Attributes\On;
use Livewire\Component;
use function PHPUnit\Framework\isEmpty;

class ProductList extends Component
{

    public function delete($id){
        $product=Product::find($id);
        if($product == null){
            return;
        }
        $product->delete();
    }

    public function edit($id){
        $this->dispatch('edit-product', ['id' => $id]);
    }

    #[On('list-changed')]
    public function render()
    {
        $products =Product::orderBy('name')->get();
        return view('livewire.products.product-list',['products' => $products]);
    }
}
