@extends('layouts.plantilla')
@section('title')
<title>AppNet | Cultivadores</title>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Editar Cultivadores
                        <a href="" class="btn btn-primary float-end">Back</a>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{route('cultivadores.update', $cultivador)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <div class="col-3">
                                <label for="cultivador" >Nombre cultivador</label>
                                <input type="text" class="form-control" name="nombre" placeholder="Ingrese el nombre" value="{{$cultivador->nombre}}" required>
                            </div>
                        </div>
                        <div class="col-3">
                            <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</div>
@endsection