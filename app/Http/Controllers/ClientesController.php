<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use App\Models\Bitacora;
use Illuminate\Support\Facades\Auth;
use App\Models\Proveedores;
use App\Models\Paises;
use App\Models\Precios;
use App\Models\Variedades;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Clientes::all();
        return view('cliente.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $proveedores = Proveedores::all();
        $paises = Paises::all();
        $users = DB::select('SELECT * FROM users LEFT JOIN model_has_roles ON users.id = model_has_roles.model_id WHERE model_has_roles.role_id = 4');
        $tar = Clientes::orderBy('tar', 'DESC')->first();
        if (isset($tar)) {
            $tar = $tar->tar+1;
            $tar = printf('%04d', $tar);
        } else {
            $tar = '0001';
        }
        return view('cliente.create', compact('proveedores','paises', 'users', 'tar'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (!isset($request->comentario)) {
            $request->comentario = 'Comentario'; 
        }
        $cliente = Clientes::create([
            'nombre' => $request->nombre,
            'zona' => $request->zona,
            'localiza' => $request->ciudad.','.$request->pais,
            'telefono1' => $request->telefono1,
            'direccion' => $request->direccion,
            'email' => $request->email,
            'contacto' => $request->contacto,
            'email_contacto' => $request->email_contacto,
            'id_prove' => $request->id_prove,
            'marcar' => $request->matriz_destino,
            'numerar' => $request->numerar,
            'tipo_caja' => 'QUITO',
            'categoria' => $request->categoria,
            'tar' => $request->tar,
            'alfa_client' => $request->alfa_client,
            'consigna' => $request->nombre,
            'activo' => $request->activo,
            'id_usu' => $request->id_usu,
            'dia_pago_1' => 0,
            'dia_pago_2' => 0,
            'dia_pago_3' => 0,
            'email_cartera' => $request->email_cartera,
            'mobil_p' => $request->mobil_p,
            'chat_p' => $request->chat_p,
            'compras1' => $request->compras1,
            'telefono_c1' => $request->telefono_c1,
            'mobil_c1' => $request->mobil_c1,
            'email_c1' => $request->email_c1,
            'chat_c1' => $request->chat_c1,
            'compras2' => $request->compras2,
            'telefono_c2' => $request->telefono_c2,
            'mobil_c2' => $request->mobil_c2,
            'email_c2' => $request->email_c2,
            'chat_c2' => $request->chat_c2,
            'compras3' => $request->compras3,
            'telefono_c3' => $request->telefono_c3,
            'mobil_c3' => $request->mobil_c3,
            'email_c3' => $request->email_c3,
            'chat_c3' => $request->chat_c3,
            'compras4' => $request->compras4,
            'telefono_c4' => $request->telefono_c4,
            'mobil_c4' => $request->mobil_c4,
            'email_c4' => $request->email_c4,
            'chat_c4' => $request->chat_c4,
            'pagos' => $request->pagos,
            'telefono_pg' => $request->telefono_pg,
            'mobil_pg' => $request->mobil_pg,
            'email_pg' => $request->email_pg,
            'chat_pg' => $request->chat_pg,
            'direccion_pg' => $request->direccion_pg,
            'referencia_com1' => $request->referencia_com1,
            'referencia_com2' => $request->referencia_com2,
            'referencia_com3' => $request->referencia_com3,
            'notas' => $request->notas,
            'notificar' => $request->notificar,
            'formapago' => $request->formapago,
            'matriz_destino' => $request->matriz_destino,
            'fechapago' => $request->fechapago,
            'comentario' => $request->comentario,
            'id_nif' => $request->id_nif,
        ]);
        $variedades = DB::select('SELECT DISTINCT id, codigo FROM variedades');
        $clientes = Clientes::orderBy('id', 'DESC')->first();
        foreach ($variedades as $variedad) {
            $precios = Precios::create([
                'id_cliente' => $clientes->id,
                'id_variedad' => $variedad->id,
                'cod_varie' => $variedad->codigo,
            ]);
        }
        $bitacora = Bitacora::create([
            'user' => Auth::user()->id,
            'observacion' => Auth::user()->name.', '.'Modulo clientes',
            'sql' => 'insert into clientes values:'.$request->nombre,
        ]);
        return redirect()->route('clientes.index')->with('status', 'Cliente creado correctamente...!!!');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storesub(Request $request)
    {
        if (!isset($request->comentario)) {
            $request->comentario = 'Comentario'; 
        }
        $cli = Clientes::find($request->id_cliente);
        $cliente = Clientes::create([
            'nombre' => $request->nombre,
            'zona' => $request->zona,
            'localiza' => $request->ciudad.','.$request->pais,
            'telefono1' => $request->telefono1,
            'direccion' => $request->direccion,
            'email' => $cli->email,
            'contacto' => $cli->contacto,
            'email_contacto' => $request->email_contacto,
            'id_prove' => $request->id_prove,
            'marcar' => '',
            'numerar' => $cli->numerar,
            'tipo_caja' => $cli->tipo_caja,
            'categoria' => $cli->categoria,
            'tar' => $cli->tar,
            'alfa_client' => $cli->alfa_client,
            'consigna' => $cli->nombre,
            'activo' => $request->activo,
            'id_usu' => $request->id_usu,
            'dia_pago_1' => 0,
            'dia_pago_2' => 0,
            'dia_pago_3' => 0,
            'email_cartera' => $cli->email_cartera,
            'mobil_p' => $cli->mobil_p,
            'chat_p' => $cli->chat_p,
            'compras1' => $cli->compras1,
            'telefono_c1' => $cli->telefono_c1,
            'mobil_c1' => $cli->mobil_c1,
            'email_c1' => $cli->email_c1,
            'chat_c1' => $cli->chat_c1,
            'compras2' => $cli->compras2,
            'telefono_c2' => $cli->telefono_c2,
            'mobil_c2' => $cli->mobil_c2,
            'email_c2' => $cli->email_c2,
            'chat_c2' => $cli->chat_c2,
            'compras3' => $cli->compras3,
            'telefono_c3' => $cli->telefono_c3,
            'mobil_c3' => $cli->mobil_c3,
            'email_c3' => $cli->email_c3,
            'chat_c3' => $cli->chat_c3,
            'compras4' => $cli->compras4,
            'telefono_c4' => $cli->telefono_c4,
            'mobil_c4' => $cli->mobil_c4,
            'email_c4' => $cli->email_c4,
            'chat_c4' => $cli->chat_c4,
            'pagos' => $cli->pagos,
            'telefono_pg' => $cli->telefono_pg,
            'mobil_pg' => $cli->mobil_pg,
            'email_pg' => $cli->email_pg,
            'chat_pg' => $cli->chat_pg,
            'direccion_pg' => $cli->direccion_pg,
            'referencia_com1' => $cli->referencia_com1,
            'referencia_com2' => $cli->referencia_com2,
            'referencia_com3' => $cli->referencia_com3,
            'notas' => $cli->notas,
            'notificar' => $cli->notificar,
            'formapago' => $cli->formapago,
            'matriz_destino' => $cli->matriz_destino,
            'fechapago' => $cli->fechapago,
            'comentario' => $cli->comentario,
            'id_nif' => $cli->id_nif,
        ]);
        $variedades = DB::select('SELECT DISTINCT id, codigo FROM variedades');
        $clientes = Clientes::orderBy('id', 'DESC')->first();
        foreach ($variedades as $variedad) {
            $precios = Precios::create([
                'id_cliente' => $clientes->id,
                'id_variedad' => $variedad->id,
                'cod_varie' => $variedad->codigo,
            ]);
        }
        $bitacora = Bitacora::create([
            'user' => Auth::user()->id,
            'observacion' => Auth::user()->name.', '.'Modulo clientes',
            'sql' => 'insert into clientes values:'.$request->nombre,
        ]);
        return redirect()->route('clientes.index')->with('status', 'Cliente creado correctamente...!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(clientes $clientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function createsub($id)
    {
        $proveedores = Proveedores::all();
        $paises = Paises::all();
        $users = DB::select('SELECT * FROM users LEFT JOIN model_has_roles ON users.id = model_has_roles.model_id WHERE model_has_roles.role_id = 4');
        $cliente = Clientes::find($id);
        return view('cliente.createsub', compact('cliente','proveedores','paises','users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $proveedores = Proveedores::all();
        $paises = Paises::all();
        $users = DB::select('SELECT * FROM users LEFT JOIN model_has_roles ON users.id = model_has_roles.model_id WHERE model_has_roles.role_id = 4');
        $cliente = Clientes::find($id);
        return view('cliente.edit', compact('cliente','proveedores','paises','users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, clientes $clientes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(clientes $clientes)
    {
        //
    }
}
