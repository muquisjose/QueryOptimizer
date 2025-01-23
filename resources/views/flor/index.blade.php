@extends('layouts.plantilla')
@section('title')
<title>AppNet | Flores</title>
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
                    <h3 class="card-title">DataTable flores
                        <a href="{{route('flores.create')}}" class="btn btn-primary float-right">Crear flores</a>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="dtbFlores" class="table table-bordered table-striped dtbSystem">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Codigo</th>
                        <th>Variedad</th>
                        <th>Color</th>
                        <th>Tallos/Malla</th>
                        <th>Ciclo</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($flores as $flor)
                        <tr>
                            <td>{{$flor->id}}</td>
                            <td>{{$flor->codigo}}</td>
                            <td>{{$flor->variedad}}</td>
                            <td>{{$flor->color}}</td>
                            <td>{{$flor->tallos_malla}}</td>
                            <td>{{$flor->ciclo}}</td>
                            <td><a class="btn btn-warning" href="{{route('flores.edit', $flor->id)}}">Editar</a></td>
                            <td><form action="{{route('flores.destroy', $flor->id)}}" method="POST">@csrf @method('delete') <button class="btn btn-danger">Eliminar</button></form></td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>id</th>
                        <th>Codigo</th>
                        <th>Variedad</th>
                        <th>Color</th>
                        <th>Tallos/Malla</th>
                        <th>Ciclo</th>
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