<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Exposiciones') }}
        </h2>
    </x-slot>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <a href="{{ route('exposiciones.create') }}"
                class="bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded ml-2">Add</a>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Code</th>
                                <th scope="col">Id Obra</th>
                                <th scope="col">Ubicacion</th>
                                <th scope="col">Evento</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($exposiciones as $exposicion)
                                <tr>
                                    <th scope="row">{{ $exposicion->id }}</th>
                                    <td>{{ $exposicion->obra_id }}</td>
                                    <td>{{ $exposicion->ubicación }}</td> 
                                    <td>{{ $exposicion->nombre_evento }}</td>
                                    <td>
                                    <a href="{{ route('exposiciones.edit', $exposicion->id) }}"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                            Edit </a></li>
                                    <form action="{{ route('exposiciones.destroy', $exposicion->id) }}" method="POST" style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-2">
                                            Delete
                                        </button>
                                    </form>
                                    </form>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>