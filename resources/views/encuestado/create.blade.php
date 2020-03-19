@extends('layouts.app')

@section('contenido')
  
  
            
  
                <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9">
                <div class="card">
                    <div class="card-header">
                        <h3 style="text-align: center; color: #1b4b72">Registro de personas a encuestar</h3>
                    </div>
                    <div class="card-body">
                        {!! Form::open(['route' => ['encuestado.store']]) !!}
                        @include('encuestado.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

  
@stop