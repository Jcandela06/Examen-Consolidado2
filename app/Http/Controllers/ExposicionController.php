<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exposicion;
use Illuminate\Support\Facades\DB;

class ExposicionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exposiciones = Exposicion::all();
        return view('exposicion.index', ['exposiciones' => $exposiciones]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $exposiciones = DB::table('exposiciones');
        return view('exposicion.new', ['exposiciones' => $exposiciones]);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $exposicion = new Exposicion();   
        $exposicion->obra_id = $request->obra_id;
        $exposicion->fecha_inicio = $request->fecha_inicio;
        $exposicion->fecha_fin = $request->fecha_fin;
        $exposicion->ubicación = $request->ubicación; 
        $exposicion->nombre_evento = $request->nombre_evento; 
        $exposicion->save();

        $exposiciones = DB::table('exposiciones')->get();

        return redirect()->route('exposiciones.index')->with('success', 'exposicion creado exitosamente.');
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
        $exposicion = Exposicion::find($id);
        $exposicion->delete();
        return redirect()->route('exposiciones.index')->with('success', 'exposicion eliminado exitosamente.');
    
    }
}
