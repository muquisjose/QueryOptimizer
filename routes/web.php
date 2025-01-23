<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AgenciaController;
use App\Http\Controllers\BitacoraController;
use App\Http\Controllers\ColoresController;
use App\Http\Controllers\CultivadoresController;
use App\Http\Controllers\EmpresasController;
use App\Http\Controllers\BodegasController;
use App\Http\Controllers\EstadosController;
use App\Http\Controllers\FincasController;
use App\Http\Controllers\FloresController;
use App\Http\Controllers\LaereasController;
use App\Http\Controllers\LargoController;
use App\Http\Controllers\LongitudesController;
use App\Http\Controllers\MotcreditoController;
use App\Http\Controllers\PaisesController;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\TipocajaController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\PreciosController;
use App\Http\Controllers\PreparasController;
use App\Http\Controllers\BunchesController;
use App\Http\Controllers\PrepackingController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Todas las rutas usar con url(name/create...)
//Route::resource('permissions', App\Controllers\PermissionController::class);

Route::group(['middleware' => ['role:super-admin|admin']], function(){
    //Permissions
    Route::get('/permissions',[PermissionController::class, 'index'])->name('permissions.index');
    Route::get('/permissions/create',[PermissionController::class, 'create'])->name('permissions.create');
    Route::post('/permissions/store',[PermissionController::class, 'store'])->name('permissions.store');
    Route::get('/permissions/{id}/edit',[PermissionController::class, 'edit'])->name('permissions.edit');
    Route::put('/permissions/{id}',[PermissionController::class, 'update'])->name('permissions.update');
    Route::delete('/permissions/{id}',[PermissionController::class, 'destroy'])->name('permissions.destroy');

    //Roles
    Route::get('/roles',[RoleController::class, 'index'])->name('roles.index');
    Route::get('/roles/create',[RoleController::class, 'create'])->name('roles.create');
    Route::post('/roles/store',[RoleController::class, 'store'])->name('roles.store');
    Route::get('/roles/{id}/edit',[RoleController::class, 'edit'])->name('roles.edit');
    Route::put('/roles/{id}',[RoleController::class, 'update'])->name('roles.update');
    Route::delete('/roles/{id}',[RoleController::class, 'destroy'])->name('roles.destroy');
    Route::get('/roles/{id}/addpermission', [RoleController::class, 'addpermission'])->name('roles.addpermission');
    Route::put('/roles/uppermission/{id}',[RoleController::class, 'updatepermission'])->name('roles.updatepermission');

    //Users

    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create',[UserController::class, 'create'])->name('users.create');
    Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

    //Agencias
    Route::get('/agencias', [AgenciaController::class, 'index'])->name('agencias.index');
    Route::get('/agencias/create',[AgenciaController::class, 'create'])->name('agencias.create');
    Route::post('/agencias/store', [AgenciaController::class, 'store'])->name('agencias.store');
    Route::get('/agencias/{id}/edit', [AgenciaController::class, 'edit'])->name('agencias.edit');
    Route::put('/agencias/{id}', [AgenciaController::class, 'update'])->name('agencias.update');
    Route::delete('/agencias/{id}', [AgenciaController::class, 'destroy'])->name('agencias.destroy');

    //Bitacoras
    Route::get('/bitacoras', [BitacoraController::class, 'index'])->name('bitacoras.index');
    
    //Colores
    Route::get('/colores', [ColoresController::class, 'index'])->name('colores.index');
    Route::get('/colores/create',[ColoresController::class, 'create'])->name('colores.create');
    Route::post('/colores/store', [ColoresController::class, 'store'])->name('colores.store');
    Route::get('/colores/{id}/edit', [ColoresController::class, 'edit'])->name('colores.edit');
    Route::put('/colores/{id}', [ColoresController::class, 'update'])->name('colores.update');
    Route::delete('/colores/{id}', [ColoresController::class, 'destroy'])->name('colores.destroy');

    //Cultivadores
    Route::get('/cultivadores', [CultivadoresController::class, 'index'])->name('cultivadores.index');
    Route::get('/cultivadores/create',[CultivadoresController::class, 'create'])->name('cultivadores.create');
    Route::post('/cultivadores/store', [CultivadoresController::class, 'store'])->name('cultivadores.store');
    Route::get('/cultivadores/{id}/edit', [CultivadoresController::class, 'edit'])->name('cultivadores.edit');
    Route::put('/cultivadores/{id}', [CultivadoresController::class, 'update'])->name('cultivadores.update');
    Route::delete('/cultivadores/{id}', [CultivadoresController::class, 'destroy'])->name('cultivadores.destroy');

    //Empresas
    Route::get('/empresas', [EmpresasController::class, 'index'])->name('empresas.index');
    Route::get('/empresas/create',[EmpresasController::class, 'create'])->name('empresas.create');
    Route::post('/empresas/store', [EmpresasController::class, 'store'])->name('empresas.store');
    Route::get('/empresas/{id}/edit', [EmpresasController::class, 'edit'])->name('empresas.edit');
    Route::put('/empresas/{id}', [EmpresasController::class, 'update'])->name('empresas.update');
    Route::delete('/empresas/{id}', [EmpresasController::class, 'destroy'])->name('empresas.destroy');

    //Bodegas
    Route::get('/bodegas', [BodegasController::class, 'index'])->name('bodegas.index');
    Route::get('/bodegas/create',[BodegasController::class, 'create'])->name('bodegas.create');
    Route::post('/bodegas/store', [BodegasController::class, 'store'])->name('bodegas.store');
    Route::get('/bodegas/{id}/edit', [BodegasController::class, 'edit'])->name('bodegas.edit');
    Route::put('/bodegas/{id}', [BodegasController::class, 'update'])->name('bodegas.update');
    Route::delete('/bodegas/{id}', [BodegasController::class, 'destroy'])->name('bodegas.destroy');

    //Estados
    Route::get('/estados', [EstadosController::class, 'index'])->name('estados.index');
    Route::get('/estados/create',[EstadosController::class, 'create'])->name('estados.create');
    Route::post('/estados/store', [EstadosController::class, 'store'])->name('estados.store');
    Route::get('/estados/{id}/edit', [EstadosController::class, 'edit'])->name('estados.edit');
    Route::put('/estados/{id}', [EstadosController::class, 'update'])->name('estados.update');
    Route::delete('/estados/{id}', [EstadosController::class, 'destroy'])->name('estados.destroy');

    //Fincas
    Route::get('/fincas', [FincasController::class, 'index'])->name('fincas.index');
    Route::get('/fincas/create',[FincasController::class, 'create'])->name('fincas.create');
    Route::post('/fincas/store', [FincasController::class, 'store'])->name('fincas.store');
    Route::get('/fincas/{id}/edit', [FincasController::class, 'edit'])->name('fincas.edit');
    Route::put('/fincas/{id}', [FincasController::class, 'update'])->name('fincas.update');
    Route::delete('/fincas/{id}', [FincasController::class, 'destroy'])->name('fincas.destroy');

    // Flores
    Route::get('/flores', [FloresController::class, 'index'])->name('flores.index');
    Route::get('/flores/create',[FloresController::class, 'create'])->name('flores.create');
    Route::post('/flores/store', [FloresController::class, 'store'])->name('flores.store');
    Route::get('/flores/{id}/edit', [FloresController::class, 'edit'])->name('flores.edit');
    Route::put('/flores/{id}', [FloresController::class, 'update'])->name('flores.update');
    Route::delete('/flores/{id}', [FloresController::class, 'destroy'])->name('flores.destroy');

    //Lineas aereas
    Route::get('/laereas', [LaereasController::class, 'index'])->name('laereas.index');
    Route::get('/laereas/create',[LaereasController::class, 'create'])->name('laereas.create');
    Route::post('/laereas/store', [LaereasController::class, 'store'])->name('laereas.store');
    Route::get('/laereas/{id}/edit', [LaereasController::class, 'edit'])->name('laereas.edit');
    Route::put('/laereas/{id}', [LaereasController::class, 'update'])->name('laereas.update');
    Route::delete('/laereas/{id}', [LaereasController::class, 'destroy'])->name('laereas.destroy');

    //Largos
    Route::get('/largos', [LargoController::class, 'index'])->name('largos.index');
    Route::get('/largos/create',[LargoController::class, 'create'])->name('largos.create');
    Route::post('/largos/store', [LargoController::class, 'store'])->name('largos.store');
    Route::get('/largos/{id}/edit', [LargoController::class, 'edit'])->name('largos.edit');
    Route::put('/largos/{id}', [LargoController::class, 'update'])->name('largos.update');
    Route::delete('/largos/{id}', [LargoController::class, 'destroy'])->name('largos.destroy');

    //Longitudes
    Route::get('/longitudes', [LongitudesController::class, 'index'])->name('longitudes.index');
    Route::get('/longitudes/create',[LongitudesController::class, 'create'])->name('longitudes.create');
    Route::post('/longitudes/store', [LongitudesController::class, 'store'])->name('longitudes.store');
    Route::get('/longitudes/{id}/edit', [LongitudesController::class, 'edit'])->name('longitudes.edit');
    Route::put('/longitudes/{id}', [LongitudesController::class, 'update'])->name('longitudes.update');
    Route::delete('/longitudes/{id}', [LongitudesController::class, 'destroy'])->name('longitudes.destroy');

    //Motivo Credito
    Route::get('/motcreditos', [MotCreditoController::class, 'index'])->name('motcreditos.index');
    Route::get('/motcreditos/create',[MotCreditoController::class, 'create'])->name('motcreditos.create');
    Route::post('/motcreditos/store', [MotCreditoController::class, 'store'])->name('motcreditos.store');
    Route::get('/motcreditos/{id}/edit', [MotCreditoController::class, 'edit'])->name('motcreditos.edit');
    Route::put('/motcreditos/{id}', [MotCreditoController::class, 'update'])->name('motcreditos.update');
    Route::delete('/motcreditos/{id}', [MotCreditoController::class, 'destroy'])->name('motcreditos.destroy');

    //Paises
    Route::get('/paises', [PaisesController::class, 'index'])->name('paises.index');
    Route::get('/paises/create',[PaisesController::class, 'create'])->name('paises.create');
    Route::post('/paises/store', [PaisesController::class, 'store'])->name('paises.store');
    Route::get('/paises/{id}/edit', [PaisesController::class, 'edit'])->name('paises.edit');
    Route::put('/paises/{id}', [PaisesController::class, 'update'])->name('paises.update');
    Route::delete('/paises/{id}', [PaisesController::class, 'destroy'])->name('paises.destroy');

    //Proveedores
    Route::get('/Proveedores', [ProveedoresController::class, 'index'])->name('proveedores.index');
    Route::get('/Proveedores/create',[ProveedoresController::class, 'create'])->name('proveedores.create');
    Route::post('/Proveedores/store', [ProveedoresController::class, 'store'])->name('proveedores.store');
    Route::get('/Proveedores/{id}/edit', [ProveedoresController::class, 'edit'])->name('proveedores.edit');
    Route::put('/Proveedores/{id}', [ProveedoresController::class, 'update'])->name('proveedores.update');
    Route::delete('/Proveedores/{id}', [ProveedoresController::class, 'destroy'])->name('proveedores.destroy');

    //Tipo de caja
    Route::get('/tipocaja', [TipocajaController::class, 'index'])->name('tipocajas.index');
    Route::get('/tipocaja/create',[TipocajaController::class, 'create'])->name('tipocajas.create');
    Route::post('/tipocaja/store', [TipocajaController::class, 'store'])->name('tipocajas.store');
    Route::get('/tipocaja/{id}/edit', [TipocajaController::class, 'edit'])->name('tipocajas.edit');
    Route::put('/tipocaja/{id}', [TipocajaController::class, 'update'])->name('tipocajas.update');
    Route::delete('/tipocaja/{id}', [TipocajaController::class, 'destroy'])->name('tipocajas.destroy');

    //Variedades
    Route::get('/variedades', [VariedadesController::class, 'index'])->name('variedades.index');
    Route::get('/variedades/create',[VariedadesController::class, 'create'])->name('variedades.create');
    Route::post('/variedades/store', [VariedadesController::class, 'store'])->name('variedades.store');
    Route::get('/variedades/{id}/edit', [VariedadesController::class, 'edit'])->name('variedades.edit');
    Route::put('/variedades/{id}', [VariedadesController::class, 'update'])->name('variedades.update');
    Route::delete('/variedades/{id}', [VariedadesController::class, 'destroy'])->name('variedades.destroy');

    //Clientes
    Route::get('/clientes', [ClientesController::class, 'index'])->name('clientes.index');
    Route::get('/clientes/create',[ClientesController::class, 'create'])->name('clientes.create');
    Route::post('/clientes/store', [ClientesController::class, 'store'])->name('clientes.store');
    Route::get('/clientes/{id}/edit', [ClientesController::class, 'edit'])->name('clientes.edit');
    Route::get('/clientes/{id}/createsub', [ClientesController::class, 'createsub'])->name('clientes.createsub');
    Route::post('/clientes/storesub', [ClientesController::class, 'storesub'])->name('clientes.storesub');
    Route::put('/clientes/{id}', [ClientesController::class, 'update'])->name('clientes.update');
    Route::delete('/clientes/{id}', [ClientesController::class, 'destroy'])->name('clientes.destroy');

    //Precios
    Route::get('/precios', [PreciosController::class, 'index'])->name('precios.index');
    Route::get('/precios/create',[PreciosController::class, 'create'])->name('precios.create');
    Route::post('/precios/store', [PreciosController::class, 'store'])->name('precios.store');
    Route::get('/precios/{id}/edit', [PreciosController::class, 'edit'])->name('precios.edit');
    Route::post('/precios/update', [PreciosController::class, 'update'])->name('precios.update');
    Route::delete('/precios/{id}', [PreciosController::class, 'destroy'])->name('precios.destroy');

    //Preparas
    Route::get('/preparas', [PreparasController::class, 'index'])->name('preparas.index');
    Route::get('/preparas/create',[PreparasController::class, 'create'])->name('preparas.create');
    Route::post('/preparas/store', [PreparasController::class, 'store'])->name('preparas.store');
    Route::get('/preparas/{id}/edit', [PreparasController::class, 'edit'])->name('preparas.edit');
    Route::put('/preparas/{id}', [PreparasController::class, 'update'])->name('preparas.update');
    Route::delete('/preparas/{id}', [PreparasController::class, 'destroy'])->name('preparas.destroy');

    //Bunches
    Route::get('/bunches', [BunchesController::class, 'index'])->name('bunches.index');
    Route::get('/bunches/create',[BunchesController::class, 'create'])->name('bunches.create');
    Route::post('/bunches/store', [BunchesController::class, 'store'])->name('bunches.store');
    Route::post('/bunches/getLargo', [BunchesController::class, 'getLargo'])->name('bunches.getLargo');
    Route::get('/bunches/{id}/edit', [BunchesController::class, 'edit'])->name('bunches.edit');
    Route::put('/bunches/{id}', [BunchesController::class, 'update'])->name('bunches.update');
    Route::delete('/bunches/{id}', [BunchesController::class, 'destroy'])->name('bunches.destroy');

    //Prepacking
    Route::get('/prepackings', [PrepackingController::class, 'index'])->name('prepackings.index');
    Route::get('/prepackings/create',[PrepackingController::class, 'create'])->name('prepackings.create');
    Route::post('/prepackings/store', [PrepackingController::class, 'store'])->name('prepackings.store');
    Route::post('/prepackings/getCliente', [PrepackingController::class, 'getCliente'])->name('prepackings.getCliente');
    Route::post('/prepackings/getDisponibilidad', [PrepackingController::class, 'getDisponibilidad'])->name('prepackings.getDisponibilidad');
    Route::post('/prepackings/getVariedad', [PrepackingController::class, 'getVariedad'])->name('prepackings.getVariedad');
    Route::get('/prepackings/{id}/edit', [PrepackingController::class, 'edit'])->name('prepackings.edit');
    Route::put('/prepackings/{id}', [PrepackingController::class, 'update'])->name('prepackings.update');
    Route::delete('/prepackings/{id}', [PrepackingController::class, 'destroy'])->name('prepackings.destroy');
});