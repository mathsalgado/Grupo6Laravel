<?php

namespace App\Http\Controllers;

use App\Models\Maquinas;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MaquinasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View('maquinas.index')->with('maquinas', Maquinas::paginate(1));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('maquinas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
            [
                'tipo' => 'required|max: 10',
                'produto' => 'required|max: 20'
            ],
            [
                'tipo.*' => 'Tipo é obrigatório',
                'produto.*' => 'Produto obrigatório'
            ]
        );
        Maquinas::create($request->all());
        return redirect('\maquinas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Maquinas  $maquinas
     * @return \Illuminate\Http\Response
     */
    public function show(Maquinas $maquina)
    {
        return View('maquinas.show')->with('maquinas', $maquinas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Maquina  $maquina
     * @return \Illuminate\Http\Response
     */
    public function edit(Maquinas $maquina)
    {
        return View('maquinas.edit')->with('maquinas', $maquinas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Maquinas  $maquinas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Maquinas $maquinas)
    {
        $this->validate($request,
            [
                'tipo' => 'required|max: 10',
                'produto' => 'required|max: 20'
            ],
            [
                'tipo.*' => 'Tipo é obrigatório',
                'produto.*' => 'Produto obrigatório'
            ]
        );
        $maquinas->update($request->all());
        return redirect('/maquinas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Maquinas  $maquinas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Maquinas $maquinas)
    {
        Maquinas::destroy($id);
        return redirect('/maquinas');
    }
}
