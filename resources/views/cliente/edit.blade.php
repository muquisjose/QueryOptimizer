@extends('layouts.plantilla')
@section('title')
<title>AppNet | Clientes</title>
@endsection
@section('content')
    <div class="container-fluid">
        
        <form action="{{route('clientes.update', $cliente)}}" method="POST">
            @csrf
            @method('put')
        <div class="row">
            <div class="col-md-12">
              <div class="card card-default">
                <div class="card-header">
                  <h3 class="card-title">Editar Cliente</h3>
                </div>
                <div class="card-body p-0">
                  <div class="bs-stepper">
                    <div class="bs-stepper-header" role="tablist">
                      <!-- your steps here -->
                      <div class="step" data-target="#general-part">
                        <button type="button" class="step-trigger" role="tab" aria-controls="general-part" id="general-part-trigger">
                          <span class="bs-stepper-circle bg-info">1</span>
                          <span class="bs-stepper-label">Informacion General</span>
                        </button>
                      </div>
                      <div class="line"></div>
                      <div class="step" data-target="#contact-part">
                        <button type="button" class="step-trigger" role="tab" aria-controls="contact-part" id="contact-part-trigger">
                          <span class="bs-stepper-circle bg-info">2</span>
                          <span class="bs-stepper-label">Contactos</span>
                        </button>
                      </div>
                      <div class="line"></div>
                      <div class="step" data-target="#information-part">
                        <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                          <span class="bs-stepper-circle bg-info">3</span>
                          <span class="bs-stepper-label">Information Financiera</span>
                        </button>
                      </div>
                      
                    </div>
                    <div class="bs-stepper-content">
                      <!-- your steps content here -->
                      <div id="general-part" class="content" role="tabpanel" aria-labelledby="general-part-trigger">
                        <div class="form-group row">
                            <div class="col-1">
                                <label for="nombre" >Nombre</label>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control form-control-sm"  onkeyup="javascript:this.value=this.value.toUpperCase();" name="nombre" placeholder="Ingrese la nombre" value="{{$cliente->nombre}}" required>
                            </div>
                            <div class="col-1">
                                <label for="pais" >Pais</label>
                            </div>
                            <div class="col-2">
                                @php
                                    $npais = explode(",",$cliente->localiza);
                                @endphp
                                <select class="form-control form-control-sm" name="pais">
                                    <option value="">Seleccione...</option>
                                    @foreach ($paises as $pais)
                                        <option value="{{$pais->pais}}" {{($pais->pais == $npais[1]) ? 'selected':''}}>{{$pais->pais}}</option>
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
                                <label for="contacto" >Propietario</label>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control form-control-sm" name="contacto" placeholder="Ingrese el propietario" required>
                            </div>
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
                            <div class="col-1">
                                <label for="alfa_client" >Codigo</label>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control form-control-sm" name="alfa_client" placeholder="Ingrese el codigo" required>
                            </div>
                            <div class="col-1">
                                <label for="notificar" >Notificar</label>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control form-control-sm" name="notificar" placeholder="Ingrese el notificar" required>
                            </div>
                            <div class="col-1">
                                <label for="nif" >NIF / ID</label>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control form-control-sm" name="id_nif" placeholder="Ingrese el nif" required>
                            </div>
                            <div class="col-1">
                                <label for="tar" >Tar</label>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control form-control-sm" name="tar" value="{{$cliente->tar}}" readonly>
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
                        </div>
                        <button type="button" class="btn btn-primary" onclick="stepper.next()">Next</button>
                      </div>
                      <div id="contact-part" class="content" role="tabpanel" aria-labelledby="contact-part-trigger">
                        <div class="form-group row">
                            <div class="col-1">
                                <label for="compras1" >Compras 1:</label>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control form-control-sm" name="compras1" placeholder="Ingrese el nombre" >
                            </div>
                            <div class="col-1">
                                <label for="telefono_c1" >Telefono 1</label>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control form-control-sm" name="telefono_c1" placeholder="Ingrese el telefono_c1">
                            </div>
                            <div class="col-1">
                                <label for="mobil_c1" >Mobil 1</label>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control form-control-sm" name="mobil_c1" placeholder="Ingrese el mobil_c1">
                            </div>
                            <div class="col-1">
                                <label for="chat_c1" >Skype 1</label>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control form-control-sm" name="chat_c1" placeholder="Ingrese la chat_c1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-1">
                                <label for="compras2" >Compras 2:</label>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control form-control-sm" name="compras2" placeholder="Ingrese el nombre">
                            </div>
                            <div class="col-1">
                                <label for="telefono_c2" >Telefono 1</label>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control form-control-sm" name="telefono_c2" placeholder="Ingrese el telefono">
                            </div>
                            <div class="col-1">
                                <label for="mobil_c2" >Mobil 2</label>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control form-control-sm" name="mobil_c2" placeholder="Ingrese el mobil">
                            </div>
                            <div class="col-1">
                                <label for="chat_c2" >Skype 2</label>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control form-control-sm" name="chat_c2" placeholder="Ingrese elskype">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-1">
                                <label for="compras3" >Compras 3:</label>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control form-control-sm" name="compras3" placeholder="Ingrese el nombre">
                            </div>
                            <div class="col-1">
                                <label for="telefono_c3" >Telefono 3</label>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control form-control-sm" name="telefono_c3" placeholder="Ingrese el telefono">
                            </div>
                            <div class="col-1">
                                <label for="mobil_c3" >Mobil 3</label>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control form-control-sm" name="mobil_c3" placeholder="Ingrese el mobil">
                            </div>
                            <div class="col-1">
                                <label for="chat_c3" >Skype 3</label>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control form-control-sm" name="chat_c3" placeholder="Ingrese elskype">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-1">
                                <label for="compras4" >Compras 4:</label>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control form-control-sm" name="compras4" placeholder="Ingrese el nombre">
                            </div>
                            <div class="col-1">
                                <label for="telefono_c4" >Telefono 4</label>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control form-control-sm" name="telefono_c4" placeholder="Ingrese el telefono">
                            </div>
                            <div class="col-1">
                                <label for="mobil_c4" >Mobil 4</label>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control form-control-sm" name="mobil_c4" placeholder="Ingrese el mobil">
                            </div>
                            <div class="col-1">
                                <label for="chat_c4" >Skype 4</label>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control form-control-sm" name="chat_c4" placeholder="Ingrese el skype">
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                        <button type="button" class="btn btn-primary" onclick="stepper.next()">Next</button>
                      </div>
                      <div id="information-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
                        <div class="form-group row">
                            <div class="col-1">
                                <label for="pagos" >Contacto</label>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control form-control-sm" name="pagos" placeholder="Ingrese el nombre">
                            </div>
                            <div class="col-1">
                                <label for="direccion_pg" >Direccion</label>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control form-control-sm" name="direccion_pg" placeholder="Ingrese la direccion">
                            </div>
                            <div class="col-1">
                                <label for="telefono_pg" >Telefono</label>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control form-control-sm" name="telefono_pg" placeholder="Ingrese el telefono">
                            </div>
                            <div class="col-1">
                                <label for="mobil_pg" >Mobil</label>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control form-control-sm" name="mobil_pg" placeholder="Ingrese el mobil">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-1">
                                <label for="email_pg" >Email</label>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control form-control-sm" name="email_pg" placeholder="Ingrese el email" >
                            </div>
                            <div class="col-1">
                                <label for="chat_pg" >Skype</label>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control form-control-sm" name="chat_pg" placeholder="Ingrese la skype">
                            </div>
                            <div class="col-1">
                                <label for="credito">Credito dias</label>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control form-control-sm" name="credito" placeholder="Ingrese el credito" required>
                            </div>
                            <div class="col-1">
                                <label for="numerar" >Monto</label>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control form-control-sm" name="numerar" placeholder="Ingrese el monto maximo" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-1">
                                <label for="formapago" >F. de pago</label>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control form-control-sm" name="formapago" placeholder="Ingrese la forma de pago" required>
                            </div>
                            <div class="col-1">
                                <label for="fechapago" >Fecha pago</label>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control form-control-sm" name="fechapago" placeholder="Ingrese la fecha de pago" required>
                            </div>
                            <div class="col-1">
                                <label for="matriz_destino" >Destino</label>
                            </div>
                            <div class="col-2">
                                <select class="form-control form-control-sm" name="matriz_destino">
                                    <option value="">Seleccione...</option>
                                    <option value="Flor Eloy">Flor Eloy</option>
                                    <option value="Matriz">Matriz</option>
                                </select>
                            </div>
                            <div class="col-1">
                                <label for="email_facturas" >Email</label>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control form-control-sm" name="email" placeholder="Ingrese el email facturas" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-1">
                                <label for="email_cartera" >Email</label>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control form-control-sm" name="email_cartera" placeholder="Ingrese el email cartera">
                            </div>
                            <div class="col-1">
                                <label for="referencia_com1" >Referencia 1</label>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control form-control-sm" name="referencia_com1" placeholder="Ingrese el nombre">
                            </div>
                            <div class="col-1">
                                <label for="referencia_com2" >Referencia 2</label>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control form-control-sm" name="referencia_com2" placeholder="Ingrese el nombre">
                            </div>
                            <div class="col-1">
                                <label for="referencia_com3" >Referencia 3</label>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control form-control-sm" name="referencia_com3" placeholder="Ingrese el nombre">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-1">
                                <label for="notas" >Notas</label>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control form-control-sm" name="notas" placeholder="Ingrese el email">
                            </div>
                            <div class="col-1">
                                <label for="comentario" >Comentario</label>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control form-control-sm" name="comentario" placeholder="Ingrese el nombre">
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                        <button type="submit" class="btn btn-success">Guardar</button>
                      </div>
                    </div>
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