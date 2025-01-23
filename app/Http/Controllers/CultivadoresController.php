<?php

namespace App\Http\Controllers;

use App\Models\Cultivadores;
use App\Models\Bitacora;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CultivadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cultivadores = Cultivadores::all();
        return view('cultivador.index', compact('cultivadores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cultivador.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cultivador = Cultivadores::create($request->all());
        $bitacora = Bitacora::create([
            'user' => Auth::user()->id,
            'observacion' => Auth::user()->name.', '.'Modulo cultivadores',
            'sql' => 'insert into cultivadores values:'.$request->nombre,
        ]);
        return redirect()->route('cultivadores.index')->with('status', 'Cultivador creado correctamente...!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cultivadores $cultivadores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cultivador = Cultivadores::find($id);
        return view('cultivador.edit', compact('cultivador'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $cultivador = Cultivadores::find($id);
        $cultivador->update($request->all());
        $bitacora = Bitacora::create([
            'user' => Auth::user()->id,
            'observacion' => Auth::user()->name.', '.'Modulo cultivadores',
            'sql' => 'update cultivadores values:'.$request->nombre,
        ]);
        return redirect()->route('cultivadores.index')->with('status', 'Cultivador actualizado crectamente...!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cultivador = Cultivadores::find($id)->delete();
        return back()->with('status', 'Cultivador eliminado correctamente...!!!');
    }
}
