<?php

namespace App\Http\Controllers;
use App\Models\Bitacora;
use Illuminate\Support\Facades\Auth;
use App\Models\Preparas;
use Illuminate\Http\Request;

class PreparasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $preparas = Preparas::all();
        return view('prepara.index', compact('preparas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('prepara.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $prepara = Preparas::create($request->all());
        $bitacora = Bitacora::create([
            'user' => Auth::user()->id,
            'observacion' => Auth::user()->name.', '.'Modulo preparas',
            'sql' => 'insert into preparas values:'.$request->nombre,
        ]);
        return redirect()->route('preparas.index')->with('status', 'prepara creado correctamente...!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(preparas $preparas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $prepara = Preparas::find($id);
        return view('prepara.edit', compact('prepara'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $prepara = Preparas::find($id);
        $prepara->update($request->all());
        $bitacora = Bitacora::create([
            'user' => Auth::user()->id,
            'observacion' => Auth::user()->name.', '.'Modulo preparas',
            'sql' => 'update preparas values:'.$request->prepara,
        ]);
        return redirect()->route('preparas.index')->with('status', 'prepara actualizado crectamente...!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $prepara = Preparas::find($id)->delete();
        return back()->with('status', 'prepara eliminado correctamente...!!!');
    }
}
