<?php

namespace App\Http\Controllers;

use App\Models\responder;
use Illuminate\Http\Request;

class ResponderController extends Controller
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
        //
    }

    public function obtenPreg($encuestado)
    {
        $datas=Responder::ObtenerPregunta($encuestado);
        if (empty($datas )){
            return  view('responder.fin');
        }else{
        $datass=Responder::ObtenerRespuesta($datas[0]->id); 
        return  view('responder.create',['encuestado'=> $encuestado, 'datos'=>$datas, 'respuestas'=>$datass]);
    }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Responder::guardarRespuesta($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\responder  $responder
     * @return \Illuminate\Http\Response
     */
    public function show(responder $responder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\responder  $responder
     * @return \Illuminate\Http\Response
     */
    public function edit(responder $responder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\responder  $responder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, responder $responder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\responder  $responder
     * @return \Illuminate\Http\Response
     */
    public function destroy(responder $responder)
    {
        //
    }
}
