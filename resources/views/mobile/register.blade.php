@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Registrate</div>

                    <div class="panel-body">
                        {{ Form::open(['url'=>'/m/register']) }}
                        <div class="form-group">
                            {{ Form::label('name','Nombres y Apellidos') }}
                            {{ Form::text('name', null, ['class' => 'form-control', 'required']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('email','Correo electronico') }}
                            {{ Form::text('email', null, ['class' => 'form-control', 'required']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('password','Contraseña') }}
                            {{ Form::password('password', ['class' => 'form-control', 'required']) }}
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