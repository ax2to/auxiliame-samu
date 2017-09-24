@extends('layouts.app')

@section('content')
    <style>
        ul.nav-pills li a {
            width: 100% !important;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center" style="margin-bottom: 20px">
                <div class="btn-group" role="group" aria-label="...">
                    <a href="button" class="btn btn-default"><i class="fa fa-home"></i></a>
                    <a href="button" class="btn btn-default"><i class="fa fa-user"></i></a>
                    <a href="button" class="btn btn-default"><i class="fa fa-users"></i></a>
                    <a href="button" class="btn btn-default"><i class="fa fa-users"></i></a>
                    <a href="button" class="btn btn-default"><i class="fa fa-users"></i></a>
                </div>
            </div>
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Auxiliame</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <a href="/m/emergency" class="btn btn-danger btn-lg" style="width: 100%">Emergencia</a>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-info btn-lg" style="width: 100%">Urgencia</button>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success btn-lg" style="width: 100%">Consulta</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection