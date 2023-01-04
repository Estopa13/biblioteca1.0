@extends('layouts.template')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2 style="color: #00b4d9; text-align: center">Editar Prestamo Existente</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{url('prestamos')}}" title="Atras"><i class="bi bi-arrow-left-circle"></i>Volver </a>
                </div>
            </div>
        </div>

        <form action="{{url('prestamos',$Prestamo->id_estante)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="container">
                <div class="row">
                    <div class="col-6 mb-3">
                        <label class="form-label">Nombre del Solicitante:</label>
                        {{--<input type="text" class="form-control">--}}
                        <select name="id_persona" id="type_person" class="form-control">
                            <option value="{{$Prestamo->id_persona}}">{{$Prestamo->personas->nom}} {{$Prestamo->personas->ap}} {{$Prestamo->personas->am}}</option>
                            @foreach($Personas as $person)
                                <option value="{{$person->id_persona}}">{{$person->nom}} {{$person->ap}} {{$person->am}}</option>
                            @endforeach
                        </select>
                        <div class="form-text">Seleccione a alguien</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-4">
                    <label class="form-label">Libro</label>
                    <select name="id_libro" class="form-control">
                        <option value="{{$Prestamo->id_libro}}">{{$Prestamo->libros->nom_libro}}</option>
                    @foreach($Libros as $libro)
                            <option value="{{$libro->id_libro}}">{{$libro->nom_libro}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-2"></div>
                <div class="mb-3 col-3">
                    <label class="form-label">Fecha Prestamo:</label>
                    <input type="date" name="fecha_pres" value="{{$Prestamo->fecha_pres}}" class="form-control">
                </div>
                <div class="mb-3 col-3">
                    <label class="form-label">Fecha Devolución:</label>
                    <input type="date" name="fecha_dev" value="{{$Prestamo->fecha_dev}}" class="form-control">
                </div>
                <input type="hidden" name="id_prestamista" value="{{Auth::user()->id}}">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Prestamo</button>
        </form>
    </div>
@endsection

