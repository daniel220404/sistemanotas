<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-x1 tet-gray-800 leading- tigtht">
            {{__('Crear Materias')}}
        </h2>
    </x-slot>
    <div class="py-12">

        <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-x1 sm:rounded-1g">
                <form action="{{route('materias.store') }}" method="POST">
                    @include('materias.formulario')
                </form>
            </div>
        </div>
    </div>
</x-app-layout>