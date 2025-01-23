@extends('layouts.plantilla')
@section('title')
<title>AppNet | Bitacoras</title>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">DataTable Bitacoras</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="dtbBitacoras" class="table table-bordered table-striped dtbSystem">
                    <thead>
                    <tr>
                        <th>User ID</th>
                        <th>Observacion</th>
                        <th>Sql</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($bitacoras as $bitacora)
                        <tr>
                            <td>{{$bitacora->user}}</td>
                            <td>{{$bitacora->observacion}}</td>
                            <td>{{$bitacora->sql}}</td>
                            <td>{{$bitacora->created_at->Format('d-m-Y')}}</td>
                            <td>{{$bitacora->created_at->Format('H:m A')}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>User ID</th>
                        <th>Observacion</th>
                        <th>Sql</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                    </tr>
                    </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</div>
@endsection