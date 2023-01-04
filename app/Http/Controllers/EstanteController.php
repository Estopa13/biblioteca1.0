<?php

namespace App\Http\Controllers;

use App\Models\Estante;
use App\Models\Libro;
use App\Models\Persona;
use Illuminate\Http\Request;

class EstanteController extends Controller
{
    public function index(){
        $Estantes=Estante::all();
        //dd('entra a la funcion index');
        return view('estantes.index',compact('Estantes'));
    }

    public function create(){
        $Libros=Libro::all();
        $Personas=Persona::all();
        return view('estantes.create', compact('Libros','Personas'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        //dd('entra a la funcion guardar');
        $request->validate([
           'id_persona' => 'required',
            'id_libro' => 'required',
            'fecha_pres' => 'required',
            'fecha_dev' => 'required',
        ]);
        //dd('llega al final de la funcion guardar');
        Estante::create($request->all());
        return redirect()->route('estantes.index');
        //return back();
    }
    public function edit(Estante $estante){
        $Libros=Libro::all();
        $Personas=Persona::all();
        return view('estantes.edit', compact('estante', 'Libros', 'Personas'));
    }
    public function update(Request $request, Estante $estante){
        //dd('pasa por update');
        //dd($request);
        $request->validate([
            'id_persona' => 'required',
            'id_libro' => 'required',
            'fecha_pres' => 'required',
            'fecha_dev' => 'required',
        ]);
        $estante->update([
            'id_persona' => $request->id_persona,
            'id_libro' => $request->id_libro,
            'fecha_pres' => $request->fecha_pres,
            'fecha_dev' => $request->fecha_dev,
        ]);
        return redirect()->route('estantes.index');
    }
    public function destroy(Estante $estante){
        $estante->delete();
        return redirect()->route('estantes.index');
    }
}
