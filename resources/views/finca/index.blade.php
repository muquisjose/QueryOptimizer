@extends('layouts.plantilla')
@section('title')
<title>AppNet | Fincas</title>
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
                    <h3 class="card-title">DataTable fincas
                        <a href="{{route('fincas.create')}}" class="btn btn-primary float-right">Crear fincas</a>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="dtbFincas" class="table table-bordered table-striped dtbSystem">
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
                    @foreach($fincas as $finca)
                        <tr>
                            <td>{{$finca->id}}</td>
                            <td>{{$finca->nombre}}</td>
                            <td>{{$finca->orden}}</td>
                            <td>{{$finca->activa}}</td>
                            <td><a class="btn btn-warning" href="{{route('fincas.edit', $finca->id)}}">Editar</a></td>
                            <td><form action="{{route('fincas.destroy', $finca->id)}}" method="POST">@csrf @method('delete') <button class="btn btn-danger">Eliminar</button></form></td>
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