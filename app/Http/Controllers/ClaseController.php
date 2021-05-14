<?php

namespace App\Http\Controllers;

use App\Clase;
use App\Espacio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clases = Clase::get();
        return view('clases.index', compact('clases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $espacios = Espacio::get();
        return view('clases.create', compact('espacios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'imagen' => 'required|image|max:2048'
        ]);
        $imagenes = $request->file('imagen')->store('public/imgSubidas');

        $url = Storage::url($imagenes);
        $nombre = request('nombre');
        $desc = request('descripcion');
        $aforo = request('aforo');
        $espacio = request('espacio_id');
         Clase::create([
            'nombre' => $nombre,
            'descripcion' => $desc,
            'imagen' => $url,
            'aforo' => $aforo,
            'espacio_id' => $espacio
        ]);

        return back()->with('status', 'La nueva clase fue creada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clase  $clase
     * @return \Illuminate\Http\Response
     */
    public function show(Clase $id)
    {
        $clase = $id;
        return view('clases.show', compact('clase'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clase  $clase
     * @return \Illuminate\Http\Response
     */
    public function edit(Clase $id)
    {
        $espacios = Espacio::get();
        $clase = $id;
        return view('clases.edit', compact('clase', 'espacios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clase  $clase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clase $id)
    {
        $request->validate([
            'imagen' => 'image|max:2048'
        ]);
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen')->store('public/imgSubidas');
            $url = Storage::url($imagen);
            $id->imagen = $url;
        }

        $id->update( $request->only('nombre', 'descripcion', 'aforo', 'espacio_id'));

        return redirect()->route('clases.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clase  $clase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clase $clase)
    {
        //
    }
}
