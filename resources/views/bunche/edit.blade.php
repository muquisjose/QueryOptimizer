@extends('layouts.plantilla')
@section('title')
<title>AppNet | Bunches</title>
@endsection
@section('content')
<div class="container-fluid">
    <form action="{{route('bunches.update', $bunche)}}" method="POST">
        @csrf
        @method('post')
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Datos Generales</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row form-group">
                            <div class="col">
                                <label for="Bunchenum">Bunche Nº</label>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" readonly name="num_bunche" value="{{$bunche->num_bunch}}">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col">
                                <label for="Esatdo">Estado</label>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" readonly name="estado" value="Nuevo">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col">
                                <label for="variedad">Variedad</label>
                            </div>
                            <div class="col">
                                <select name="cod_varie" id="cod_varie" class="form-control select2" required>
                                    <option value="">Seleccione...</option>
                                    @foreach ($variedades as $variedad)
                                        <option value="{{$variedad->id}}" {{ ($variedad->codigo == substr($bunche->cod_varie, 0, 3)) ? 'selected':''}}>{{$variedad->variedad}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col">
                                <label for="Largo">Largo</label>
                            </div>
                            <div class="col">
                                <select name="largo" id="largo" class="form-control" required>
                                    <option value="">Seleccione...</option>
                                    @foreach ($largos as $largo)
                                        <option value="{{$largo->id}}" {{ ($largo->largo == substr($bunche->cod_varie, 3, 3)) ? 'selected':''}}>{{$largo->largo}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col">
                                <label for="tipo_caja">Empaque</label>
                            </div>
                            <div class="col">
                                <select name="empaque" id="empaque" class="form-control" required>
                                    <option value="">Seleccione...</option>
                                    @foreach ($empaques as $empaque)
                                        <option value="{{$empaque->id}}" {{ ($empaque->id == $bunche->empaque) ? 'selected':''}}>{{$empaque->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col">
                                <label for="tallosbunche">Tallos/Bunche</label>
                            </div>
                            <div class="col">
                                <select name="num_tallos" id="num_tallos" class="form-control" required>
                                    <option value="">Seleccione...</option>
                                    <option value="25" {{ (25 == $bunche->num_tallos) ? 'selected':''}}>25</option>
                                    <option value="20" {{ (20 == $bunche->num_tallos) ? 'selected':''}}>20</option>
                                    <option value="18" {{ (18 == $bunche->num_tallos) ? 'selected':''}}>18</option>
                                    <option value="12" {{ (12 == $bunche->num_tallos) ? 'selected':''}}>12</option>
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col">
                                <label for="bodega">Bodega</label>
                            </div>
                            <div class="col">
                                <select name="tipo_env" id="tipo_env" class="form-control" required>
                                    <option value="">Seleccione...</option>
                                    @foreach ($envolturas as $envoltura)
                                        <option value="{{$envoltura->id}}" {{ ($envoltura->id == $bunche->tipo_env) ? 'selected':''}}>{{$envoltura->descripcion}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <div class="col-md-6">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Datos Mesas</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row form-group">
                            <div class="col">
                                <label for="mesa">Mesa</label>
                            </div>
                            <div class="col">
                                <select name="mesa" id="mesa" class="form-control" required>
                                    <option value="">Seleccione</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col">
                                <label for="mesa">Clasifica</label>
                            </div>
                            <div class="col">
                                <select name="id_prepara" id="id_prepara" class="form-control" required>
                                    <option value="">Seleccione</option>
                                    @foreach ($preparas as $prepara)
                                        <option value="{{$prepara->id}}" {{ ($prepara->id == $bunche->id_prepara) ? 'selected':''}}>{{$prepara->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col">
                                <label for="mesa">Emboncha</label>
                            </div>
                            <div class="col">
                                <select name="emboncha" id="emboncha" class="form-control" required>
                                    <option value="">Seleccione</option>
                                    @foreach ($preparas as $prepara)
                                        <option value="{{$prepara->id}}">{{$prepara->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col">
                                <label for="mesa">Reprocesos</label>
                            </div>
                            <div class="col">
                                <select name="reprocesos" id="reprocesos" class="form-control" required>
                                    <option value="">Seleccione</option>
                                    <option value="">Correccion</option>
                                    <option value="">Transformacion</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <div class="col-3">
            <button type="submit" class="btn btn-success">Imprimir</button>
        </div>
    </form>
</div>
@endsection