@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Wizard 3</div>

                    <div class="panel-body text-center">
                        <h2>¿Como lo uso?</h2>
                        <h3>Antes de una emergencia o urgencia:</h3>
                        <img src="{{ asset('img/icons/check-form.png') }}">
                        <ol class="text-left">
                            <li>Descarga: SAMU Auxíliame en Play Store.</li>
                            <li>Registrate.</li>
                            <li>Llena tu informacion y la de tu familia.</li>
                        </ol>
                        <h3>Durante una Emergencia o Urgencia:</h3>
                        <img src="{{ asset('img/icons/emergency-call.png') }}">
                        <ol class="text-left">
                            <li>Ingresa a SAMU Auxiliame.</li>
                            <li>Selecciona Emergencia o Urgencia</li>
                            <li>Selecciona el perfil que tiene la emergencia o urgencia.</li>
                            <li>Quedate junto al paciente, SAMU te llamara para atenderte.</li>
                        </ol>
                        <p>
                            <a href="/m/login" class="btn btn-primary">¡Empezar!</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection