<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Encuestado;
use Illuminate\Http\Request;

class EncuestadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departamentos = DB::table('VerDepartamentos')->get();
        return  view('encuestado.create', compact('departamentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Encuestado::guardarEncuestado($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Encuestado  $encuestado
     * @return \Illuminate\Http\Response
     */
    public function show($encuestado)
    {
        return Encuestado::listadoEncuestados($encuestado);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Encuestado  $encuestado
     * @return \Illuminate\Http\Response
     */
    public function edit(Encuestado $encuestado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Encuestado  $encuestado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Encuestado $encuestado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Encuestado  $encuestado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Encuestado $encuestado)
    {
        //
    }
}
