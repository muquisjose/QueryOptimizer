<?php

namespace App\Http\Controllers;

use App\Models\Fincas;
use App\Models\Bitacora;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FincasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fincas = Fincas::all();
        return view('finca.index', compact('fincas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('finca.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $finca = Fincas::create($request->all());
        $bitacora = Bitacora::create([
            'user' => Auth::user()->id,
            'observacion' => Auth::user()->name.', '.'Modulo fincas',
            'sql' => 'insert into fincas values:'.$request->nombre,
        ]);
        return redirect()->route('fincas.index')->with('status', 'Finca creada correctamente...!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(fincas $fincas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $finca = Fincas::find($id);
        return view('finca.edit', compact('finca'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $finca = Fincas::find($id);
        $finca->update($request->all());
        $bitacora = Bitacora::create([
            'user' => Auth::user()->id,
            'observacion' => Auth::user()->name.', '.'Modulo fincas',
            'sql' => 'update fincas values:'.$request->nombre,
        ]);
        return redirect()->route('fincas.index')->with('status', 'Finca actualizada crectamente...!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $finca = Fincas::find($id)->delete();
        return back()->with('status', 'Finca eliminada correctamente...!!!');
    }
}
