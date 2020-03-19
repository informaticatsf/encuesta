{!!csrf_field()!!}

<div class="container" style="max-width:1200px">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header" style="background-color: rgb(70, 126, 187);">
                                            
                    </div>
                    <div class="card-body" style="background-color: #d1f4ff;">
                        {!! Form::open(['route' => ['responder.store']]) !!}

                        <div class="row">
                            <div class="form-group col-lg-12 row">
                              <label class="control-label col-lg-2 col-md-4 col-sm-16"
                              for="nombre">Pregunta</label>
                              <div class="col-lg-12 col-md-8 col-sm-12">
                              <input type="text" id="encuestado" name="encuestado" required="required" value="{{$encuestado}}"  class="form-control" readonly hidden="hidden">
                                <input type="text" id="idpregunta" name="idpregunta" required="required" value="{{$datos[0]->id}}"  class="form-control" readonly hidden="hidden">
                                <input type="text" id="pregunta" name="pregunta" required="required" value="{{$datos[0]->pregunta}}"  class="form-control" readonly>
                              </div>
                            </div>                           
                        </div>
                       
                        
                        <div class="row">
                            <div class="form-group col-lg-8 row">
                              <label class="control-label col-lg-4 col-md-4 col-sm-12"
                              for="respuesta">Respuestas</label>
                              <div class="col-lg-8 col-md-8 col-sm-12">
                                <select  name="idrespuesta" id="idrespuesta"  required="required"
                                class="form-control">
                                    <option value="">--Seleccione su respuesta--</option>
                                    @foreach ($respuestas as $respuesta)
                                    <option  value="{{$respuesta->id}}">{{$respuesta->respuesta}}</option>
                                    @endforeach
                                </select>
                              </div>                              
                            </div>
                          </div>

                        
                        <div class="form-group ">

                        <div class="form-group text-center">
                                {{ Form::submit('Guardar', ['class'=>'btn btn-lg btn-success']) }}
                                
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>

</div>