@extends('layouts.template')
@section('content')
    <div class="row justify-content-center py-3">
        <div class="col-8">
            <div class="alert alert-success d-flex justify-content-between" role="alert">
                Estantes
                <a class="btn btn-primary" href="{{url('estantes/create')}}">+ Estante</a>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-4">
        <div class="col-10">
            @foreach($Estantes as $stan)
                <div class="card container py-2 border my-3">
                    <div class="bg-gray-light font-italic"><h5>Estante {{$stan->id_estante}}</h5></div>
                    <div class="w-100">
                        <div class="w-100 row align-items-start">
                            <div class="col">
                                <div class="w-full">{{$stan->personas->nom}}</div>
                                <div class="w-full">{{$stan->personas->ap}} {{$stan->personas->am}}</div>
                            </div>
                            <div class="col">
                                <div>Libro</div>
                                <div>{{$stan->libros->nom_libro}}</div>
                            </div>
                            <div class="col">
                                <div>Fecha de prestamo</div>
                                <div>{{$stan->fecha_pres}}</div>
                            </div>
                            <div class="col">
                                <div>Fecha de devolución</div>
                                <div>{{$stan->fecha_dev}}</div>
                            </div>
                            <div class="col container text-center">
                                {{--Acciones como eliminar y editar--}}
                                <a class="btn btn-warning mx-2" href="{{url('estantes',$stan->id_estante)."/edit"}}">
                                    EDITAR
                                </a>
                                <form action="{{url("estantes",$stan->id_estante)}}" method="POST" class="py-1">
                                    @csrf
                                    @method("DELETE")
                                    <button class="btn btn-danger">ELIMINAR</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
