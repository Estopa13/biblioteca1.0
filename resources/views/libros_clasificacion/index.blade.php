@extends('Libros.index')
@section('clasificacion')
    <div class="w-100">
        <div class="bg-gray-light py-3 px-3">
            <div class="row text-center font-weight-bold text-blue">
                <div class="col-6">Libro</div>
                <div class="col-6">Clasificacion</div>
            </div>
            @foreach($Books_clas as $book)
                <div class="border bg-white row">
                    <div class="col-6">{{$book->nom_libro}}</div>
                    <div class="col-6 text-center">{{$book->id_clasificacion}}</div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
