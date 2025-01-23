@extends('layouts.plantilla')
@section('title')
<title>AppNet | Bunches</title>
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
                    <h3 class="card-title">DataTable bunches</h3><a href="{{route('bunches.create')}}" class="btn btn-primary float-right">Ingresar Bunches</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="dtbBunches" class="table table-bordered table-striped dtbSystem">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Numero</th>
                        <th>Codigo Variedad</th>
                        <th># Tallos</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($bunches as $bunche)
                        <tr>
                            <td>{{$bunche->id}}</td>
                            <td>{{$bunche->num_bunch}}</td>
                            <td>{{$bunche->cod_varie}}</td>
                            <td>{{$bunche->num_tallos}}</td>
                            <td><a class="btn btn-warning" href="{{route('bunches.edit', $bunche->id)}}">Editar</a></td>
                            <td><form action="{{route('bunches.destroy', $bunche->id)}}" method="POST">@csrf @method('delete') <button class="btn btn-danger">Eliminar</button></form></td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>id</th>
                        <th>Numero</th>
                        <th>Codigo Variedad</th>
                        <th># Tallos</th>
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