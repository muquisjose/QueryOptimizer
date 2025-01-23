@extends('layouts.plantilla')
@section('title')
<title>AppNet | Linea aereas</title>
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
                    <h3 class="card-title">DataTable laereas
                        <a href="{{route('laereas.create')}}" class="btn btn-primary float-right">Crear linea aereas</a>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="dtbLaereas" class="table table-bordered table-striped dtbSystem">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>aduana</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($laereas as $laerea)
                        <tr>
                            <td>{{$laerea->id}}</td>
                            <td>{{$laerea->codigo}}</td>
                            <td>{{$laerea->nombre}}</td>
                            <td>{{$laerea->aduana}}</td>
                            <td><a class="btn btn-warning" href="{{route('laereas.edit', $laerea->id)}}">Editar</a></td>
                            <td><form action="{{route('laereas.destroy', $laerea->id)}}" method="POST">@csrf @method('delete') <button class="btn btn-danger">Eliminar</button></form></td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>id</th>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>aduana</th>
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