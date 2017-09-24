@extends('layouts.app')

@section('content')
    <div id="emergency" class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>Emergencia</h1>
            </div>
            <div class="col-xs-6">
                <div>
                    <img class="img-responsive" src="{{ asset('img/icons/emergency-call.png') }}">
                    <p>Desmayo</p>
                </div>
            </div>
            <div class="col-xs-6">
                <div>
                    <img class="img-responsive" src="{{ asset('img/icons/emergency-call.png') }}">
                    <p>Envenenamiento</p>
                </div>
            </div>
            <div class="col-xs-6">
                <div>
                    <img class="img-responsive" src="{{ asset('img/icons/emergency-call.png') }}">
                    <p>Paro Cardiaco</p>
                </div>
            </div>
            <div class="col-xs-6">
                <div>
                    <img class="img-responsive" src="{{ asset('img/icons/emergency-call.png') }}">
                    <p>Heridos</p>
                </div>
            </div>
            <div class="col-xs-6">
                <div>
                    <img class="img-responsive" src="{{ asset('img/icons/emergency-call.png') }}">
                    <p>Convulciones</p>
                </div>
            </div>
            <div class="col-xs-6">
                <div>
                    <img class="img-responsive" src="{{ asset('img/icons/emergency-call.png') }}">
                    <p>Dificultad Respiratoria</p>
                </div>
            </div>
            <div class="col-xs-6">
                <div>
                    <img class="img-responsive" src="{{ asset('img/icons/emergency-call.png') }}">
                    <p>Gestantes</p>
                </div>
            </div>
            <div class="col-xs-6">
                <div>
                    <img class="img-responsive" src="{{ asset('img/icons/emergency-call.png') }}">
                    <p>Otros</p>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection