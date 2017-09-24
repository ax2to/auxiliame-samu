@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Bienvenida</div>
                    <div class="panel-body text-center">
                        <h1>Bienvenido a Auxiliame SAMU</h1>
                        <img src="{{ asset('img/icons/welcome.png') }}">
                        <p><a href="/m/wizard/1" class="btn btn-primary">Continuar</a>
                        <p><a href="/login" class="btn btn-default">Saltar</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection