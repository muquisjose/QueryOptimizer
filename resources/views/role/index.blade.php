@extends('layouts.plantilla')
@section('title')
<title>AppNet | Roles</title>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if(session('status'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-check"></i> Alert!</h5>
                    {{session('status')}}
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">DataTable Roles
                        <a href="{{route('roles.create')}}" class="btn btn-primary float-right">Crear Roles</a>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="dtbRoles" class="table table-bordered table-striped dtbSystem">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Slug</th>
                        <th>Permisos</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($roles as $role)
                        <tr>
                            <td>{{$role->id}}</td>
                            <td>{{$role->name}}</td>
                            <td>{{$role->guard_name}}</td>
                            <td><a class="btn btn-success" href="{{route('roles.addpermission', $role->id)}}">Añadir/Editar Permisos</a></td>
                            <td><a class="btn btn-warning" href="{{route('roles.edit', $role->id)}}">Editar</a></td>
                            <td><form action="{{route('roles.destroy', $role->id)}}">@csrf @method('delete') <button class="btn btn-danger">Eliminar</button></form></td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Slug</th>
                        <th>Permisos</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</div>
@endsection