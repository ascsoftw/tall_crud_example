<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Eager Load Count') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p class="color:black mb-6">We will display the Listing of Tags along with Number of Products that are related to that Tag. We will also make sure that Count is Sortable</p>
                    @livewire('eager-load-count')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>