@extends('layouts.plantilla')
@section('title')
<title>AppNet | Roles</title>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if(session('status'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-check"></i> Alert!</h5>
                    {{session('status')}}
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Agregar Permisos al rol 
                        <a href="" class="btn btn-primary float-end">Back</a>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{route('roles.updatepermission', $role)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            @error('permission')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                            <label>Permissions</label>
                            <div class="row">
                                @foreach ($permissions as $permission)
                                <div class="col-md-3">
                                    <label>
                                        <input type="checkbox" name="permission[]" value="{{$permission->name}}" {{in_array($permission->id, $rolePermissions) ? 'checked':''}}>
                                        {{$permission->name}}
                                    </label>
                                </div>
                                @endforeach
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