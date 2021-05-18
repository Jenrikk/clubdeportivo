<?php

namespace App\Http\Controllers;

use App\Espacio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EspacioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $espacios = Espacio::get();
        return view('espacios.index', compact('espacios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('espacios.create');
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
         Espacio::create([
            'nombre' => $nombre,
            'descripcion' => $desc,
            'imagen' => $url
        ]);

        return back()->with('status', 'El nuevo espacio fue creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Espacio  $espacio
     * @return \Illuminate\Http\Response
     */
    public function show(Espacio $id)
    {
        $espacio = $id;
        return view('espacios.show', compact('espacio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Espacio  $espacio
     * @return \Illuminate\Http\Response
     */
    public function edit(Espacio $id)
    {
        $espacio = $id;
        return view('espacios.edit', compact('espacio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Espacio  $espacio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Espacio $id)
    {
        $request->validate([
            'imagen' => 'image|max:2048'
        ]);
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen')->store('public/imgSubidas');
            $url = Storage::url($imagen);
            $id->imagen = $url;
        }

        $id->update( $request->only('nombre', 'descripcion'));

        return redirect()->route('espacios.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Espacio  $espacio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Espacio $id)
    {
        $id->delete();
        return redirect()->route('espacios.index');
    }
}
