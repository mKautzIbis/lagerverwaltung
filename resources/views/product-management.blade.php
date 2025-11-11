<x-layouts.app :title="__('Products')">
    <div>
        <h1 class="text-2xl font-semibold">Products</h1>
        <livewire:products.create-product />
    </div>
    <livewire:products.product-list />
    <livewire:products.edit-product />
</x-layouts.app>
