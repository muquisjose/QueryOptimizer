<?php

namespace App\Http\Controllers;

use App\Models\Mot_credito;
use App\Models\Bitacora;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MotCreditoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $motcreditos = Mot_credito::all();
        return view('motcredito.index', compact('motcreditos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('motcredito.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $motcredito = Mot_credito::create($request->all());
        $bitacora = Bitacora::create([
            'user' => Auth::user()->id,
            'observacion' => Auth::user()->name.', '.'Modulo motcreditos',
            'sql' => 'insert into motcreditos values:'.$request->detalle,
        ]);
        return redirect()->route('motcreditos.index')->with('status', 'Motivo credito creado correctamente...!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(motcreditos $motcreditos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $motcredito = Mot_credito::find($id);
        return view('motcredito.edit', compact('motcredito'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $motcredito = Mot_credito::find($id);
        $motcredito->update($request->all());
        $bitacora = Bitacora::create([
            'user' => Auth::user()->id,
            'observacion' => Auth::user()->name.', '.'Modulo motcreditos',
            'sql' => 'update motcreditos values:'.$request->detalle,
        ]);
        return redirect()->route('motcreditos.index')->with('status', 'Motivo credito actualizado crectamente...!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $motcredito = Mot_credito::find($id)->delete();
        return back()->with('status', 'Motivo credito eliminado correctamente...!!!');
    }
}
