@extends('layouts.template')
@section('title')
| lista de roles
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-header">
 
                    <div>
                        @can('haveaccess','role.create')
                        <a href="{{route('role.create')}}" class="btn btn-primary">Crear</a>
                        @endcan
                    </div>
                </div>

                <div class="card-body">
                    @include('role_user.custom.message')


                    <table  class="table table-bordered table-striped dt-responsive">
                        <thead>
                            <tr>
       
                                <th scope="col">Nombre</th>
                                <th scope="col">Privilegio</th>
                                <th scope="col">Description</th>

 
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $role)
                            <tr>

                                <td>{{$role->name}}</td>
                                <td>{{$role->slug}}</td>
                                <td>{{$role->description}}</td>

                                <td>
                                    @can('haveaccess','role.edit')
                                    <a href="{{route('role.edit',$role->id)}}" class="btn btn-success btn-sm">
                                        Editar
                                    </a>
                                    @endcan
                                </td>
                                @can('haveaccess','role.destroy')
                            <td>
                                <!-- Button trigger modal -->
                                <div class="modal-footer">
                                <form action="{{route('role.destroy',$role)}}" method="post">
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
            </div>
        </div>
    </div>
</div>
@endsection