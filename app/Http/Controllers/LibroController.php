<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clasificacione;
use App\Models\Libro;
use Illuminate\Support\Facades\DB;

class LibroController extends Controller
{
    public function index(){
        $Clasificacion=Clasificacione::all();
        $Book=Libro::all();
        //dd($Clasificacione);
        return view('Libros.index',compact('Clasificacion','Book'));
    }

    /*public function show_books(Request $id){
        dd($id);
        $Books=DB::select("call get_book_clas(".$id.")");
        $Clasificacion=Clasificacione::all();
        //dd($Clasificacione);
        return view('Libros.index',compact('Clasificacion', 'Books'));
    }*/

    /*
     * public function create(){

    }

    public function edit(Estante $estante){

    }
     */

}
