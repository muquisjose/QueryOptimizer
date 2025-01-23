<?php

namespace App\Http\Controllers;

use App\Models\Colores;
use App\Models\Bitacora;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ColoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $colores = Colores::all();
        return view('color.index', compact('colores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('color.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $color = Colores::create($request->all());
        $bitacora = Bitacora::create([
            'user' => Auth::user()->id,
            'observacion' => Auth::user()->name.', '.'Modulo colores',
            'sql' => 'insert into colores values:'.$request->nombre,
        ]);
        return redirect()->route('colores.index')->with('status', 'Color creado correctamente...!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Colores $colores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $color = Colores::find($id);
        return view('color.edit', compact('color'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $color = Colores::find($id);
        $color->update($request->all());
        $bitacora = Bitacora::create([
            'user' => Auth::user()->id,
            'observacion' => Auth::user()->name.', '.'Modulo colores',
            'sql' => 'update colores values:'.$request->nombre,
        ]);
        return redirect()->route('colores.index')->with('status', 'Color actualizado crectamente...!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $color = Colores::find($id)->delete();
        return back()->with('status', 'Color eliminado correctamente...!!!');
    }
}
