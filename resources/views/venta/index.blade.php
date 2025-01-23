@extends('layouts.plantilla')
@section('title')
<title>AppNet | Prepacking</title>
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
                    <h3 class="card-title">DataTable prepacking</h3><a href="{{route('prepackings.create')}}" class="btn btn-primary float-right">Crear prepacking</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="dtbPrepackings" class="table table-bordered table-striped dtbSystem">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Packing</th>
                        <th>Marca</th>
                        <th>Variedad</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($prepackings as $prepacking)
                        <tr>
                            <td>{{$prepacking->id}}</td>
                            <td>{{$prepacking->packing}}</td>
                            <td>{{$prepacking->marca}}</td>
                            <td>{{$prepacking->variedad}}</td>
                            <td><a class="btn btn-warning" href="{{route('prepackings.edit', $prepacking->id)}}">Editar</a></td>
                            <td><form action="{{route('prepackings.destroy', $prepacking->id)}}" method="POST">@csrf @method('delete') <button class="btn btn-danger">Eliminar</button></form></td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>id</th>
                        <th>Packing</th>
                        <th>Marca</th>
                        <th>Variedad</th>
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