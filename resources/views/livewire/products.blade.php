<div class="mt-8">
    <div class="flex justify-between">
        <div class="text-2xl">Products</div>
        <x:tall-crud-generator::button mode="add" wire:click="$emitTo('products-child', 'showCreateForm');">Create New</x:tall-crud-generator::button> 
    </div>

    <div class="mt-6">
        <div class="flex justify-end">
            <x:tall-crud-generator::select class="block w-1/10" wire:model="per_page">
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
                <option value="50">50</option>
            </x:tall-crud-generator::select>
        </div>
        <x:tall-crud-generator::table class="mt-4" wire:loading.class.delay="opacity-50">
            <x-slot name="header">
                <x:tall-crud-generator::table-column>
                    <div class="flex items-center">
                        <button wire:click="sortBy('id')">Id</button>
                        <x:tall-crud-generator::sort-icon sortField="id" :sort-by="$sortBy" :sort-asc="$sortAsc" />
                    </div>
                </x:tall-crud-generator::table-column>
                <x:tall-crud-generator::table-column>Name</x:tall-crud-generator::table-column>
                <x:tall-crud-generator::table-column>Brand</x:tall-crud-generator::table-column>
                <x:tall-crud-generator::table-column>Price</x:tall-crud-generator::table-column>
                <x:tall-crud-generator::table-column>Sku</x:tall-crud-generator::table-column>
                <x:tall-crud-generator::table-column>Actions</x:tall-crud-generator::table-column>
            </x-slot>
            @foreach($results as $result)
                <tr class="hover:bg-gray-300 {{ ($loop->even ) ? 'bg-gray-100' : ''}}" >
                    <x:tall-crud-generator::table-column>{{ $result->id}}</x:tall-crud-generator::table-column>
                    <x:tall-crud-generator::table-column>{{ $result->name}}</x:tall-crud-generator::table-column>
                    <x:tall-crud-generator::table-column>{{ $result->brand?->name}}</x:tall-crud-generator::table-column>
                    <x:tall-crud-generator::table-column>{{ $result->price}}</x:tall-crud-generator::table-column>
                    <x:tall-crud-generator::table-column>{{ $result->sku}}</x:tall-crud-generator::table-column>
                    <x:tall-crud-generator::table-column>
                        <x:tall-crud-generator::button mode="edit" wire:click="$emitTo('products-child', 'showEditForm',  {{ $result->id}});">Edit</x:tall-crud-generator::button>
                        <x:tall-crud-generator::button mode="delete" wire:click="$emitTo('products-child', 'showDeleteForm',  {{ $result->id}});">Delete</x:tall-crud-generator::button>
                    </x:tall-crud-generator::table-column>
               </tr>
            @endforeach
        </x:tall-crud-generator::table>
    </div>

    <div class="mt-4">
        {{ $results->links() }}
    </div>
    @livewire('products-child')    @livewire('livewire-toast')
</div>