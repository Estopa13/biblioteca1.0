@extends('layouts.template')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2 style="color: #00b4d9; text-align: center">Editar Estantes Existente</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{url('estantes')}}" title="Atras"><i class="bi bi-arrow-left-circle"></i>Volver </a>
                </div>
            </div>
        </div>

        <form action="{{url('estantes',$estante->id_estante)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"><h2>Persona</h2></label>
                <select name="id_persona" class="form-control">
                    @foreach($Personas as $person)
                        <option value="{{$person->id_persona}}">{{$person->nom}} {{$person->ap}} {{$person->am}}</option>
                    @endforeach
                </select>
                <div id="emailHelp" class="form-text">Seleccione el nombre de la persona que pide el libro</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"><h2>Libro</h2></label>
                <select name="id_libro" class="form-control">
                    @foreach($Libros as $lib)
                        <option value="{{$lib->id_libro}}">{{$lib->nom_libro}}</option>
                    @endforeach
                </select>
                <div id="emailHelp" class="form-text">Seleccione el libro</div>
            </div>
            <div class="mb-3 d-flex justify-content-between">
                <div>
                    <label for="exampleInputEmail1" class="form-label"><h2>Fecha de prestamo</h2></label>
                    <input type="date" name="fecha_pres" class="form-control" value="{{$estante->fecha_pres}}" placeholder="---">
                    <div id="emailHelp" class="form-text">Seleccione la fecha en que se lleva el libro</div>
                </div>
                <div>
                    <label for="exampleInputEmail1" class="form-label"><h2>Fecha de devolucion</h2></label>
                    <input type="date" name="fecha_dev" class="form-control" value="{{$estante->fecha_dev}}" placeholder="---">
                    <div id="emailHelp" class="form-text">Seleccione la fecha a devolver el libro</div>
                </div>
            </div>
            <div class="d-flex  justify-content-center">
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </form>
    </div>
@endsection
