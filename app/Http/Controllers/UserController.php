<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use App\ReservaClase;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::get();
        return view('users.index', compact('usuarios'));
    }
    public function indexClientes()
    {
        $clientes = User::get();
        return view('users.indexC', compact('clientes'));
    }
    public function indexTrabajadores()
    {
        $trabajadores = User::get();
        return view('users.indexT', compact('trabajadores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    public function reservarClase(Request $request)
    {
        $usuario = request('usuario');
        $clase = request('clase');
        ReservaClase::create([
            'user_id' => $usuario,
            'clase_id' => $clase,
        ]);

        $emailusuario = request('emailusuario');
        $mensaje = request()->validate([
            'nomusuario' => 'required',
            'nomclase' => 'required'
        ]);
        //enviar email
        Mail::to($emailusuario)->send(new MessageReceived($mensaje));

        return back()->with('status', 'Tu reserva fue creada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $id)
    {
        $usuario = $id;
        return view('users.show', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $id)
    {
        $roles = Role::get();
        $usuario = $id;
        return view('users.edit', compact('usuario', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $id)
    {
        $id->update( $request->only('role_id', 'name', 'email', 'dni', 'telefono', 'fnac'));

        return redirect()->route('usuarios.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $id)
    {
        $id->delete();
        return redirect()->route('usuarios.index');
    }
}
