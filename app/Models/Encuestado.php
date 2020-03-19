<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Validator;

class Encuestado extends Model
{
    public static function listadoEncuestados($encuestado) {
        //dd($regimen);
       if ($encuestado=='0312')
            {$query='';
                $encuestados =  DB::select('call ListaEncuestado(?)',array('0312'));
               return view('encuestado.show', compact('encuestados', 'query'));}
            else{$query = $_GET['encuestado'];
            
            $encuestados =  DB::select('call ListaEncuestado(?)',array($query));
            return view('encuestado.show', compact('encuestados', 'query'));
            }
  }

  public static function guardarEncuestado($request){
    $rules = [
        'nombre' => 'required',
        'apellido' => 'required',
        'departamento' => 'required',
    ];
 
    $validator=Validator::make($request->all(), $rules);
    if($validator->fails()){
        return response()->json($validator->errors(), 400);
    } 
    $encuestado = DB::select('call CreaEncuestado(?,?,?)',array(
     $request->get("nombre"),
     $request->get("apellido"),
     $request->get("departamento"),
    ));
    if (empty($encuestado[0]->id)){
        return view('responder.negar'); 
    }else{

    return redirect()->route('responder.create', $encuestado[0]->id)
    ->with('info','Encuestado creado existosamente');
    }
 }
}
