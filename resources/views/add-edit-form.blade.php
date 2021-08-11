<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Edit Form') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p class="color:black mb-6">We display the Listing of Products along with the Option to Add and Edit, which opens up the Form in a Modal.</p>
                    @livewire('products')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>