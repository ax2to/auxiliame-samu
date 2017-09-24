@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Wizard 1</div>

                    <div class="panel-body">
                        <h1>Bienvenido a Auxiliame SAMU</h1>
                        <h2>¿Que es?</h2>
                        <p>Auxiliame SAMU es una aplicacion que le ayudara a hacer un mejor uso del SAMU</p>
                        <div class="text-center">
                            <a href="/m/wizard/2" class="btn btn-primary">Continuar</a>
                            <a href="/login" class="btn btn-default">Saltar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection