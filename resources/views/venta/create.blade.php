@extends('layouts.plantilla')
@section('title')
<title>AppNet | Prepacking</title>
@endsection
@section('content')
<div class="container-fluid">
    
        
        <div class="row justify-content-center">
            <div class="col">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Datos Generales</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row form-group">
                            <div class="col-1">
                                <label for="fecha">Fecha</label>
                            </div>
                            <div class="col-2">
                                <input type="date" id="fecha" name="fecha" class="form-control-sm" value="{{date("Y-m-d")}}">
                            </div>
                            <div class="col-1">
                                <label for="pedido">Pedido</label>
                            </div>
                            <div class="col-2">
                                <select name="pedido" id="pedido" class="form-control-sm">
                                    <option value="">Seleccione un pedido</option>
                                    <option value="nuevo">Nuevo</option>
                                </select>
                            </div>
                            <div class="col-1">
                                <label for="Bodega">Bodega</label>
                            </div>
                            <div class="col">
                                <select name="bodega" id="bodega" class="form-control-sm">
                                    <option value="">Seleccione una bodega</option>
                                    @foreach ($bodegas as $bodega)
                                        <option value="{{$bodega->id}}">{{$bodega->descripcion}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-1">
                                <label for="empaque">Empaque</label>
                            </div>
                            <div class="col">
                                <select name="empaque" id="empaque" class="form-control-sm">
                                    <option value="">Seleccione un empaque</option>
                                    @foreach ($empaques as $empaque)
                                        <option value="{{$empaque->id}}">{{$empaque->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-1">
                                <label for="cliente">Cliente:</label>
                            </div>
                            <div class="col-3">
                                <select name="cliente" id="cliente" class="form-control-sm select2" style="position: relative; width: 100%;">
                                    <option value="">Seleccione...</option>
                                    @foreach ($clientes as $cliente)
                                        <option value="{{$cliente->nombre}}">{{$cliente->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-1">
                                <label for="tallos">Tallos:</label>
                            </div>
                            <div class="col-1.5">
                                <select name="botones" id="botones" class="form-control-sm" style="position: relative; width: 100%;">
                                    <option value="">Seleccione...</option>
                                    @foreach ($tallos as $tallo)
                                        <option value="{{$tallo->num_tallos}}">{{$tallo->num_tallos}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-1">
                                <label for="dia">Dia:</label>
                            </div>
                            <div class="col">
                                <select name="dia" id="dia" class="form-control-sm select2" data-placeholder="Seleccione..." multiple="multiple" style="width: 100%;">
                                    <option value="">Seleccione...</option>
                                    <option value="5" selected>5</option>
                                    <option value="4" selected>4</option>
                                    <option value="3" selected>3</option>
                                    <option value="2" selected>2</option>
                                    <option value="1" selected>1</option>
                                    <option value="0" selected>0</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-1">
                                <label for="subcliente">Sub Cliente:</label>
                            </div>
                            <div class="col-3">
                                <select name="cod_client" id="cod_client" class="form-control-sm select2" style="position: relative; width: 100%;">
                                    <option value="">Seleccione...</option>
                                </select>
                            </div>
                            <div class="col-3">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text input-group-sm">Marca</span>
                                    </div>
                                    <input type="text" name="marca" id="marca" class="form-control-sm" placeholder="Marca">
                                </div>
                            </div>
                            <div class="col-2.5">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text input-group-sm">Caja Desde</span>
                                    </div>
                                    <input type="text" name="desde" id="desde" class="form-control-sm" value="1" style="width: 50px;">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text input-group-sm">Hasta</span>
                                    </div>
                                    <input type="text" name="hasta" id="hasta" class="form-control-sm" value="1" style="width: 50px;">
                                </div>
                            </div>
                            <div class="col-1">
                                <select name="tipo" id="tipo" class="form-control-sm" style="position: relative; width: 100%;">
                                    <option value="HB">HB</option>
                                    <option value="QB">QB</option>
                                    <option value="FB">FB</option>
                                    <option value="OCT">OCT</option>
                                    <option value="SB">SB</option>
                                </select>
                            </div>
                            <div class="col-sm-1">
                                <input type="button" class="btn btn-block bg-purple color-palette btn-sm" id="btnDispo" value="Mostrar">
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="card card-success">
                    
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <table class="table table-bordered table-sm table-striped">
                                <thead>
                                    <tr>
                                        <th>Variedad</th>
                                        <th>Disponible</th>
                                        <th>Pendiente</th>
                                    </tr>
                                </thead>
                                <tbody class="dispo">
                                    @foreach ($bunches as $bunche)
                                        <tr>
                                            <td>{{$bunche->variedad}}</td>
                                            <td>{{$bunche->tallos}}</td>
                                            <td>0 <input type="button" name="btnVariedad" id="btnVariedad" value="S" class=" btn btn-default float-right btn-sm"></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <div class="col-md-9">
                <div class="card card-success">
                    
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <table id="dispo" class="table table-bordered table-sm table-striped">
                                <thead>
                                    <tr>
                                        <th>Variedad</th>
                                        <th>Long.</th>
                                        <th>Dispo</th>
                                        <th>Reserva</th>
                                        <th>Dia 0</th>
                                        <th>Dia 1</th>
                                        <th>Dia 2</th>
                                        <th>Dia 3</th>
                                        <th>Dia 4</th>
                                        <th>Dia 5</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <div class="card card-success">
                    
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <table id="carga" class="table table-bordered table-sm table-striped">
                                <thead>
                                    <tr>
                                        <th>Marca</th>
                                        <th>Precio</th>
                                        <th>Tipo</th>
                                        <th>Caja</th>
                                        <th>Variedad</th>
                                        <th>Largo</th>
                                        <th>Reclasificacion</th>
                                        <th>Cantidad</th>
                                        <th>Envoltura</th>
                                        <th>Tallos</th>
                                        <th>Pendiente</th>
                                        <th>Dia</th>
                                        <th>Carguera</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <div class="col-3">
            <button type="submit" class="btn btn-success">Crear</button>
        </div>
    
</div>
@endsection