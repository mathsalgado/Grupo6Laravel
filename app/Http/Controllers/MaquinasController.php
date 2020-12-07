<?php

namespace App\Http\Controllers;

use App\Models\Maquina;
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
        $maquinas = Maquina::paginate(2);
        return View('Maquinas.index')->with('maquinas', $maquinas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('Maquinas.create');
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
        Maquina::create($request->all());
        return redirect('/Maquinas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Maquina  $maquinas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return View('Maquinas.show')->with('maquinas', Maquina::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Maquina  $maquina
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return View('Maquinas.edit')->with('maquinas', Maquina::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Maquina  $maquinas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
        $maquinas = Maquina::find($id);
        $maquinas->update($request->all());
        return redirect('/Maquina');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Maquinas  $maquinas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Maquina::destroy($id);
        return redirect('/Maquina');
    }
}
