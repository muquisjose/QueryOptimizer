<?php

namespace App\Http\Controllers;

use App\Models\Paises;
use App\Models\Bitacora;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PaisesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paises = Paises::all();
        return view('pais.index', compact('paises'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pais.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pais = Paises::create($request->all());
        $bitacora = Bitacora::create([
            'user' => Auth::user()->id,
            'observacion' => Auth::user()->name.', '.'Modulo paises',
            'sql' => 'insert into paises values:'.$request->pais,
        ]);
        return redirect()->route('paises.index')->with('status', 'Pais creado correctamente...!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(paises $paises)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pais = Paises::find($id);
        return view('pais.edit', compact('pais'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $pais = Paises::find($id);
        $pais->update($request->all());
        $bitacora = Bitacora::create([
            'user' => Auth::user()->id,
            'observacion' => Auth::user()->name.', '.'Modulo paises',
            'sql' => 'update paises values:'.$request->pais,
        ]);
        return redirect()->route('paises.index')->with('status', 'Pais actualizado crectamente...!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pais = Paises::find($id)->delete();
        return back()->with('status', 'Pais eliminado correctamente...!!!');
    }
}
