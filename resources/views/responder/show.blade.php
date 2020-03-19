@extends('layouts.app')

@section('contenido')

<div class="page-inner">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                
                <a class="btn btn-sm btn-outline-primary float-right" href="{{route('encuestado.create')}}">Crear Encuestado</a>
                <h2 style="text-align: center; color: #1b4b72">Colaboradores</h2>
</div>

<div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        </div>
                            </div>
                            
                            <div class="form-group">
                                <form method="get"  action="{{route('encuestado.show','encuestado')}}">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Buscar" value="{{$query}}" id="encuestado" name="encuestado">
                                            <span class="input-group-btn">
                                                <button type="submit" class="btn btn-primary">Buscar</button>
                                            </span>
                                        </div>
                                    </div>
                                </form>
                            <!-- cerramos el formulario -->
                        

<div class="table-responsive">
<table class="table table-bordered table-head-bg-info">
<thead>
<tr style="text-align: center">
<th>ID</th>
<th>Nombre</th>
<th>Departamento</th>
</tr>
</thead>
<tbody>
@foreach ($encuestados as $encuestado)
<tr>
<td>{{$encuestado->id}}</td>
<td>{{$encuestado->nombre}}</td>
<td>{{$encuestado->departamento}}</td>
<td width="10px" class="text-center">
  <a href=""
     class="btn btn-sm btn-outline-dark">
      Empeszar a responder
  </a>
 </td>
</tr>
@endforeach
</tbody>

</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
@stop