<?php

namespace App\Http\Controllers;

use App\Models\Estante;
use App\Models\Libro;
use App\Models\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Estantes=Estante::all();
        return view('prestamo_libros.index', compact('Estantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Libros=Libro::all();
        $Personas=Persona::all();
        return view('prestamo_libros.create', compact('Libros', 'Personas'));
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
           'id_persona' => 'required',
            'id_libro' => 'required',
            'fecha_pres' => 'required',
            'fecha_dev' => 'required',
            'id_prestamista' => 'required'
        ]);
        $fechapres=date('Y-m-d', strtotime($request->fecha_pres));
        $fechadev=date('Y-m-d', strtotime($request->fecha_dev));
        //dd('Pasa la validacion');
        //dd($request);
        DB::insert("call prestar_libro(".$request->id_persona.",".$request->id_libro.",'".$fechapres."','".$fechadev."',".$request->id_prestamista.")");
        $Estantes=Estante::all();
        return view('prestamo_libros.index', compact('Estantes'));
    }

    public function edit($id)
    {
        $Prestamo=Estante::findOrFail($id);
        $Libros=Libro::all();
        $Personas=Persona::all();
        return view('prestamo_libros.edit', compact('Prestamo', 'Libros', 'Personas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_persona' => 'required',
            'id_libro' => 'required',
            'fecha_pres' => 'required',
            'fecha_dev' => 'required',
            'id_prestamista' => 'required'
        ]);
        $fechapres=date('Y-m-d', strtotime($request->fecha_pres));
        $fechadev=date('Y-m-d', strtotime($request->fecha_dev));
        //dd('Entra antes del procedimiento');
        DB::update("call actualizar_prestamo(".$id.",".$request->id_persona.",".$request->id_libro.",'".$fechapres."','".$fechadev."')");

        $Estantes=Estante::all();
        return view('prestamo_libros.index', compact('Estantes'));
    }

    public function destroy($id)
    {
        //dd("ENTRA A LA FUNCION ELIMINAR");
        DB::delete("call eliminar_prestamo(".$id.")");
        $Estantes=Estante::all();
        return view('prestamo_libros.index', compact('Estantes'));
    }
}
