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
                    <h3 class="card-title">Editar precios de {{$precios[0]->clientes->nombre}}
                        <a href="" class="btn btn-primary float-end">Back</a>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{route('precios.update')}}" method="post">
                        @csrf
                        @method('post')
                        <table id="dbPrecios" class="table table-bordered table-striped dtbSystem">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Variedad</th>
                                    <th>Alta</th>
                                    <th>Normal</th>
                                    <th>Baja</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($precios as $key => $precio)
                                <tr>
                                    <td>{{$key+1;}}<input class="form-control form-control-sm" type="numbre" min="0" name="id[]" value="{{$precio->id}}" style="visibility: collapse; display: none;"></td>
                                    <td>{{$precio->variedades->nombre}}</td>
                                    <td><input class="form-control form-control-sm" type="numbre" min="0" name="alta[]" value="{{$precio->alta}}"></td>
                                    <td><input class="form-control form-control-sm" type="numbre" min="0" name="normal[]" value="{{$precio->normal}}"></td>
                                    <td><input class="form-control form-control-sm" type="numbre" min="0" name="baja[]" value="{{$precio->baja}}"></td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Variedad</th>
                                    <th>Alta</th>
                                    <th>Normal</th>
                                    <th>Baja</th>
                                </tr>
                            </tfoot>
                        </table>
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