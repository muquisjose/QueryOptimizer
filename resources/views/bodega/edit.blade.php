@extends('layouts.plantilla')
@section('title')
<title>AppNet | Bodegas</title>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Editar bodegas
                        <a href="" class="btn btn-primary float-end">Back</a>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{route('bodegas.update', $bodega)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="descripcion" >Descripcion</label>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" name="descripcion" placeholder="Ingrese la descripcion" value="{{$bodega->descripcion}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="iniciales" >Iniciales</label>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" name="iniciales" placeholder="Ingrese la inicial" value="{{$bodega->iniciales}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="activa" >Activa</label>
                            </div>
                            <div class="col-3">
                                <input type="checkbox" name="activa" value="{{$bodega->activa}}" @if ($bodega->activa == 1)
                                    checked
                                @endif >
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