<?php

namespace App\Http\Controllers;

use App\Models\Vuelo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VueloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('vuelos.index', [
            'vuelos' => Vuelo::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {     $user = Auth::user();
        return view('vuelos.create', [
            'user' => $user,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {$validated = $request->validate([
        'codigo' => 'required|max:255',
        'plazas' => 'required|max:3',
        'precio' => 'required|max:6,2',
        'aeropuerto_origen' => 'required|max:255',
        'aeropuerto_destino' => 'required|max:255',
        'compania_aerea_id' => 'required|max:2',
        'fecha_salida' => 'required|max:255',
        'fecha_llegada' => 'required|max:255',
    ]);

    $vuelo = new Vuelo();
    $vuelo->codigo = $validated['codigo'];
    $vuelo->plazas = $validated['plazas'];
    $vuelo->precio = $validated['precio'];
    $vuelo->aeropuerto_origen = $validated['aeropuerto_origen'];
    $vuelo->aeropuerto_destino = $validated['aeropuerto_destino'];
    $vuelo->compania_aerea_id = $validated['compania_aerea_id'];
    $vuelo->fecha_salida = $validated['fecha_salida'];
    $vuelo->fecha_llegada = $validated['fecha_llegada'];
    $vuelo->save();
    session()->flash('success', 'La reserva se ha creado correctamente.');
    return redirect()->route('vuelos.index');
    }



    /**
     * Display the specified resource.
     */
    public function show(Vuelo $vuelo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vuelo $vuelo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vuelo $vuelo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vuelo $vuelo)
    {
        //
    }
}
