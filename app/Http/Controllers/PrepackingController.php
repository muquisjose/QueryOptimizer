<?php

namespace App\Http\Controllers;

use App\Models\Prepacking;
use App\Models\Clientes;
use App\Models\Bodegas;
use App\Models\TipoEmpaques;
use App\Models\Bunches;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PrepackingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prepackings = Prepacking::orderBy('id', 'desc')->get();
        return view('venta.index', compact('prepackings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fechahoy = date("Y-m-d");
        $fecha = strtotime('-5 day', strtotime($fechahoy));
        $fecha = date('Y-m-d', $fecha);
        $bunches = DB::select("
            SELECT f.variedad as variedad, COUNT(b.num_tallos) as tallos
            FROM bunches AS b INNER JOIN flores AS f ON b.id_flor = f.id 
            WHERE estado = '' AND b.fecha >= '".$fecha."'
            GROUP BY 1
        ");
        $clientes = DB::select('SELECT nombre FROM clientes WHERE nombre = consigna');
        $bodegas = Bodegas::all();
        $empaques = TipoEmpaques::all();
        $tallos = DB::select('SELECT DISTINCT num_tallos FROM bunches where estado =""');
        $largos = DB::select('SELECT DISTINCT MID(cod_varie,4,5) AS longitud FROM bunches WHERE estado = "" ORDER BY longitud DESC');
        return view('venta.create', compact('clientes','bodegas','empaques','tallos','largos','bunches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function getCliente(Request $request)
    {
        $clientes = DB::select('SELECT id, nombre FROM clientes WHERE consigna = "'.$request->nombre.'" ');
        $datos = [$clientes];
        return response()->json($datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function getDisponibilidad(Request $request)
    {
        $dia = max($request->dia);
        $fechahoy = date("Y-m-d");
        $fecha = strtotime('-'.$dia.' day', strtotime($fechahoy));
        $fecha = date('Y-m-d', $fecha);
        $bunches = DB::select("
            SELECT f.variedad as variedad, f.id, COUNT(b.num_tallos) as tallos
            FROM bunches AS b INNER JOIN flores AS f ON b.id_flor = f.id 
            WHERE id_bodega = '".$request->bodega."' AND empaque = '".$request->empaque."' AND num_tallos = '".$request->botones."' AND b.fecha >= '".$fecha."'
            GROUP BY 1,2
        ");
        
        $datos = [$bunches];
        return response()->json($datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function getVariedad(Request $request)
    {
        $deleted = DB::delete('delete from tmp_bunches_dis');
        $dia = max($request->dia);
        $fechahoy = date("Y-m-d");
        //$datos[] = 0;
        for ($i=0; $i < $dia; $i++) { 
            $fecha = strtotime('-'.$i.' day', strtotime($fechahoy));
            $fecha = date('Y-m-d', $fecha);
            $bunches = DB::select("
                SELECT MID(cod_varie,4,5) as largo, f.variedad as variedad, COUNT(b.num_tallos) as tallos
                FROM bunches AS b INNER JOIN flores AS f ON b.id_flor = f.id 
                WHERE id_bodega = '".$request->bodega."' AND empaque = '".$request->empaque."' AND num_tallos = '".$request->botones."' AND b.fecha = '".$fecha."' AND id_flor = '".$request->id."'
                GROUP BY 1,2
            ");
            
            if (isset($bunches)) {
                foreach ($bunches as $key => $bunche) {
                    switch ($i) {
                        case 0:
                            $results = DB::select("select variedad, largo from tmp_bunches_dis where largo = '".$bunche->largo."' and variedad = '".$bunche->variedad."'");
                            if(empty($results)){
                                DB::insert("insert into tmp_bunches_dis (variedad,largo,cero) values (?, ?, ?)", [$bunche->variedad, $bunche->largo, $bunche->tallos]);
                            } else{
                                DB::update("update tmp_bunches_dis set cero = '".$bunche->tallos."' where variedad = '".$bunche->variedad."' and largo = '".$bunche->largo."'");
                            }
                            break;
                        case 1:
                            $results = DB::select("select variedad, largo from tmp_bunches_dis where largo = '".$bunche->largo."' and variedad = '".$bunche->variedad."'");
                            if(empty($results)){
                                DB::insert("insert into tmp_bunches_dis (variedad,largo,uno) values (?, ?, ?)", [$bunche->variedad, $bunche->largo, $bunche->tallos]);
                            } else{
                                DB::update("update tmp_bunches_dis set uno = '".$bunche->tallos."' where variedad = '".$bunche->variedad."' and largo = '".$bunche->largo."'");
                            }
                            break;
                        case 2:
                            $results = DB::select("select variedad, largo from tmp_bunches_dis where largo = '".$bunche->largo."' and variedad = '".$bunche->variedad."'");
                            if(empty($results)){
                                DB::insert("insert into tmp_bunches_dis (variedad,largo,dos) values (?, ?, ?)", [$bunche->variedad, $bunche->largo, $bunche->tallos]);
                            } else{
                                DB::update("update tmp_bunches_dis set dos = '".$bunche->tallos."' where variedad = '".$bunche->variedad."' and largo = '".$bunche->largo."'");
                            }
                            break;
                        case 3:
                            $results = DB::select("select variedad, largo from tmp_bunches_dis where largo = '".$bunche->largo."' and variedad = '".$bunche->variedad."'");
                            if(empty($results)){
                                DB::insert("insert into tmp_bunches_dis (variedad,largo,tres) values (?, ?, ?)", [$bunche->variedad, $bunche->largo, $bunche->tallos]);
                            } else{
                                DB::update("update tmp_bunches_dis set tres = '".$bunche->tallos."' where variedad = '".$bunche->variedad."' and largo = '".$bunche->largo."'");
                            }
                            break;
                        case 4:
                            $results = DB::select("select variedad, largo from tmp_bunches_dis where largo = '".$bunche->largo."' and variedad = '".$bunche->variedad."'");
                            if(empty($results)){
                                DB::insert("insert into tmp_bunches_dis (variedad,largo,cuatro) values (?, ?, ?)", [$bunche->variedad, $bunche->largo, $bunche->tallos]);
                            } else{
                                DB::update("update tmp_bunches_dis set cuatro = '".$bunche->tallos."' where variedad = '".$bunche->variedad."' and largo = '".$bunche->largo."'");
                            }
                            break;
                        case 5:
                            $results = DB::select("select variedad, largo from tmp_bunches_dis where largo = '".$bunche->largo."' and variedad = '".$bunche->variedad."'");
                            if(empty($results)){
                                DB::insert("insert into tmp_bunches_dis (variedad,largo,cinco) values (?, ?, ?)", [$bunche->variedad, $bunche->largo, $bunche->tallos]);
                            } else{
                                DB::update("update tmp_bunches_dis set cinco = '".$bunche->tallos."' where variedad = '".$bunche->variedad."' and largo = '".$bunche->largo."'");
                            }
                            break;
                    }
                    
                }
            }
            $dispo = DB::select("
                SELECT * FROM tmp_bunches_dis
            ");
            //array_push($dispo);
            //array_push($datos, $bunches);
        }
        
        return response()->json($dispo);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $prepacking = Prepacking::create([
            'orden' => 1,
            'cod_client' => $request->cod_client,
            'marca_id' => 1,
            'marca' => $request->marca,
            'variedad' => $request->variedad,
            'longitud' => $request->largo,
            'bunches' => $request->reserva,
            'id_bodega' => $request->bodega,
            'bodega' => $request->bodega,
            'botones' => $request->botones,
            'caja' => $request->desde,
            'estado' => "P",
            'pendiente' => $request->reserva,
            'fecha_corte' => $request->fecha,
            'carguera' => "Preguntar",
            'fecha_pedido' => $request->fecha,
            'salida_finca' => $request->fecha,
            'salida_vuelo' => $request->fecha,
            'transporte' => "Camion",
            'salida' => "QUITO",
            'pais' => "preguntar",
            'observacion' => "EXTRA",
            'cuarto_frio' => "Cuarto",
            'remision' => 0,
            'adicional' => 0,
            'id_user' => 1,
            'tipo_precio' => "A",
            'tipo_venta' => "VSO",
            'tipo_caja' => $request->tipo,
            'long_hasta' => 0,
            'id_transportista' => 1,
            'empaque' => $request->empaque,
        ]);
        $variedad = DB::select("
            SELECT id
            FROM flores
            WHERE variedad = '".$request->variedad."'
        ");
        $prepacking = Prepacking::orderBy('id', 'DESC')->first();
        $datos = [$variedad,$prepacking];
        return response()->json($datos);
    }

    /**
     * Display the specified resource.
     */
    public function show(Prepacking $prepacking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $fechahoy = date("Y-m-d");
        $fecha = strtotime('-5 day', strtotime($fechahoy));
        $fecha = date('Y-m-d', $fecha);
        $bunches = DB::select("
            SELECT f.variedad as variedad, COUNT(b.num_tallos) as tallos
            FROM bunches AS b INNER JOIN flores AS f ON b.id_flor = f.id 
            WHERE estado = '' AND b.fecha >= '".$fecha."'
            GROUP BY 1
        ");
        $prepacking = Prepacking::find($id);
        $principal = DB::select("SELECT consigna FROM clientes WHERE id = '".$prepacking->cod_client."' ");
        $clientes = DB::select('SELECT nombre FROM clientes WHERE nombre = consigna');
        $bodegas = Bodegas::all();
        $empaques = TipoEmpaques::all();
        $tallos = DB::select('SELECT DISTINCT num_tallos FROM bunches where estado =""');
        $largos = DB::select('SELECT DISTINCT MID(cod_varie,4,5) AS longitud FROM bunches WHERE estado = "" ORDER BY longitud DESC');
        return view('venta.edit', compact('prepacking','clientes','bodegas','empaques','tallos','largos','bunches','principal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prepacking $prepacking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prepacking $prepacking)
    {
        //
    }
}
