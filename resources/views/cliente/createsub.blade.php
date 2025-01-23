@extends('layouts.plantilla')
@section('title')
<title>AppNet | Clientes</title>
@endsection
@section('content')
    <div class="container-fluid"> 
        <form action="{{route('clientes.storesub')}}" method="POST">
            @csrf
            @method('post')
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Crear Sub Cliente</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-1">
                                <label for="nombre" >Nombre</label>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control form-control-sm"  onkeyup="javascript:this.value=this.value.toUpperCase();" name="nombre" placeholder="Ingrese la nombre" required>
                            </div>
                            <div class="col-1">
                                <label for="pais" >Pais</label>
                            </div>
                            <div class="col-2">
                                <select class="form-control form-control-sm" name="pais">
                                    <option value="">Seleccione...</option>
                                    @foreach ($paises as $pais)
                                        <option value="{{$pais->pais}}">{{$pais->pais}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-1">
                                <label for="ciudad" >Ciudad</label>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control form-control-sm" name="ciudad" placeholder="Ingrese la ciudad" required>
                            </div>
                            <div class="col-1">
                                <label for="direccion" >Direccion</label>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control form-control-sm" name="direccion" placeholder="Ingrese la direccion" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-1">
                                <label for="telefono1" >Telefono</label>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control form-control-sm" name="telefono1" placeholder="Ingrese el telefono" required>
                            </div>
                            <div class="col-1">
                                <label for="email_contacto" >E-Mail</label>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control form-control-sm" name="email_contacto" placeholder="Ingrese el E-Mail" required>
                            </div>
                            <div class="col-1">
                                <label for="mobil_p" >Mobiles</label>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control form-control-sm" name="mobil_p" placeholder="Ingrese el mobil">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-1">
                                <label for="chat_p" >Skype</label>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control form-control-sm" name="chat_p" placeholder="Ingrese el skype">
                            </div>
                            <div class="col-1">
                                <label for="id_usu" >Vendedor</label>
                            </div>
                            <div class="col-2">
                                <select class="form-control form-control-sm" name="id_usu">
                                    <option value="">Seleccione...</option>
                                    @foreach ($users as $user)
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-1">
                                <label for="zona" >Mercado</label>
                            </div>
                            <div class="col-2">
                                <select class="form-control form-control-sm" name="zona">
                                    <option value="">Seleccione...</option>
                                    <option value="EUROPE">EUROPE</option>
                                    <option value="NORTH AMERICA">NORTH AMERICA</option>
                                    <option value="OTHERS">OTHERS</option>
                                    <option value="RUSSIA">RUSSIA</option>
                                </select>
                            </div>
                            <div class="col-1">
                                <label for="id_prove" >Carguera</label>
                            </div>
                            <div class="col-2">
                                <select class="form-control form-control-sm" name="id_prove">
                                    <option value="">Seleccione...</option>
                                    @foreach ($proveedores as $proveedor)
                                        <option value="{{$proveedor->id}}">{{$proveedor->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="form-control-sm clearfix">
                                <div class="icheck-success d-inline">
                                <input type="radio" id="activo1" value="1" name="activo" checked="">
                                <label for="activo1">Activo
                                </label>
                                </div>
                                <div class="icheck-danger d-inline">
                                <input type="radio" id="activo2" value="0" name="activo">
                                <label for="activo2">Inactivo
                                </label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input custom-control-input-warning" type="checkbox" id="moroso" name="moroso" value="1">
                                    <label for="moroso" class="custom-control-label">Moroso</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="form-control-sm clearfix">
                                <div class="icheck-success d-inline">
                                <input type="radio" id="categoria1" value="E" name="categoria" checked="">
                                <label for="categoria1">Extranjero
                                </label>
                                </div>
                                <div class="icheck-danger d-inline">
                                <input type="radio" id="categoria2" value="N" name="categoria">
                                <label for="categoria2">Nacional
                                </label>
                                </div>
                                <div class="icheck-warning d-inline">
                                <input type="radio" id="categoria3" value="D" name="categoria">
                                <label for="categoria3">Desaduanizador
                                </label>
                                </div>
                            </div>
                            <input type="number" name="id_cliente" value="{{$cliente->id}}" style="display: none;" readonly>
                        </div>
                        <div class="row">
                            <input class="btn btn-success" type="submit" value="Guardar">    
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                    Visit <a href="https://github.com/Johann-S/bs-stepper/#how-to-use-it">bs-stepper documentation</a> for more examples and information about the plugin.
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
        </form>
    </div>
@endsection