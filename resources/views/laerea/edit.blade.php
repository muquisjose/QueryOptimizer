@extends('layouts.plantilla')
@section('title')
<title>AppNet | Linea aereas</title>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Editar linea aereas
                        <a href="" class="btn btn-primary float-end">Back</a>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{route('laereas.update', $laerea)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="codigo" >Codigo</label>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" name="codigo" placeholder="Ingrese el codigo" value="{{$laerea->codigo}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="nombre" >Nombre</label>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" name="nombre" placeholder="Ingrese la nombre" value="{{$laerea->nombre}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="aduana" >Aduana</label>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" name="aduana" placeholder="Ingrese la aduana" value="{{$laerea->aduana}}" required>
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