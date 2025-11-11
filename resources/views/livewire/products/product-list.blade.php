<div class="w-full">
        <table class="min-w-full divide-y divide-gray-300 text-center gap-2">
            <thead class="w-full">
                <tr>
                    <th>Name</th>
                    <th>Beschreibung</th>
                    <th>Aktionen</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td class="p-2">
                          <flux:button variant="danger" icon="trash" wire:click="delete({{ $product->id }})" />
                          <flux:button variant="primary" icon="pencil" wire:click="edit({{ $product->id }})" />
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</div>
