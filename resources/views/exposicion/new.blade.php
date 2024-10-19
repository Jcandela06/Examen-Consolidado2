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
                <form method="POST" action="{{ route('exposiciones.store') }}">
                @csrf

                <div class="mb-3">
                            <label for="id" class="form-label">Code</label>
                            <input type="text" class="form-control" id="id" name="id" disabled="disabled">
                            <div id="idHelp" class="form-text">Exposicion code</div>
                </div>

                <div class="mb-3">
                    <label for="nombre" class="form-label">Id Obra</label>
                    <input type="text" required class="form-control" id="obra_id" name="obra_id" placeholder="Id Obra"> 
                </div>
                
                <div class="mb-3">
                    <label for="nombre" class="form-label">Fecha Inicio</label>
                    <input type="text" required class="form-control" id="fecha_inicio" name="fecha_inicio" placeholder="Fecha Inicio AA-MM-DD"> 
                </div>

                <div class="mb-3">
                    <label for="nombre" class="form-label">Fecha Fin</label>
                    <input type="text" required class="form-control" id="fecha_fin" name="fecha_fin" placeholder="Fecha Fin AA-MM-DD"> 
                </div>

                <div class="mb-3">
                    <label for="nombre" class="form-label">Ubicacion</label>
                    <input type="text" required class="form-control" id="ubicación" name="ubicación" placeholder="Ubicación"> 
                </div>

                <div class="mb-3">
                    <label for="nombre" class="form-label">Evento</label>
                    <input type="text" required class="form-control" id="nombre_evento" name= "nombre_evento" placeholder="Ubicación"> 
                </div>

                <div class="mt-3">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save</button>
                    <a href="{{ route('exposiciones.index') }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded ml-2">Cancel</a>
                </div>

                </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>