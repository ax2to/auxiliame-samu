@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Registrate</div>

                    <div class="panel-body">
                        {{ Form::open([]) }}
                        <div class="form-group">
                            {{ Form::label('name','Nombres y Apellidos') }}
                            {{ Form::text('name', null, ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('name','Fecha de nacimiento') }}
                            {{ Form::date('name', null, ['class' => 'form-control datepicker']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('name','Telefono') }}
                            {{ Form::text('name', null, ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('name','DNI') }}
                            {{ Form::text('name', null, ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('name','Correo electronico') }}
                            {{ Form::text('name', null, ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('name','Contraseña') }}
                            {{ Form::text('name', null, ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('name','Genero') }}
                            {{ Form::select('name', \App\Form::gender(), null, ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary">Registrate</button>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection