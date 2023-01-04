@extends('layouts.template')
@section('content')
    <div class="px-5 py-3">
        <a href="{{url('prestamos')}}" class="py-1 px-1 btn font-italic bg-fuchsia"><-volver</a>
        <div class="text-center text-bold bg-gray-light alert">Datos del Solicitante</div>
        <form action="{{url('prestamos')}}" method="POST">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col-6 mb-3">
                        <label class="form-label">Nombre del Solicitante:</label>
                        {{--<input type="text" class="form-control">--}}
                        <select name="id_persona" id="type_person" class="form-control">
                            <option value="">Seleccione a la persona que prestara</option>
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
                        <option value="">Seleccione un Libro</option>
                        @foreach($Libros as $libro)
                            <option value="{{$libro->id_libro}}">{{$libro->nom_libro}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-2"></div>
                <div class="mb-3 col-3">
                    <label class="form-label">Fecha Prestamo:</label>
                    <input type="date" name="fecha_pres" class="form-control">
                </div>
                <div class="mb-3 col-3">
                    <label class="form-label">Fecha Devolución:</label>
                    <input type="date" name="fecha_dev" class="form-control">
                </div>
                <input type="hidden" name="id_prestamista" value="{{Auth::user()->id}}">
            </div>
            <button type="submit" class="btn btn-primary">Prestar</button>
        </form>
    </div>
@endsection
