<?php

namespace App\Http\Controllers;

use App\Models\Clasificacione;
use App\Models\Libro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LibroAnioController extends Controller
{
    public function index(Request $request){
        //dd("Entra al controlador del anio");
        $Clasificacion=Clasificacione::all();
        $Book=Libro::all();
        $anio=$request->get('anio');
        $Books_anio=DB::select('call get_book_anio('.$anio.')');
        return view('libros_anio.index', compact('Clasificacion', 'Book', 'Books_anio'));
    }
}
