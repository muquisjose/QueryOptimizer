@extends('layouts.plantilla')
@section('title')
<title>AppNet | Flores</title>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Editar Flores
                        <a href="" class="btn btn-primary float-end">Back</a>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{route('flores.update', $flor)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="codigo" >Codigo</label>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" name="codigo" placeholder="Ingrese el codigo" value="{{$flor->codigo}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="variedad" >Variedad</label>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" name="variedad" placeholder="Ingrese la variedad" value="{{$flor->variedad}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="color" >Color</label>
                            </div>
                            <div class="col-3">
                                <input type="varchar" class="form-control" name="color" placeholder="Ingrese la color" value="{{$flor->color}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="activa" >Activa</label>
                            </div>
                            <div class="col-3">
                                <input type="checkbox" name="activa" value="{{$flor->activa}}" @if ($flor->activa == 1)
                                    checked
                                @endif >
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="novedad" >novedad</label>
                            </div>
                            <div class="col-3">
                                <input type="checkbox" name="novedad" value="{{$flor->novedad}}" @if ($flor->novedad == 1)
                                    checked
                                @endif >
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="descripcion" >Descripcion</label>
                            </div>
                            <div class="col-3">
                                <input type="varchar" class="form-control" name="descripcion" placeholder="Ingrese la descripcion" value="{{$flor->descripcion}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="tallos_malla" >Tallos malla</label>
                            </div>
                            <div class="col-3">
                                <input type="number" class="form-control" name="tallos_malla" placeholder="Ingrese los tallos/malla" value="{{$flor->tallos_malla}}" required min="0" max="200">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="ciclo" >Ciclo</label>
                            </div>
                            <div class="col-3">
                                <input type="number" class="form-control" name="ciclo" placeholder="Ingrese los ciclo" value="{{$flor->ciclo}}" required min="0" max="200">
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