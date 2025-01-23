@extends('layouts.plantilla')
@section('title')
<title>AppNet | Empresas</title>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Crear Empresas
                        <a href="" class="btn btn-primary float-end">Back</a>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{route('empresas.store')}}" method="POST">
                        @csrf
                        @method('post')
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="razon" >Rason Social</label>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" name="razon_social" placeholder="Ingrese el nombre" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="comercial" >Nombre Comercial</label>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" name="nombre_comercial" placeholder="Ingrese el nombre" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="ciudad" >Ciudad</label>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" name="id_ciudad" placeholder="Ingrese la ciudad" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="ruc" >Ruc</label>
                            </div>
                            <div class="col-3">
                                <input type="number" class="form-control" name="ruc" placeholder="Ingrese el ruc" required min="0">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="telefono1" >Telefono 1</label>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" name="telefono1" placeholder="Ingrese el telefono" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="telefono2" >Telefono 2</label>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" name="telefono2" placeholder="Ingrese el telefono" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="emailventas" >Email Ventas</label>
                            </div>
                            <div class="col-3">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input type="email" class="form-control" placeholder="Email" name="email_ventas" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="emailfinca" >Email Finca</label>
                            </div>
                            <div class="col-3">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input type="email" class="form-control" placeholder="Email" name="email_finca" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="emailreportes" >Email Reportes</label>
                            </div>
                            <div class="col-3">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input type="email" class="form-control" placeholder="Email" name="email_reportes" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="web" >Web</label>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" name="web" placeholder="Ingrese la pagina web" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="activo" >Codigo</label>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" name="codigo" placeholder="Ingrese el codigo" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="activo" >Activo</label>
                            </div>
                            <div class="col-3">
                                <label>
                                    <input type="checkbox" name="activo" value="1" checked readonly>
                                </label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="letra" >Letra</label>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" name="letra" placeholder="Ingrese la letra" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="logotipo" >Logotipo</label>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" name="logotipo" placeholder="Ingrese el path del logotipo" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="modulos" >modulos</label>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" name="modulos" placeholder="Ingrese los modulos" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="contribuyente" >Contribuyente Especial</label>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" name="contribuyente_especial" placeholder="Ingrese si es contribuyente" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="obligado" >Obligado a llevar contabilidad</label>
                            </div>
                            <div class="col-3">
                                <label>
                                    <input type="checkbox" name="obligado_contabilidad" value="1" checked readonly>
                                </label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="direccion_matriz" >Direccion Matriz</label>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" name="direccion_matriz" placeholder="Ingrese la direccion matriz" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="direccion_establecimiento" >Direccion Establecimiento</label>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" name="direccion_establecimiento" placeholder="Ingrese la direccion establecimiento" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="codigo_establecimiento" >Codigo Establecimiento</label>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" name="codigo_establecimiento" placeholder="Ingrese el codigo" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="codigo_pto_emision" >Codigo Punto de emision</label>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" name="codigo_pto_emision" placeholder="Ingrese codigo" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="agente" >Agente</label>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" name="agente" placeholder="Ingrese el agente" required>
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