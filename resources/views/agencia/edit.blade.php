@extends('layouts.plantilla')
@section('title')
<title>AppNet | Agencias</title>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Editar Agencias
                        <a href="" class="btn btn-primary float-end">Back</a>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{route('agencias.update', $agencia)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <div class="col-3">
                                <label for="agencia" >Nombre Agencia</label>
                                <input type="text" class="form-control" name="nombre" placeholder="Ingrese el nombre" value="{{$agencia->nombre}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-3">
                                <label for="guard_name" >Ruc</label>
                                <input type="number" class="form-control" name="ruc" placeholder="Ingrese el slug" value="{{$agencia->ruc}}" required min="0">
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