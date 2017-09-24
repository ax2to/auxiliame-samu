@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Ingresar</div>
                    <div class="panel-body">
                        {{ Form::open(['url'=>'mobile.user.store']) }}
                        <div class="form-group">
                            {{ Form::label('name','Correo electronico') }}
                            {{ Form::text('name', null, ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('name','Contraseña') }}
                            {{ Form::text('name', null, ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary">Ingresar</button>
                        </div>
                        <div class="form-group text-center">
                            <a href="{{ route('mobile.register') }}" class="btn btn-default">Registrarse</a>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection