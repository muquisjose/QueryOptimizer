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
                    <h3 class="card-title">Crear Agencias
                        <a href="" class="btn btn-primary float-end">Back</a>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{route('agencias.store')}}" method="POST">
                        @csrf
                        @method('post')
                        <div class="form-group">
                            <div class="col-3">
                                <label for="role" >Nombre Agencia</label>
                                <input type="text" class="form-control" name="nombre" placeholder="Ingrese el nombre">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-3">
                                <label for="role" >Ruc</label>
                                <input type="numbre" class="form-control" name="ruc" placeholder="Ingrese el ruc" min="0">
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