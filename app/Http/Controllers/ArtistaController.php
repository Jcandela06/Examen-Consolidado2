<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artista;
use Illuminate\Support\Facades\DB;

class ArtistaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artistas = Artista::all();
        return view('artista.index', ['artistas' => $artistas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $artistas = DB::table('artistas');
        return view('artista.new', ['artistas' => $artistas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $artista = new Artista();
        $artista->nombre = $request->nombre;
        $artista->apellido = $request->apellido;
        $artista->nacionalidad = $request->nacionalidad;
        $artista->biografía = $request->biografia; // Si es NULL, se permite
        $artista->save();

        $artistas = DB::table('artistas')->get();

        return redirect()->route('artistas.index')->with('success', 'Artista creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
