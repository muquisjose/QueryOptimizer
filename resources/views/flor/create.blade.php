@extends('layouts.plantilla')
@section('title')
<title>AppNet | Flores</title>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Crear Flores
                        <a href="" class="btn btn-primary float-end">Back</a>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{route('flores.store')}}" method="POST">
                        @csrf
                        @method('post')
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group row">
                                    <div class="col-3">
                                        <label for="codigo" >Codigo</label>
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="form-control" name="codigo" placeholder="Ingrese el codigo" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-3">
                                        <label for="variedad" >Variedad</label>
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="form-control" name="variedad" placeholder="Ingrese la variedad" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-3">
                                        <label for="color" >Color</label>
                                    </div>
                                    <div class="col-6">
                                        <input type="varchar" class="form-control" name="color" placeholder="Ingrese la color" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-3">
                                        <label for="activa" >Activa</label>
                                    </div>
                                    <div class="col-6">
                                        <input type="checkbox" name="activa" value="1">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-3">
                                        <label for="novedad" >Novedad</label>
                                    </div>
                                    <div class="col-6">
                                        <input type="checkbox" name="novedad" value="1">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-3">
                                        <label for="descripcion" >Descripcion</label>
                                    </div>
                                    <div class="col-6">
                                        <input type="varchar" class="form-control" name="descripcion" placeholder="Ingrese la descripcion" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-3">
                                        <label for="tallos_malla" >Tallos malla</label>
                                    </div>
                                    <div class="col-6">
                                        <input type="number" class="form-control" name="tallos_malla" placeholder="Ingrese los tallos/malla" required min="0" max="300">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-3">
                                        <label for="ciclo" >Ciclo</label>
                                    </div>
                                    <div class="col-6">
                                        <input type="number" class="form-control" name="ciclo" placeholder="Ingrese los ciclo" required min="0" max="200">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <button type="submit" class="btn btn-success">Guardar</button>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="col-6">
                                    <label for="Longitud" >Largo:</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input custom-control-input-info custom-control-input-outline" type="checkbox" id="40" value="40" name="largo[]" checked>
                                    <label for="40" class="custom-control-label">40</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input custom-control-input-info custom-control-input-outline" type="checkbox" id="50" value="50" name="largo[]" checked>
                                    <label for="50" class="custom-control-label">50</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input custom-control-input-info custom-control-input-outline" type="checkbox" id="60" value="60" name="largo[]" checked>
                                    <label for="60" class="custom-control-label">60</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input custom-control-input-info custom-control-input-outline" type="checkbox" id="70" value="70" name="largo[]" checked>
                                    <label for="70" class="custom-control-label">70</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input custom-control-input-info custom-control-input-outline" type="checkbox" id="80" value="80" name="largo[]" checked>
                                    <label for="80" class="custom-control-label">80</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input custom-control-input-info custom-control-input-outline" type="checkbox" id="90" value="90" name="largo[]" checked>
                                    <label for="90" class="custom-control-label">90</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input custom-control-input-info custom-control-input-outline" type="checkbox" id="100" value="100" name="largo[]" checked>
                                    <label for="100" class="custom-control-label">100</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input custom-control-input-info custom-control-input-outline" type="checkbox" id="110" value="110" name="largo[]" checked>
                                    <label for="110" class="custom-control-label">110</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input custom-control-input-info custom-control-input-outline" type="checkbox" id="120" value="120" name="largo[]" checked>
                                    <label for="120" class="custom-control-label">120</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input custom-control-input-info custom-control-input-outline" type="checkbox" id="130" value="130" name="largo[]" checked>
                                    <label for="130" class="custom-control-label">130</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input custom-control-input-info custom-control-input-outline" type="checkbox" id="140" value="140" name="largo[]" checked>
                                    <label for="140" class="custom-control-label">140</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input custom-control-input-info custom-control-input-outline" type="checkbox" id="150" value="150" name="largo[]" checked>
                                    <label for="150" class="custom-control-label">150</label>
                                </div>
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