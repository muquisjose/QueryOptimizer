<?php

namespace App\Http\Controllers;

use App\Models\Flores;
use App\Models\Variedades;
use App\Models\Bitacora;
use App\Models\Precios;
use App\Models\Clientes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FloresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $flores = Flores::all();
        return view('flor.index', compact('flores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('flor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $flor = Flores::create([
            'codigo' => $request->codigo,
            'variedad' => $request->variedad,
            'color' => $request->color,
            'activa' => $request->activa,
            'novedad' => $request->novedad,
            'descripcion' => $request->descripcion,
            'tallos_malla' => $request->tallos_malla,
            'ciclo' => $request->ciclo,
        ]);
        $flor = Flores::orderBy('id', 'DESC')->first();
        foreach ($request->largo as $lar) {
            $variedades = Variedades::create([
                'codigo' => $request->codigo.$lar,
                'nombre' => $request->variedad.' '.$lar.' CMS',
                'id_flor' => $flor->id,
            ]);
        }
        $variedades = Variedades::where('id_flor','=',$flor->id)->get();
        $clientes = Clientes::get('id');
        foreach ($clientes as $cliente) {
            foreach ($variedades as $variedad) {
                $precios = Precios::create([
                    'id_cliente' => $cliente->id,
                    'id_variedad' => $variedad->id,
                    'cod_varie' => $variedad->codigo,
                ]);
            }    
        }
        $bitacora = Bitacora::create([
            'user' => Auth::user()->id,
            'observacion' => Auth::user()->name.', '.'Modulo flores',
            'sql' => 'insert into flores values:'.$request->variedad,
        ]);
        return redirect()->route('flores.index')->with('status', 'Flor creada correctamente...!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(flores $flores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $flor = Flores::find($id);
        return view('flor.edit', compact('flor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $flor = Flores::find($id);
        $flor->update($request->all());
        $bitacora = Bitacora::create([
            'user' => Auth::user()->id,
            'observacion' => Auth::user()->name.', '.'Modulo flores',
            'sql' => 'update flores values:'.$request->variedad,
        ]);
        return redirect()->route('flores.index')->with('status', 'Flor actualizada crectamente...!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $flor = Flores::find($id)->delete();
        return back()->with('status', 'Flor eliminada correctamente...!!!');
    }
}
