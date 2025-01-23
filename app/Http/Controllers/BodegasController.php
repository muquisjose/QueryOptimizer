<?php

namespace App\Http\Controllers;

use App\Models\Bodegas;
use App\Models\Bitacora;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BodegasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bodegas = Bodegas::all();
        return view('bodega.index', compact('bodegas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bodega.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $bodega = Bodegas::create($request->all());
        $bitacora = Bitacora::create([
            'user' => Auth::user()->id,
            'observacion' => Auth::user()->name.', '.'Modulo bodegas',
            'sql' => 'insert into bodegas values:'.$request->descripcion,
        ]);
        return redirect()->route('bodegas.index')->with('status', 'Bodega creada correctamente...!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(bodegas $bodegas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $bodega = Bodegas::find($id);
        return view('bodega.edit', compact('bodega'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $bodega = Bodegas::find($id);
        $bodega->update($request->all());
        $bitacora = Bitacora::create([
            'user' => Auth::user()->id,
            'observacion' => Auth::user()->name.', '.'Modulo bodegas',
            'sql' => 'update bodegas values:'.$request->descripcion,
        ]);
        return redirect()->route('bodegas.index')->with('status', 'Bodega actualizado crectamente...!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $bodega = Bodegas::find($id)->delete();
        return back()->with('status', 'bodega eliminado correctamente...!!!');
    }
}
