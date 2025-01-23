@extends('layouts.plantilla')
@section('title')
<title>AppNet | Paises</title>
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
                    <h3 class="card-title">DataTable Paises
                        <a href="{{route('paises.create')}}" class="btn btn-primary float-right">Crear paises</a>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="dtbPaises" class="table table-bordered table-striped dtbSystem">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Pais</th>
                        <th>Codigo</th>
                        <th>Paraiso Fiscal</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($paises as $pais)
                        <tr>
                            <td>{{$pais->id}}</td>
                            <td>{{$pais->pais}}</td>
                            <td>{{$pais->codigo}}</td>
                            <td>{{$pais->paraiso_fiscal}}</td>
                            <td><a class="btn btn-warning" href="{{route('paises.edit', $pais->id)}}">Editar</a></td>
                            <td><form action="{{route('paises.destroy', $pais->id)}}" method="POST">@csrf @method('delete') <button class="btn btn-danger">Eliminar</button></form></td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>id</th>
                        <th>Pais</th>
                        <th>Codigo</th>
                        <th>Paraiso Fiscal</th>
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