<?php

namespace App\Http\Controllers;

use App\Models\Bunches;
use App\Models\Variedades;
use App\Models\Flores;
use App\Models\Bitacora;
use App\Classes\src\Codadry\JY\Epl\ExisteImpresoraWindows;
use App\Classes\src\Codadry\JY\Epl\ImprimirEpl;
use App\Models\TipoEmpaques;
use App\Models\Preparas;
use App\Models\Envolturas;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BunchesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bunches = Bunches::orderBy('id','desc')->get();
        return view('bunche.index', compact('bunches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $preparas = Preparas::select('id','nombre')->get();
        $variedades = Flores::select('id','variedad')->get();
        $empaques = TipoEmpaques::select('id','nombre')->get();
        $bunche = Bunches::orderBy('id', 'DESC')->first();
        return view('bunche.create', compact('variedades','empaques','preparas','bunche'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        for ($i=0; $i < $request->nbunche; $i++) { 
            $num_bunche = Bunches::orderBy('id', 'DESC')->first();
            $variedad = Variedades::where('id','=',$request->largo)->first();
            if (empty($num_bunche->num_bunch)) {
                $codBunche = "A000001";
            } else {
                $num = substr($num_bunche->num_bunch,1);
                $letra = substr($num_bunche->num_bunch, -7, -6);
                $nnum = $num+1;
                if ($nnum == 1000000) {
                    $nletra = ++$letra;
                    $codBunche = $nletra."000001";
                } else {
                    $new = str_pad($nnum, 6, "0", STR_PAD_LEFT);
                    $codBunche = $letra.$new;
                }
            }
            $bunche = Bunches::create([
                'num_bunch' => $codBunche,
                'cod_varie' => $variedad->codigo,
                'id_flor' => $variedad->flores->id,
                'num_tallos' => $request->num_tallos,
                'id_bodega' => $request->bodega,
                'fecha' => $request->fecha,
                'observa' => '',
                'num_pack' => 0,
                'cod_client' => '',
                'estado' => '',
                'caja' => 0,
                'subcliente' => '',
                'precio' => 0,
                'transformado' => 'NO',
                'PC' => '',
                'categoria' => '',
                'storder' => 0,
                'nacional' => '',
                'id_caja' => 1,
                'precio_tr' => 0,
                'id_prepara' => $request->id_prepara,
                'finca' => 0,
                'empaque' => $request->empaque,
            ]);
            $bitacora = Bitacora::create([
                'user' => Auth::user()->id,
                'observacion' => Auth::user()->name.', '.'Modulo bunches',
                'sql' => 'insert into bunches values:'.$codBunche,
            ]);
            $varName = explode(" ", $variedad->nombre);
            $num_bunche = Bunches::orderBy('id', 'DESC')->first();
            ////////
            /*Imprimir Etiquetas*//*
            $existeImoresora = new ExisteImpresoraWindows();
            $elp = new ImprimirEpl();
            $impresora = 'ZDesigner LP 2844';
            $texto1 = $varName[0];
            $texto2 = $varName[1]."/".$varName[2];
            $texto3 = $num_bunche->num_bunch;
            $texto4 = "T/B ".$request->num_tallos;
            if ($existeImoresora->verificarImpresora($impresora, true)) {
                $etiqueta = $elp->escribirTexto($texto1, 10, 5, 2, false, 0, 2, 2);
                $etiqueta .= $elp->escribirTexto($texto2, 260, 5, 2, false, 0, 2, 2);
                $etiqueta .= $elp->pintarCodigoBarra($texto3, 20, 50, 70, 1, true, 0, 3, 7);
                $etiqueta .= $elp->escribirTexto($texto4, 300, 60, 2, false, 0, 2, 2);
                $elp->imprimir($elp->construirEtiqueta($etiqueta,1),$impresora, true, false);
            }
            //Terminar impresion Bunche*/
        }
        return redirect()->route('bunches.create')->with('status', 'bunche creado correctamente...!!!');  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function getLargo(Request $request)
    {
        $largos = DB::select('SELECT id, MID(codigo,4,5) as largo FROM variedades WHERE id_flor = '.$request->id);
        $datos = [$largos];
        return response()->json($datos);
    }

    /**
     * Display the specified resource.
     */
    public function show(bunches $bunches)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $bunche = Bunches::find($id);
        $preparas = Preparas::select('id','nombre')->get();
        $variedades = Flores::select('id','codigo','variedad')->get();
        $var = Flores::where('codigo','=',substr($bunche->cod_varie, 0, 3))->first();
        $largos = DB::select('SELECT id, MID(codigo,4,5) as largo FROM variedades WHERE id_flor ='.$var->id);
        $empaques = TipoEmpaques::select('id','nombre')->get();
        $envolturas = Envolturas::select('id','descripcion')->get();
        return view('bunche.edit', compact('bunche','preparas','variedades','empaques','largos','envolturas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $bunche = Bunches::find($id);
        $bunche->update($request->all());
        $bitacora = Bitacora::create([
            'user' => Auth::user()->id,
            'observacion' => Auth::user()->name.', '.'Modulo bunches',
            'sql' => 'update bunches values:'.$request->bunche,
        ]);
        return redirect()->route('bunches.index')->with('status', 'bunche actualizado crectamente...!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $bunche = Bunches::find($id)->delete();
        return back()->with('status', 'bunche eliminado correctamente...!!!');
    }
}
