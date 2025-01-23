<?php

namespace App\Http\Controllers;

use App\Models\Tipo_caja;
use App\Models\Bitacora;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TipoCajaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipocajas = Tipo_caja::all();
        return view('tipocaja.index', compact('tipocajas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tipocaja.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tipocaja = Tipo_caja::create($request->all());
        $bitacora = Bitacora::create([
            'user' => Auth::user()->id,
            'observacion' => Auth::user()->name.', '.'Modulo tipocajas',
            'sql' => 'insert into tipocajas values:'.$request->nombre,
        ]);
        return redirect()->route('tipocajas.index')->with('status', 'Tipo de caja creado correctamente...!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(tipocajas $tipocajas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $tipocaja = Tipo_caja::find($id);
        return view('tipocaja.edit', compact('tipocaja'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $tipocaja = Tipo_caja::find($id);
        $tipocaja->update($request->all());
        $bitacora = Bitacora::create([
            'user' => Auth::user()->id,
            'observacion' => Auth::user()->name.', '.'Modulo tipocajas',
            'sql' => 'update tipocajas values:'.$request->nombre,
        ]);
        return redirect()->route('tipocajas.index')->with('status', 'Tipo de caja actualizado crectamente...!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $tipocaja = Tipo_caja::find($id)->delete();
        return back()->with('status', 'Tipo de caja eliminado correctamente...!!!');
    }
}
