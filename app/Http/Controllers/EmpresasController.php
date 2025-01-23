<?php

namespace App\Http\Controllers;

use App\Models\Empresas;
use App\Models\Bitacora;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class EmpresasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empresas = Empresas::all();
        return view('empresa.index', compact('empresas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('empresa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $empresa = Empresas::create($request->all());
        $bitacora = Bitacora::create([
            'user' => Auth::user()->id,
            'observacion' => Auth::user()->name.', '.'Modulo empresas',
            'sql' => 'insert into empresas values:'.$request->razon_social,
        ]);
        return redirect()->route('empresas.index')->with('status', 'Empresa creada correctamente...!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(empresas $empresas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $empresa = Empresas::find($id);
        return view('empresa.edit', compact('empresa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $empresa = Empresas::find($id);
        $empresa->update($request->all());
        $bitacora = Bitacora::create([
            'user' => Auth::user()->id,
            'observacion' => Auth::user()->name.', '.'Modulo empresas',
            'sql' => 'update empresas values:'.$request->nombre,
        ]);
        return redirect()->route('empresas.index')->with('status', 'Empresa actualizada crectamente...!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $empresa = empresas::find($id)->delete();
        return back()->with('status', 'Empresa eliminada correctamente...!!!');
    }
}
