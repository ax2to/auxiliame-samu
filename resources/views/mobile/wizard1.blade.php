@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Wizard 1</div>

                    <div class="panel-body text-center">
                        <h2>¿Que es?</h2>
                        <img src="{{ asset('img/icons/customer-service.png') }}">
                        <p> Es un aplicativo que te ayudara a comunicarte con el Sistema de Atención Móvil de Urgencias (SAMU) durante una emergencia o urgencia.</p>
                        <p><a href="/m/wizard/2" class="btn btn-primary">Continuar</a>
                        <p><a href="/login" class="btn btn-default">Saltar</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection