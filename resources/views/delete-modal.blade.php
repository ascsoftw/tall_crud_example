<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Delete Modal') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p class="color:black mb-6">We see how Delete Functionality is implemented using a Confirmation Modal.</p>
                    <p>
                        Below is a Livewire Component which allows User to Delete a Tag. Confirmation Modal appears when User clicks on the Delete Button.
                    </p>
                    <p class="mt-4">You can check the Code of the Livewire Component which has been generated by the Package on <a href="https://github.com/ascsoftw/tall_crud_example/tree/delete-modal" class="cursor-pointer text-blue-500">Github</a>.</p>

                    <p class="mt-4">You can generate a similar Component by Selecting the Appropriate Settings at <a href="{{route('crud-generator')}}" class="cursor-pointer text-blue-500">Crud Generator Menu</a>.</p>

                    <p class="my-4">If you are interested in the Video Tutorial, you can check this Video which generates the following Livewire Component on <a href="https://youtu.be/7UlDxOW05aE" class="cursor-pointer text-blue-500">Youtube</a>.</p>
                    @livewire('delete-modal')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>