@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Wizard 2</div>

                    <div class="panel-body text-center">
                        <h2>¿Para que sirve?</h2>
                        <img src="{{ asset('img/icons/business-presentation.png') }}">
                        <p>La aplicacion te permitira estar preparado ante una eventual emergencia o urgencia.</p>
                        <p>Recolectando informacion previa la aplicacion te ayuda a que la atencion de SAMU sea mas
                            rapida y efectiva.</p>
                        <p><a href="/m/wizard/3" class="btn btn-primary">Continuar</a>
                        <p><a href="/login" class="btn btn-default">Saltar</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection