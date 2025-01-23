<?php

namespace App\Http\Controllers;

use App\Models\Agencia;
use App\Models\Bitacora;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AgenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agencias = Agencia::all();
        return view('agencia.index', compact('agencias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('agencia.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $agencia = Agencia::create($request->all());
        $bitacora = Bitacora::create([
            'user' => Auth::user()->id,
            'observacion' => Auth::user()->name.', '.'Modulo Agencias',
            'sql' => 'insert values:'.$request->nombre.' '.$request->ruc,
        ]);
        return redirect()->route('agencias.index')->with('status', 'Agencia creada correctamente...!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Agencia $agencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $agencia = Agencia::find($id);
        return view('agencia.edit', compact('agencia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $agencia = Agencia::find($id);
        $agencia->update($request->all());
        $bitacora = Bitacora::create([
            'user' => Auth::user()->id,
            'observacion' => Auth::user()->name.', '.'Modulo Agencias',
            'sql' => 'update values:'.$request->nombre.' '.$request->ruc,
        ]);
        return redirect()->route('agencias.index')->with('status', 'Agencia actualizada correctamente...!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $agencia = Agencia::find($id)->delete();
        return back()->with('status', 'Agencia eliminada correctamente...!!!');
    }
}
