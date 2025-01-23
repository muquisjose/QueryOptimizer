@extends('layouts.plantilla')
@section('title')
<title>AppNet | Permisos</title>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Editar Permisos
                        <a href="" class="btn btn-primary float-end">Back</a>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{route('permissions.update', $permission)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <div class="col-3">
                                <label for="permiso" >Nombre Permiso</label>
                                <input type="text" class="form-control" name="name" placeholder="Ingrese el nombre" value="{{$permission->name}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-3">
                                <label for="guard_name" >Nombre Slug</label>
                                <input type="text" class="form-control" name="guard_name" placeholder="Ingrese el slug" value="{{$permission->guard_name}}" readonly required>
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