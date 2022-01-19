<?php

namespace App\Http\Controllers;

use App\Models\Actividade;
use App\Models\Equipo;
use App\Models\Area;

use Carbon\Carbon;

use Illuminate\Http\Request;

/**
 * Class ActividadeController
 * @package App\Http\Controllers
 */
class ActividadeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['create']]);
    }

    public function terminar()
    {
        $actividades = Actividade::paginate();

        return view('actividade.terminar', compact('actividades'))
            ->with('i', (request()->input('page', 1) - 1) * $actividades->perPage());
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($area_nombre,$equipo_nombre)
    {

        $start = $this->getMesesSemanas();

        $area = Area::where('nombre', $area_nombre)->first();
        $equipo = Equipo::where('nombre', $equipo_nombre)->first();
        return response()->json($equipo);

        $actividades = Actividade::where('equipo_id', $equipo->id)->paginate();

        if($area != null && $equipo != null){

            session(['area' => $area]);
            session(['equipo' => $equipo]);
            return view('actividade.index', compact('actividades','area','equipo','start'))
            ->with('i', (request()->input('page', 1) - 1) * $actividades->perPage());
        }
        else
        {
            return view('welcome');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // return response()->json($request->all());

        // $actividade = new Actividade();
        $equipo = $equipo_id;
        $nombreUsuario = auth()->user()->name.' '.auth()->user()->apellido;
        $dt = Carbon::now();

        return view('actividade.create', compact('equipo','nombreUsuario','dt'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        // request()->validate(Actividade::$rules);

        // return response()->json($array);
        $actividade = Actividade::create([

            'equipo_id' => $request->equipo_id, 
            'user_id' => auth()->user()->id,

            'nombre' => $request->nombre,
            'fecha_inicio' => date('Y-m-d H:i:s', strtotime("$request->fecha_inicio $request->hora_inicio")),
            'encargado' => $request->encargado,
            'auditor' => $request->auditor,
            'estado' => ActivitySatatus::Generado,

            'dep_mecanico' => $request->dep_mecanico,
            'dep_electrico' => $request->dep_electrico,
            'dep_operaciones' => $request->dep_operaciones,

            
            // 'prueba_energia_m' => $request->prueba_energia_m,
            // 'prueba_energia_e' => $request->prueba_energia_e,
            // 'prueba_energia_o' => $request->prueba_energia_o,

        

          ]);

        // dd($actividade->all());
        return redirect()->route('actividades.index')
            ->with('success', 'Actividade created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $actividade = Actividade::find($id);

        return view('actividade.show', compact('actividade'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $actividade = Actividade::find($id);

        return view('actividade.edit', compact('actividade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Actividade $actividade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actividade $actividade)
    {
        request()->validate(Actividade::$rules);

        // $actividade->update($request->all());
        $actividade->update([

            'equipo_id' => $request->equipo_id, 
            'user_id' => '1',

            'nombre' => $request->nombre,
            'fecha_inicio' => date('Y-m-d H:i:s', strtotime("$request->fecha_inicio $request->hora_inicio")),
            'encargado' => $request->encargado,
            'auditor' => $request->auditor,
            'estado' => 'estado',

            'dep_mecanico' => $request->dep_mecanico,
            'dep_electrico' => $request->dep_electrico,
            'dep_operaciones' => $request->dep_operaciones,

            

            // 'prueba_energia_m' => $request->prueba_energia_m,
            // 'prueba_energia_e' => $request->prueba_energia_e,
            // 'prueba_energia_o' => $request->prueba_energia_o,

        

          ]);
        return redirect()->route('actividades.index')
            ->with('success', 'Actividade updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    
    public function destroy($id)
    {
        $actividade = Actividade::find($id)->delete();

        return redirect()->route('actividades.index')
            ->with('success', 'Actividade deleted successfully');
    }

    function getMesesSemanas(){
        $fecha = Carbon::now();
        $month = $fecha->month;
        $year = $fecha->year;
        $meses = array();

        $cont = 0;
        while($cont <= 1){              
            $fechaMoment = $fecha;                
            switch($fechaMoment->month){
                case 1;
                    $fechatem = Carbon::createFromDate($fechaMoment->year,$fechaMoment->month);
                    array_push($meses, $fechatem);
                    $fechaMoment->month = $fechaMoment->subMonth()->format('m');                     
                    break;
                case 2;                
                    $fechatem = Carbon::createFromDate($fechaMoment->year,$fechaMoment->month);
                    array_push($meses, $fechatem);
                    $fechaMoment->month = $fechaMoment->subMonth()->format('m');                
                    break;
                case 3;                
                    $fechatem = Carbon::createFromDate($fechaMoment->year,$fechaMoment->month);
                    array_push($meses, $fechatem);
                    $fechaMoment->month = $fechaMoment->subMonth()->format('m');                
                    break;
                case 4;                
                    $fechatem = Carbon::createFromDate($fechaMoment->year,$fechaMoment->month);
                    array_push($meses, $fechatem);
                    $fechaMoment->month = $fechaMoment->subMonth()->format('m');                
                    break;
                case 5;                
                    $fechatem = Carbon::createFromDate($fechaMoment->year,$fechaMoment->month);
                    array_push($meses, $fechatem);
                    $fechaMoment->month = $fechaMoment->subMonth()->format('m');                
                    break;
                case 6;                
                    $fechatem = Carbon::createFromDate($fechaMoment->year,$fechaMoment->month);
                    array_push($meses, $fechatem);
                    $fechaMoment->month = $fechaMoment->subMonth()->format('m');                
                    break;
                case 7;                
                    $fechatem = Carbon::createFromDate($fechaMoment->year,$fechaMoment->month);
                    array_push($meses, $fechatem);
                    $fechaMoment->month = $fechaMoment->subMonth()->format('m');                
                    break;
                case 8;                
                    $fechatem = Carbon::createFromDate($fechaMoment->year,$fechaMoment->month);
                    array_push($meses, $fechatem);
                    $fechaMoment->month = $fechaMoment->subMonth()->format('m');                
                    break;
                case 9;                
                    $fechatem = Carbon::createFromDate($fechaMoment->year,$fechaMoment->month);
                    array_push($meses, $fechatem);
                    $fechaMoment->month = $fechaMoment->subMonth()->format('m');                
                    break;
                case 10;                
                    $fechatem = Carbon::createFromDate($fechaMoment->year,$fechaMoment->month);
                    array_push($meses, $fechatem);
                    $fechaMoment->month = $fechaMoment->subMonth()->format('m');                
                    break;
                case 11;                
                    $fechatem = Carbon::createFromDate($fechaMoment->year,$fechaMoment->month);
                    array_push($meses, $fechatem);
                    $fechaMoment->month = $fechaMoment->subMonth()->format('m');                
                    break;
                case 12;
                    $fechatem = Carbon::createFromDate($fechaMoment->year,$fechaMoment->month);
                    array_push($meses, $fechatem);
                    $fechaMoment->month = $fechaMoment->subMonth()->format('m');                          
                    break;
            }
            $cont = $cont + 1;
        }
        $mesRepit = 0;


        $start = array();

        for ($j=1; $j <= count($meses) ; $j++) {
            $fechas = array();
            $mes =array();
            $date = Carbon::createFromDate($meses[$j-1]->year,$meses[$j-1]->month);
            $l=0;
            
            
            for ($i=1; $i <= $date->daysInMonth ; $i+=7) {
                $rangos =array();
                $inicio = Carbon::createFromDate($date->year,$date->month,$i)->startOfWeek();
                $termino = Carbon::createFromDate($date->year,$date->month,$i)->endOfweek();
                $rangos["inicio"] = $inicio;
                $rangos["termino"] = $termino;
                // $mes[$l.'° semana'] = $inicio->toDateString().' - '.$termino->toDateString().' '.$inicio->weekOfYear; 
                $mes[$l]=$rangos; 
                $l++;              
            }    
            $fechas[0]=$date->formatLocalized('%B');
            $fechas[1]=$mes;
            // $start[$date->formatLocalized('%Y').' mes '.$date->formatLocalized('%B')]= $mes;
            $start[$mesRepit]= $fechas;
            // $start[$mesRepit]= $mes;
            // $start[$date->formatLocalized('%B')]= $mes;
            $mesRepit++;
            unset($mes);
            $mes = array();
        }
        
        // $result = array_merge($start);
        $cont = 1;
        return $start;

    }
}
