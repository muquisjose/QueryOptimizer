@extends('layouts.plantilla')
@section('title')
<title>AppNet | Empresas</title>
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
                    <h3 class="card-title">DataTable Empresas
                        <a href="{{route('empresas.create')}}" class="btn btn-primary float-right">Crear Empresas</a>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="dtbEmpresas" class="table table-bordered table-striped dtbSystem">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Razon Social</th>
                        <th>Nombre Comercial</th>
                        <th>Ruc</th>
                        <th>Direccion Matriz</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($empresas as $empresa)
                        <tr>
                            <td>{{$empresa->id}}</td>
                            <td>{{$empresa->razon_social}}</td>
                            <td>{{$empresa->nombre_comercial}}</td>
                            <td>{{$empresa->ruc}}</td>
                            <td>{{$empresa->direccion_matriz}}</td>
                            <td><a class="btn btn-warning" href="{{route('empresas.edit', $empresa->id)}}">Editar</a></td>
                            <td><form action="{{route('empresas.destroy', $empresa->id)}}" method="POST">@csrf @method('delete') <button class="btn btn-danger">Eliminar</button></form></td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>id</th>
                        <th>Razon Social</th>
                        <th>Nombre Comercial</th>
                        <th>Ruc</th>
                        <th>Direccion Matriz</th>
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