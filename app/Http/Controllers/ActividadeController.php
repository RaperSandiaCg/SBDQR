<?php

namespace App\Http\Controllers;

use App\Models\Actividade;
use App\Models\Equipo;
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
    public function index(Actividade $area_id)
    {

        $actividades = Actividade::paginate();
        // return view('actividade.index', ['area' => $area_id]);

        return view('actividade.index', compact('actividades'))
            ->with('i', (request()->input('page', 1) - 1) * $actividades->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Actividade $actividade, Equipo $equipo)
    {

        // $actividade = new Actividade();
        $nombreUsuario = auth()->user()->name.' '.auth()->user()->apellido;

        $dt = Carbon::now();

        return view('actividade.create', compact('actividade','equipo','nombreUsuario','dt'));
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
            'estado' => 'estado',

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
}
