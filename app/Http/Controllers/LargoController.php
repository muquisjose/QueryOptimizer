<?php

namespace App\Http\Controllers;

use App\Models\Largo;
use App\Models\Bitacora;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LargoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $largos = Largo::all();
        return view('largo.index', compact('largos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('largo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $largo = Largo::create($request->all());
        $bitacora = Bitacora::create([
            'user' => Auth::user()->id,
            'observacion' => Auth::user()->name.', '.'Modulo largos',
            'sql' => 'insert into largos values:'.$request->longitud,
        ]);
        return redirect()->route('largos.index')->with('status', 'largo creado correctamente...!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(largos $largos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $largo = Largo::find($id);
        return view('largo.edit', compact('largo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $largo = Largo::find($id);
        $largo->update($request->all());
        $bitacora = Bitacora::create([
            'user' => Auth::user()->id,
            'observacion' => Auth::user()->name.', '.'Modulo largos',
            'sql' => 'update largos values:'.$request->longitud,
        ]);
        return redirect()->route('largos.index')->with('status', 'largo actualizado crectamente...!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $largo = Largo::find($id)->delete();
        return back()->with('status', 'largo eliminado correctamente...!!!');
    }
}
