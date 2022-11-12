@extends('layouts.template')
@section('title')
| Users
@endsection
@section('content')
<div class="row">
    <div class="col-md-12 mt-3">
        <div class="card">
            <div class="card-header">
                <h2 class="text-center">
                    usuarios
                </h2> 
            </div>
            <div class="card-body">
                <table  class="table table-bordered table-striped dt-responsive">
                    <thead>
                        <tr class="text-center">

                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Role(s)</th>

                            @can('haveaccess','user.edit')
                            <th>Editar</th>
                            @endcan
                            @can('haveaccess','user.destroy')
                            <th>Delete</th>
                            @endcan

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr class="text-center">
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}
                            </td>
                            <td>{{count($user->roles)>=1 ? $user->roles[0]->name : 'No hay roles asignados'}}</td>

                            @can('update',[$user,['user.edit','userown.edit']])
                            <td>
                                <a href="{{route('user.edit',$user->id)}}" class="btn btn-success btn-sm">
                                    Editar
                                </a>
                            </td>
                            @endcan
                            @can('haveaccess','user.destroy')
                            <td>
                                <!-- Button trigger modal -->
                                <div class="modal-footer">
                                               <form action="{{route('user.destroy',$user)}}" method="post">
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