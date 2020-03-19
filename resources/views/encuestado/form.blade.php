{!!csrf_field()!!}

<div class="container" style="max-width:990px">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header" style="background-color: rgb(70, 126, 187);">
                      
                      <h2 style="text-align: center; color: #fff; font-size: 20px"; >Datos personales</h2>
                    </div>
                    <div class="card-body" style="background-color: #d1f4ff;">
                        {!! Form::open(['route' => ['encuestado.store']]) !!}

                        <div class="row">
                            <div class="form-group col-lg-8 row">
                              <label class="control-label col-lg-4 col-md-4 col-sm-12"
                              for="nombre">Nombres</label>
                              <div class="col-lg-8 col-md-8 col-sm-12">
                                <input type="text" id="nombre" name="nombre" required="required"  class="form-control">
                              </div>
                            </div>                           
                        </div>

                        <div class="row">
                            <div class="form-group col-lg-8 row">
                              <label class="control-label col-lg-4 col-md-4 col-sm-12"
                              for="apellido">Apellidos</label>
                              <div class="col-lg-8 col-md-8 col-sm-12">
                                <input type="text" id="apellido" name="apellido" required="required"  class="form-control">
                              </div>
                            </div>                           
                        </div>
                        
                        <div class="row">
                            <div class="form-group col-lg-8 row">
                              <label class="control-label col-lg-4 col-md-4 col-sm-12"
                              for="departamento">Departamento</label>
                              <div class="col-lg-8 col-md-8 col-sm-12">
                                <select  name="departamento" id="departamento"  required="required"
                                class="form-control">
                                    <option value="">--Seleccione un departamento--</option>
                                    @foreach ($departamentos as $departamento)
                                    <option  value="{{$departamento->id}}">{{$departamento->nombre}}</option>
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