<?php

namespace App\Http\Controllers;

use App\Models\Estados;
use App\Models\Bitacora;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class EstadosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estados = Estados::all();
        return view('estado.index', compact('estados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('estado.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $estado = Estados::create($request->all());
        $bitacora = Bitacora::create([
            'user' => Auth::user()->id,
            'observacion' => Auth::user()->name.', '.'Modulo estados',
            'sql' => 'insert into estados values:'.$request->nombre,
        ]);
        return redirect()->route('estados.index')->with('status', 'Estado creado correctamente...!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(estados $estados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $estado = Estados::find($id);
        return view('estado.edit', compact('estado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $estado = Estados::find($id);
        $estado->update($request->all());
        $bitacora = Bitacora::create([
            'user' => Auth::user()->id,
            'observacion' => Auth::user()->name.', '.'Modulo estados',
            'sql' => 'update estados values:'.$request->nombre,
        ]);
        return redirect()->route('estados.index')->with('status', 'Estado actualizado crectamente...!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $estado = Estados::find($id)->delete();
        return back()->with('status', 'estado eliminado correctamente...!!!');
    }
}
