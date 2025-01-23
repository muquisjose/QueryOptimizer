@extends('layouts.plantilla')
@section('title')
<title>AppNet | Precios</title>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Copiar precios
                        <a href="" class="btn btn-primary float-end">Back</a>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    
                    <form action="{{route('precios.store')}}" method="POST">
                        @csrf
                        @method('post')
                        <div class="row form-group">
                            <div class="col-3">
                                <label for="Cliente que copia"> Cliente que copia</label>
                                <select class="form-control select2 select2-hidden-accessible" name="begin" style="width: 100%;">
                                    <option>Seleccione...</option>
                                    @foreach ($clientes as $cliente)
                                        <option value="{{$cliente->id}}">{{$cliente->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-3">
                                <label for="Cliente al que copia"> Cliente al que copia</label>
                                <select class="form-control select2 select2-hidden-accessible" name="endTo" style="width: 100%;">
                                    <option>Seleccione...</option>
                                    @foreach ($clientes as $cliente)
                                        <option value="{{$cliente->id}}">{{$cliente->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-2">
                                <button type="submit" class="btn btn-success form-control">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    
</div>
@endsection