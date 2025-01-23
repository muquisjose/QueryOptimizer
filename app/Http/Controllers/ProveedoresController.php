<?php

namespace App\Http\Controllers;

use App\Models\Proveedores;
use App\Models\Bitacora;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proveedores = Proveedores::all();
        return view('proveedor.index', compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proveedor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $proveedor = Proveedores::create($request->all());
        $bitacora = Bitacora::create([
            'user' => Auth::user()->id,
            'observacion' => Auth::user()->name.', '.'Modulo proveedores',
            'sql' => 'insert into proveedores values:'.$request->nombre,
        ]);
        return redirect()->route('proveedores.index')->with('status', 'Proveedor creado correctamente...!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(proveedores $proveedores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $proveedor = Proveedores::find($id);
        return view('proveedor.edit', compact('proveedor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $proveedor = Proveedores::find($id);
        $proveedor->update($request->all());
        $bitacora = Bitacora::create([
            'user' => Auth::user()->id,
            'observacion' => Auth::user()->name.', '.'Modulo proveedores',
            'sql' => 'update proveedores values:'.$request->nombre,
        ]);
        return redirect()->route('proveedores.index')->with('status', 'Proveedor actualizado crectamente...!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $proveedor = Proveedores::find($id)->delete();
        return back()->with('status', 'Proveedor eliminado correctamente...!!!');
    }
}
