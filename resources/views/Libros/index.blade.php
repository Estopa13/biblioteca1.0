@extends('layouts.template')
@section('content')
    <div class="py-3 px-3">
        <div class="text-center font-weight-bold py-3 bg-gray rounded-lg">Buscar Libros por categoria</div>
        <div class="container row my-3">
            <div class="col-6 border">
                <form class="mb-3 px-3" action="{{route('libros_clas.index')}}" method="GET">
                    <label class="form-label">Elige la clasificacion:</label>
                    <br>
                    <div class="row">
                        <select name="id_clasificacion" class="form-control col-6">
                            <option value="">Seleccione una clasificacion</option>
                            @foreach($Clasificacion as $clas)
                                <option value="{{$clas->id_clasificacion}}">{{$clas->desc_c}}</option>
                            @endforeach
                        </select>
                        <div class="col-2"></div>
                        <button type="submit" class="btn btn-primary col-3">Buscar</button>
                    </div>
                </form>
                @yield('clasificacion')
            </div>
            <div class="col-6 border">
                <form class="mb-3 px-3" action="{{route('libros_anio.index')}}" method="GET">
                    <label class="form-label">Elige el año:</label>
                    <br>
                    {{--<input type="date" name="fecha_dev" class="form-control">--}}
                    <div class="row">
                        <select name="anio" class="form-control col-6">
                            <option value="">Seleccione el año</option>
                            @foreach($Book as $boo)
                                <option value="{{$boo->anio_pub}}">{{$boo->anio_pub}}</option>
                            @endforeach
                        </select>
                        <div class="col-2"></div>
                        <button type="submit" class="btn btn-primary col-3">Buscar</button>
                    </div>
                </form>
                @yield('anio')
            </div>
        </div>
    </div>
@endsection
