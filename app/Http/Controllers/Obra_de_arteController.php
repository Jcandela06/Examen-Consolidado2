<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obra_de_Arte;
use Illuminate\Support\Facades\DB;

class Obra_de_arteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $obras_de_arte = Obra_de_Arte::all();
        return view('obra_de_arte.index', ['obras_de_arte' => $obras_de_arte]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $obras_de_arte = DB::table('obras_de_arte');
        return view('obra_de_arte.new', ['obras_de_arte' => $obras_de_arte]); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $obra_de_arte = new Obra_de_Arte();
        $obra_de_arte->artista_id = $request->artista_id;
        $obra_de_arte->título = $request->título;
        $obra_de_arte->año = $request->año;
        $obra_de_arte->técnica = $request->técnica;
        $obra_de_arte->dimensiones = $request->dimensiones;
        $obra_de_arte->descripción = $request->descripción;
        $obra_de_arte->save();

        $obras_de_arte = DB::table('obras_de_arte')->get();

        return redirect()->route('obras_de_arte.index')->with('success', 'Artista creado exitosamente.');
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
