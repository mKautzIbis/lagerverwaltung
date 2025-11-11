<div>
    <flux:modal.trigger name="create-product">
        <flux:button icon="plus"></flux:button>
    </flux:modal.trigger>
    <flux:modal name="create-product" class="md:w-96" variant="flyout">
        <div class="space-y-6">
            <h2 class="text-xl font-semibold mb-5">Create Product</h2>


            <flux:field>
                <flux:label>Name</flux:label>
                <flux:description>This is the product name</flux:description>
                <flux:input wire:model="name" />
                <flux:error name="name"/>
            </flux:field>

            <flux:field>
                <flux:label>Description</flux:label>
                <flux:description>This is the product description</flux:description>
                <flux:input wire:model="description" />
                <flux:error name="description"/>
            </flux:field>


            <flux:button variant="primary" icon="check" wire:click="store"></flux:button>
        </div>
    </flux:modal>


</div>
