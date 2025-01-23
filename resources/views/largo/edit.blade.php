@extends('layouts.plantilla')
@section('title')
<title>AppNet | Largos</title>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Editar largos
                        <a href="" class="btn btn-primary float-end">Back</a>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{route('largos.update', $largo)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="longitud" >Longitud</label>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" name="longitud" placeholder="Ingrese la longitud" value="{{$largo->longitud}}" required>
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