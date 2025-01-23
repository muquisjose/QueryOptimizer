<?php

namespace App\Http\Controllers;

use App\Models\Longitudes;
use App\Models\Bitacora;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LongitudesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $longitudes = Longitudes::all();
        return view('longitud.index', compact('longitudes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('longitud.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $longitud = Longitudes::create($request->all());
        $bitacora = Bitacora::create([
            'user' => Auth::user()->id,
            'observacion' => Auth::user()->name.', '.'Modulo longitudes',
            'sql' => 'insert into longitudes values:'.$request->longitud,
        ]);
        return redirect()->route('longitudes.index')->with('status', 'Longitud creada correctamente...!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(longitudes $longitudes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $longitud = Longitudes::find($id);
        return view('longitud.edit', compact('longitud'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $longitud = Longitudes::find($id);
        $longitud->update($request->all());
        $bitacora = Bitacora::create([
            'user' => Auth::user()->id,
            'observacion' => Auth::user()->name.', '.'Modulo longitudes',
            'sql' => 'update longitudes values:'.$request->longitud,
        ]);
        return redirect()->route('longitudes.index')->with('status', 'Longitud actualizada crectamente...!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $longitud = Longitudes::find($id)->delete();
        return back()->with('status', 'Longitud eliminada correctamente...!!!');
    }
}
