@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Nuevo Usuario</div>
                    <div class="panel-body">
                        {{ Form::open() }}
                        <div class="form-group col-md-6">
                            {{ Form::label('name','DNI') }}
                            {{ Form::text('name', null, ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group col-md-6">
                            {{ Form::label('name','Telefono') }}
                            {{ Form::text('name', null, ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group col-md-12">
                            {{ Form::label('name','Nombres y Apellidos') }}
                            {{ Form::text('name', null, ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group col-md-4">
                            {{ Form::label('name','Fecha de Nacimiento') }}
                            {{ Form::text('name', null, ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group col-md-4">
                            {{ Form::label('name','Edad') }}
                            {{ Form::text('name', null, ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group col-md-4">
                            {{ Form::label('name','Genero') }}
                            {{ Form::select('name', \App\Form::gender(), null, ['class' => 'form-control']) }}
                        </div>
                        {{ Form::close() }}
                    </div>
                    <div class="panel-footer text-right">
                        <a href="{{ route('users.index') }}" class="btn btn-default">Cancelar</a>
                        <button class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection