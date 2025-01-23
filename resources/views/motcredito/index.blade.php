@extends('layouts.plantilla')
@section('title')
<title>AppNet | Motivo de creditos</title>
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
                    <h3 class="card-title">DataTable Motivo de creditos
                        <a href="{{route('motcreditos.create')}}" class="btn btn-primary float-right">Crear Motivo de creditos</a>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="dtbMotcreditos" class="table table-bordered table-striped dtbSystem">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Detalle</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($motcreditos as $motcredito)
                        <tr>
                            <td>{{$motcredito->id}}</td>
                            <td>{{$motcredito->detalle}}</td>
                            <td><a class="btn btn-warning" href="{{route('motcreditos.edit', $motcredito->id)}}">Editar</a></td>
                            <td><form action="{{route('motcreditos.destroy', $motcredito->id)}}" method="POST">@csrf @method('delete') <button class="btn btn-danger">Eliminar</button></form></td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>id</th>
                        <th>Detalle</th>
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