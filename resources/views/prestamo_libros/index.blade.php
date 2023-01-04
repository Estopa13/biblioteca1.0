@extends('layouts.template')
@section('content')
<div>
    <div>
        <div class="bg-gray text-center font-italic w-100 alert my-2 row" style="font-family: cursive">
            <div class="col-10">Libros Prestados</div>
            <a href="{{url('prestamos/create')}}" class="btn-info col-2">Prestar Libro</a>
        </div>
        <div class="w-25 py-1 my-1 text-center bg-danger">Administrador</div>
        <div class="w-25 py-1 my-1 text-center bg-green">Maestro</div>
        <div class="w-25 py-1 my-1 text-center bg-blue">Alumno</div>
        <div class="w-25 py-1 my-1 text-center bg-yellow">Externo</div>
        <div class="container text-center">
            <div class="row px-2">
                @foreach($Estantes as $libro)
                    <div class="border border-dark alert px-2 my-2 mx-3 col-3 {{$libro->personas->id_tipo===1 ? 'bg-green' : ($libro->personas->id_tipo===2 ? 'bg-blue' : ($libro->personas->id_tipo===3 ? 'bg-danger' : 'bg-yellow'))}}">
                        <div class="row">
                            <label for="staticEmail" class="col-4 col-form-label">Libro:</label>
                            <div class="col-8">
                                <p>{{$libro->libros->nom_libro}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <label for="inputPassword" class="col-4 col-form-label">Lo pidio:</label>
                            <div class="col-8">
                                <p>{{$libro->personas->nom}} {{$libro->personas->ap}} {{$libro->personas->am}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <label for="inputPassword" class="col-4 col-form-label">Personal:</label>
                            <div class="col-8">
                                @if($libro->personas->id_tipo === 1)
                                    <p>Maestro</p>
                                @elseif($libro->personas->id_tipo === 2)
                                    <p>Alumno</p>
                                @elseif($libro->personas->id_tipo === 3)
                                    <p>Administrador</p>
                                @elseif($libro->personas->id_tipo === 4)
                                    <p>Externo</p>
                                @endif
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <a href="{{url('prestamos',$libro->id_estante)."/edit"}}" class="btn btn-warning col-4 my-1 text-dark border border-dark">Modificar</a>
                            <form action="{{url("prestamos",$libro->id_estante)}}" method="POST" class="py-1 col-4">
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-success text-dark border border-dark">ELIMINAR</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
