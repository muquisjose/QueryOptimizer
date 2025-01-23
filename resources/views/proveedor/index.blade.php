@extends('layouts.plantilla')
@section('title')
<title>AppNet | Proveedores</title>
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
                    <h3 class="card-title">DataTable proveedores
                        <a href="{{route('proveedores.create')}}" class="btn btn-primary float-right">Crear proveedores</a>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="dtbProveedores" class="table table-bordered table-striped dtbSystem">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Telefono</th>
                        <th>Observa</th>
                        <th>Cuarto Frio</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($proveedores as $proveedor)
                        <tr>
                            <td>{{$proveedor->id}}</td>
                            <td>{{$proveedor->nombre}}</td>
                            <td>{{$proveedor->telefono1}}</td>
                            <td>{{$proveedor->observa}}</td>
                            <td>{{$proveedor->cuarto_frio}}</td>
                            <td><a class="btn btn-warning" href="{{route('proveedores.edit', $proveedor->id)}}">Editar</a></td>
                            <td><form action="{{route('proveedores.destroy', $proveedor->id)}}" method="POST">@csrf @method('delete') <button class="btn btn-danger">Eliminar</button></form></td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Telefono</th>
                        <th>Observa</th>
                        <th>Cuarto Frio</th>
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