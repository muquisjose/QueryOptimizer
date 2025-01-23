@extends('layouts.plantilla')
@section('title')
<title>AppNet | Fincas</title>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Crear Fincas
                        <a href="" class="btn btn-primary float-end">Back</a>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{route('fincas.store')}}" method="POST">
                        @csrf
                        @method('post')
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="nombre" >Nombre</label>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" name="nombre" placeholder="Ingrese la nombre" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="orden" >Orden</label>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" name="orden" placeholder="Ingrese el orden" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="activa" >Activa</label>
                            </div>
                            <div class="col-3">
                                <input type="checkbox" name="activa" value="1" checked>
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