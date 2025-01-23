@extends('layouts.plantilla')
@section('title')
<title>AppNet | Users</title>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Editar Usuario
                        <a href="" class="btn btn-primary float-end">Back</a>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{route('users.update', $user->id)}}" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="user" >Nombre Usuario</label>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" name="name" placeholder="Ingrese el nombre" value="{{$user->name}}" required>
                                @error('name')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="role" >Email Usuario</label>
                            </div>
                            <div class="col-3">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input type="email" class="form-control" placeholder="Email" name="email" required value="{{$user->email}}" readonly>
                                    @error('name')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="passwordd" >Password</label>
                            </div>
                            <div class="col-3">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                                @error('password')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="role" >Roles</label>
                            </div>
                            <div class="col-3">
                                <select class="select2" multiple="multiple" data-placeholder="Seleccione..." style="width: 100%;" name="roles[]">
                                    <option value="">Seleccione</option>
                                    @foreach ($roles as $role)
                                        <option value="{{$role}}" {{ in_array($role, $userRoles) ? 'selected':''}}>{{$role}}</option>
                                    @endforeach
                                </select>
                                @error('roles')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
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