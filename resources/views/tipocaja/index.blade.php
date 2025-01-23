@extends('layouts.plantilla')
@section('title')
<title>AppNet | Tipo de Cajas</title>
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
                    <h3 class="card-title">DataTable Iipo de cajas
                        <a href="{{route('tipocajas.create')}}" class="btn btn-primary float-right">Crear tipo de cajas</a>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="dtbTipocajas" class="table table-bordered table-striped dtbSystem">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Orden</th>
                        <th>Activa</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tipocajas as $tipocaja)
                        <tr>
                            <td>{{$tipocaja->id}}</td>
                            <td>{{$tipocaja->nombre}}</td>
                            <td>{{$tipocaja->orden}}</td>
                            <td>{{$tipocaja->activa}}</td>
                            <td><a class="btn btn-warning" href="{{route('tipocajas.edit', $tipocaja->id)}}">Editar</a></td>
                            <td><form action="{{route('tipocajas.destroy', $tipocaja->id)}}" method="POST">@csrf @method('delete') <button class="btn btn-danger">Eliminar</button></form></td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Orden</th>
                        <th>Activa</th>
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