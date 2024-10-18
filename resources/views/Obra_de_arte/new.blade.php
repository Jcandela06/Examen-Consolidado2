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

                <form method="POST" action="{{ route('obras_de_arte.store') }}">
                @csrf

                <div class="mb-3">
                            <label for="id" class="form-label">Code</label>
                            <input type="text" class="form-control" id="id" name="id" disabled="disabled">
                            <div id="idHelp" class="form-text">Obra de Arte code</div>
                </div>

                <div class="mb-3">
                    <label for="nombre" class="form-label">Id Artista</label>
                    <input type="text" required class="form-control" id="artista_id" name="artista_id" placeholder="Id Artista"> 
                </div>

                <div class="mb-3">
                    <label for="nombre" class="form-label">Titulo</label>
                    <input type="text" required class="form-control" id="título" name="título" placeholder="Título"> 
                </div>

                <div class="mb-3">
                    <label for="nombre" class="form-label">Año</label>
                    <input type="text" required class="form-control" id="año" name="año" placeholder="Año"> 
                </div>

                <div class="mb-3">
                    <label for="nombre" class="form-label">Tecnica</label>
                    <input type="text" required class="form-control" id="técnica" name="técnica" placeholder="Técnica"> 
                </div>

                <div class="mb-3">
                    <label for="nombre" class="form-label">Dimensiones</label>
                    <input type="text" required class="form-control" id="dimensiones" name="dimensiones" placeholder="Dimensiones"> 
                </div>

                <div class="mb-3">
                    <label for="nombre" class="form-label">Descripcion</label>
                    <input type="text" required class="form-control" id="descripción" name="descripción" placeholder="Descripción"> 
                </div>
                <div class="mt-3">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save</button>
                    <a href="{{ route('obras_de_arte.index') }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded ml-2">Cancel</a>
                </div>

                </form>

                

                </div>
            </div>
        </div>
    </div>
</x-app-layout>