<?php

namespace App\Http\Controllers;

use App\Models\PuntosBloqueo;
use Illuminate\Http\Request;

/**
 * Class PuntosBloqueoController
 * @package App\Http\Controllers
 */
class PuntosBloqueoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $puntosBloqueos = PuntosBloqueo::paginate();

        return view('puntos-bloqueo.index', compact('puntosBloqueos'))
            ->with('i', (request()->input('page', 1) - 1) * $puntosBloqueos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $puntosBloqueo = new PuntosBloqueo();
        return view('puntos-bloqueo.create', compact('puntosBloqueo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(PuntosBloqueo::$rules);

        $puntosBloqueo = PuntosBloqueo::create($request->all());

        return redirect()->route('puntosbloqueos.index')
            ->with('success', 'PuntosBloqueo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $puntosBloqueo = PuntosBloqueo::find($id);

        return view('puntosbloqueos.show', compact('puntosBloqueo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $puntosBloqueo = PuntosBloqueo::find($id);

        return view('puntosbloqueos.edit', compact('puntosBloqueo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  PuntosBloqueo $puntosBloqueo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PuntosBloqueo $puntosBloqueo)
    {
        request()->validate(PuntosBloqueo::$rules);

        $puntosBloqueo->update($request->all());

        return redirect()->route('puntosbloqueos.index')
            ->with('success', 'PuntosBloqueo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $puntosBloqueo = PuntosBloqueo::find($id)->delete();

        return redirect()->route('puntosbloqueos.index')
            ->with('success', 'PuntosBloqueo deleted successfully');
    }
}
