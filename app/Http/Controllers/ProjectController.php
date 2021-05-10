<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Requests\SaveProjectRequest;
// use Illuminate\Support\Facades\DB; ya no necesitamos esto xq tenemos el Modelo Project

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio = Project::get();
        return view('projects.index', compact('portfolio'));
    }

    public function show(Project $id){
        $proyecto = $id;
        return view('projects.show', compact('proyecto'));
    }

    public function create(){

        return view('projects.create');
    }

    public function store(SaveProjectRequest $request){
        // $titulo = request('titulo');
        // $descrip = request('descripcion');

        // Project::create([
        //     'titulo' => $titulo,
        //     'descripcion' => $descrip
        // ]);



        //Hay que validar el formulario antes
       // $campos = request()->validate([
       //      'titulo' => 'required',
       //      'descripcion' => 'required'
       //  ]);
        // Project::create(request()->only('titulo', 'descripcion'));

        //***** Hemos rizado el rizo, Esa clase CreateProjectRequest hereda de FormRequest, la estamos llamando para que nos valide los campos con su metodo rules()
        Project::create( $request->validated() );

        return redirect()->route('projects.index')->with('status', 'El proyecto fue creado con exito');
    }


    public function edit(Project $id){
        $proyecto = $id;
        return view('projects.edit', compact('proyecto'));
    }

    public function update(Project $id, SaveProjectRequest $request){
        // $id->update([
        //     'titulo' => request('titulo'),
        //     'descripcion' => request('descripcion')
        // ]);
        $id->update( $request->validated());

        return redirect()->route('projects.show', $id);
    }


    public function destroy(Project $id){
        $id->delete();
        return redirect()->route('projects.index');
    }

}
