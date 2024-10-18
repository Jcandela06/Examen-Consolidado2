<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Artista') }}
        </h2>
    </x-slot>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <form method="POST" action="{{ route('artistas.store') }}">
                @csrf

                <div class="mb-3">
                            <label for="id" class="form-label">Code</label>
                            <input type="text" class="form-control" id="id" name="id" disabled="disabled">
                            <div id="idHelp" class="form-text">Artista code</div>
                        </div>

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" required class="form-control" id="nombre" name="nombre" placeholder="Nombre Artista"> <!-- Este campo debe tener el nombre correcto -->
                </div>

                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" required class="form-control" id="apellido" name="apellido" placeholder="Apellido Artista"> <!-- Este campo debe tener el nombre correcto -->
                </div>

                <div class="mb-3">
                    <label for="nacionalidad" class="form-label">Nacionalidad</label>
                    <input type="text" required class="form-control" id="nacionalidad" name="nacionalidad" placeholder="Nacionalidad Artista"> <!-- Este campo debe tener el nombre correcto -->
                </div>

                <div class="mb-3">
                    <label for="biografia" class="form-label">Biografía</label>
                    <input type="text" class="form-control" id="biografia" name="biografia" placeholder="Biografía Artista"> <!-- Este campo debe tener el nombre correcto -->
                </div>

                <div class="mt-3">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save</button>
                    <a href="{{ route('artistas.index') }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded ml-2">Cancel</a>
                </div>
                </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>