<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-x1 text-gray-800 leading-tigtht">
            {{__('Ver Materia') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-x1 sm:rounded-lg">
                <div class="block">
                    <x-jet-label for="namee" value="{{__('Nombre')}}" />
                    <x-jet-input id="namee" class="block mt-1 w-full" type="text" name="namee" :value="old('namee', $materia->nombre)" readonly />
                    <x-jet-label for="version" value="{{__('Version')}}" />
                    <x-jet-input id="version" class="block mt-1 w-full" type="text" name="version" :value="old('version', $materia->version)" readonly />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>>