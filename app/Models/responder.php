<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Validator;
use Illuminate\Database\Eloquent\Model;

class responder extends Model
{
    public static function guardarRespuesta($request){
        $rules = [
            'encuestado' => 'required',
            'idpregunta' => 'required', 
            'idrespuesta' => 'required',
        ];
     
        $validator=Validator::make($request->all(), $rules);
        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }
        DB::select('call ResponderEncuesta(?,?,?)',array(
         $request->get("encuestado"),
         $request->get("idpregunta"),
         $request->get("idrespuesta"),
        ));
     
        return redirect()->route('responder.create', $request->get("encuestado"))
        ->with('info','Pregunta respondida existosamente');
     }

     public static function ObtenerPregunta($encuestado) {
        return  DB::select('call GetPregunta(?)',array($encuestado));
    }

    public static function ObtenerRespuesta($pregunta) {
        return  DB::select('call GetRespuesta(?)',array($pregunta));
    }

    public static function guardarComentario($request){
        $rules = [
            'encuestado' => 'required',
            'comentario' => 'required', 
        ];
     
        $validator=Validator::make($request->all(), $rules);
        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }
        DB::select('call ResponderComentario(?,?)',array(
         $request->get("encuestado"),
         $request->get("comentario"),
        ));
     
        return view('responder.fin');
        
     }
  
}
