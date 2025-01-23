<?php

namespace App\Http\Controllers;

use App\Models\Precios;
use App\Models\Bitacora;
use Illuminate\Support\Facades\Auth;
use App\Models\Clientes;
use App\Models\Variedades;
use Illuminate\Http\Request;

class PreciosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Clientes::all(['id','nombre']);
        $precios = Precios::all();
        return view('precio.index', compact('precios','clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = Clientes::select('id','nombre')->get();
        return view('precio.create', compact('clientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $precioBegins = Precios::where('id_cliente','=',$request->begin)->get();
        $precioEndto = Precios::where('id_cliente','=',$request->endTo)->delete();
        foreach ($precioBegins as $precio) {
            $precios = Precios::create([
                'id_cliente' => $request->endTo,
                'id_variedad' => $precio->id_variedad,
                'cod_varie' => $precio->cod_varie,
                'alta' => $precio->alta,
                'normal' => $precio->normal,
                'baja' => $precio->baja,
            ]);
        }
        $bitacora = Bitacora::create([
            'user' => Auth::user()->id,
            'observacion' => Auth::user()->name.', '.'Modulo precios',
            'sql' => 'Copia de precios de:'.$request->begin.' a '.$request->endTo,
        ]);
        return redirect()->route('precios.index')->with('status', 'precio copiado correctamente...!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(precios $precios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $precios = Precios::where('id_cliente','=',$id)->get();
        return view('precio.edit', compact('precios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        for ($i=0; $i < count($request->id); $i++) { 
            $precio = Precios::find($request->id[$i]);
            $precio->update([
                'alta' => $request->alta[$i],
                'normal' => $request->normal[$i],
                'baja' => $request->baja[$i],
            ]);
        }
        
        return redirect()->route('precios.index')->with('status', 'precio actualizado crectamente...!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $precio = Precios::find($id)->delete();
        return back()->with('status', 'precio eliminado correctamente...!!!');
    }
}
