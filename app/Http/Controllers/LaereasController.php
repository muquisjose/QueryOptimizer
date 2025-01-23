<?php

namespace App\Http\Controllers;

use App\Models\Laereas;
use App\Models\Bitacora;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LaereasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $laereas = Laereas::all();
        return view('laerea.index', compact('laereas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('laerea.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $laerea = Laereas::create($request->all());
        $bitacora = Bitacora::create([
            'user' => Auth::user()->id,
            'observacion' => Auth::user()->name.', '.'Modulo laereas',
            'sql' => 'insert into laereas values:'.$request->nombre,
        ]);
        return redirect()->route('laereas.index')->with('status', 'Linea aerea creada correctamente...!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(laereas $laereas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $laerea = Laereas::find($id);
        return view('laerea.edit', compact('laerea'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $laerea = Laereas::find($id);
        $laerea->update($request->all());
        $bitacora = Bitacora::create([
            'user' => Auth::user()->id,
            'observacion' => Auth::user()->name.', '.'Modulo laereas',
            'sql' => 'update laereas values:'.$request->nombre,
        ]);
        return redirect()->route('laereas.index')->with('status', 'Linea aerea actualizada crectamente...!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $laerea = Laereas::find($id)->delete();
        return back()->with('status', 'Linea aerea eliminada correctamente...!!!');
    }
}
