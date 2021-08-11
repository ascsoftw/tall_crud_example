<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Belongs To Many Form') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p class="color:black mb-6">We display the Listing of Products along with the Add and Edit Form. Product Model has <span class="font-bold">belongsToMany</span> Relation with Tags and Categories. Form also gives the Option to Save these fields.</p>
                    @livewire('belongs-to-many')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>