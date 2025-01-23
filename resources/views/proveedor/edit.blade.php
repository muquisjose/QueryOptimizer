@extends('layouts.plantilla')
@section('title')
<title>AppNet | Proveedores</title>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Editar Proveedores
                        <a href="" class="btn btn-primary float-end">Back</a>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{route('proveedores.update', $proveedor)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="codigo" >Codigo</label>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" name="codigo" placeholder="Ingrese el codigo" required value="{{$proveedor->codigo}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="nombre" >Nombre</label>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" name="nombre" placeholder="Ingrese el nombre" required value="{{$proveedor->nombre}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="direccion" >Direccion</label>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" name="direccion" placeholder="Ingrese la direccion" required value="{{$proveedor->direccion}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="telefono1" >Telefono 1</label>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" name="telefono1" placeholder="Ingrese el telefono" required value="{{$proveedor->telefono1}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="telefono2" >Telefono 2</label>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" name="telefono2" placeholder="Ingrese el telefono" required value="{{$proveedor->telefono2}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="contacto" >Contacto</label>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" name="contacto" placeholder="Ingrese el contacto" required value="{{$proveedor->contacto}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="observa" >Observa</label>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" name="observa" placeholder="Ingrese la observacion" required value="{{$proveedor->observa}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="prove_aduana" >Provedor aduana</label>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" name="prove_aduana" placeholder="Ingrese el provedor aduana" required value="{{$proveedor->prove_aduana}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="cuarto_frio" >Cuarto frio</label>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" name="cuarto_frio" placeholder="Ingrese el cuarto frio" required value="{{$proveedor->cuarto_frio}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="web" >Web</label>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" name="pagina_web" placeholder="Ingrese la pagina web" required value="{{$proveedor->pagina_web}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="identificacion" >identificacion</label>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" name="identificacion" placeholder="Ingrese la identificacion" required value="{{$proveedor->identificacion}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="tipo_identificacion" >Tipo identificacion</label>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" name="tipo_identificacion" placeholder="Ingrese el tipo de identificacion" required value="{{$proveedor->tipo_identificacion}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="razon_social" >Razon social</label>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" name="razon_social" placeholder="Ingrese la razon social" required value="{{$proveedor->razon_social}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="email" >Email</label>
                            </div>
                            <div class="col-3">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input type="email" class="form-control" placeholder="Email" name="email" required value="{{$proveedor->email}}">
                                </div>
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