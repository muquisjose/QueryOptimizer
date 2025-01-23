@extends('layouts.plantilla')
@section('title')
<title>AppNet | Preparas</title>
@endsection
@section('content')
<div class="container-fluid">
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
                    <h3 class="card-title">DataTable preparas
                        <a href="{{route('preparas.create')}}" class="btn btn-primary float-right">Crear prepara</a>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="dtbpreparas" class="table table-bordered table-striped dtbSystem">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Mesa</th>
                        <th>Tipo</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($preparas as $prepara)
                        <tr>
                            <td>{{$prepara->id}}</td>
                            <td>{{$prepara->nombre}}</td>
                            <td>{{$prepara->mesa}}</td>
                            <td>{{$prepara->tipo}}</td>
                            <td><a class="btn btn-warning" href="{{route('preparas.edit', $prepara->id)}}">Editar</a></td>
                            <td><form action="{{route('preparas.destroy', $prepara->id)}}" method="POST">@csrf @method('delete') <button class="btn btn-danger">Eliminar</button></form></td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Mesa</th>
                        <th>Tipo</th>
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
@endsection