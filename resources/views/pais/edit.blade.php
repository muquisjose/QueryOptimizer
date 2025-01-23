@extends('layouts.plantilla')
@section('title')
<title>AppNet | Paises</title>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Editar Paises
                        <a href="" class="btn btn-primary float-end">Back</a>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{route('paises.update', $pais)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="pais" >Pais</label>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" name="pais" placeholder="Ingrese el nombre" required value="{{$pais->pais}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="codigo" >Codigo</label>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" name="codigo" placeholder="Ingrese el nombre" required value="{{$pais->codigo}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="paraiso_fiscal" >Paraiso fiscal</label>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" name="paraiso_fiscal" placeholder="Ingrese el nombre" required value="{{$pais->paraiso_fiscal}}">
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