@extends('layouts.template')
@section('title')
| Categories
@endsection
@section('content')
<div class="row">
    <div class="col-md-12 mt-3">
        <div class="card">
            @include('role_user.custom.message')
            <div class="card-header">
                <h2 class="text-center">
                    Categorias
                </h2>
                <div>
                    @can('haveaccess','category.create')
                    <a href="{{route('category.create')}}" class="btn btn-primary">Crear</a>
                    @endcan
                </div>
            </div>
            <div class="card-body">
                <table  class="table table-bordered table-striped dt-responsive">
                    <thead>
                        <tr class="text-center">
                           
                            <th>Nombre</th>
                            <th>descripcion</th>
                           
                            @can('haveaccess','category.edit')
                            <th>Editar</th>
                            @endcan
                            @can('haveaccess','category.destroy')
                            <th>Eliminar</th>
                            @endcan

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                        <tr class="text-center">
                            
                            <td>{{$category->name}}</td>
                            <td>{{$category->description}}
                               

                            @can('haveaccess','category.edit')
                            <td>
                                <a href="{{route('category.edit',$category->id)}}" class="btn btn-success btn-sm">
                                    Editar
                                </a>
                            </td>
                            @endcan
                            @can('haveaccess','category.destroy')
                            <td>
                                <!-- Button trigger modal -->
                                <div class="modal-footer">
                                <form action="{{route('category.destroy',$category)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">
                                                        Eliminar
                                                    </button>
                                                </form>
                                            </div>
                            </td>
                            @endcan
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        @endsection
    </div>
</div>