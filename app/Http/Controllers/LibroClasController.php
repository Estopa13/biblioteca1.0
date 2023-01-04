<?php

namespace App\Http\Controllers;

use App\Models\Clasificacione;
use App\Models\Libro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LibroClasController extends Controller
{
    public function index(Request $request){
        //dd("entra al index");
        $Clasificacion=Clasificacione::all();
        $Book=Libro::all();
        $identificador=$request->get('id_clasificacion');
        $Books_clas=DB::select('call get_book_clas('.$identificador.')');
        return view('libros_clasificacion.index', compact('Books_clas','Clasificacion','Book'));
    }
}
