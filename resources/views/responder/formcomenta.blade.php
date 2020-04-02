{!!csrf_field()!!}

<div class="container" style="max-width:1200px">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header" style="background-color: rgb(70, 126, 187);">
                    </div>
                    <div class="card-body" style="background-color: #d1f4ff;">
                        {!! Form::open(['route' => ['respondercomenta.store']]) !!}

                        <div class="row">
                            <div class="form-group col-lg-12 row">
                              <label class="control-label col-lg-2 col-md-4 col-sm-16"
                              for="nombre">Comentario</label>
                              <div class="col-lg-12 col-md-8 col-sm-12">
                              <input type="text" id="encuestado" name="encuestado" required="required" value="{{$encuestado}}"  class="form-control" readonly hidden="hidden">
                              <textarea rows="5" cols="80" name="comentario" id ="comentario"></textarea>
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