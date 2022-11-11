<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Escritor;
use Illuminate\Support\Facades\DB;
use Spatie\LaravelIgnition\Solutions\GenerateAppKeySolution;

class EscritorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto=trim($request->get('texto'));
        $escritores=DB::table('escritores')
            ->select('id_escritor','nome','ape','ame')
            ->where('nome','LIKE','%'.$texto.'%')
            ->orwhere('ape','LIKE','%'.$texto.'%')
            ->orderBy('id_escritor','asc')
            ->paginate(200);
        return view('escritores.index',compact('escritores','texto'));
    }

    /**♠
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('escritores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $texto=trim($request->get($request));
        $escritor= new Escritor;
        $escritor->id_escritor=$request->input('id_escritor');
        $escritor->nome=$request->input('nome');
        $escritor->ape=$request->input('ape');
        $escritor->ame=$request->input('ame');
        $escritor->save();
        return view('s_libro');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
