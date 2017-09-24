@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row" style="margin-bottom: 20px">
            <div class="col-md-6">
                {{ Form::open(['method'=>'GET']) }}
                <div class="input-group">
                    <input class="form-control" placeholder="Buscar por..." name="search" value="{{ $search }}">
                    <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Buscar</button>
                            </span>
                </div>
                {{ Form::close() }}
            </div>
            <div class="col-md-6">
                <a href="/users" class="btn btn-primary">Nuevo Registro</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Registros</div>
                    <div class="panel-body">
                        <table class="table table-responsive table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Usuario</th>
                                <th>DNI</th>
                                <th>Edad</th>
                                <th>Telefono</th>
                                <th>Estado</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($issues as $issue)
                                <tr>
                                    <td>{{ $issue->id }}</td>
                                    <td>{{ $issue->user->name }}</td>
                                    <td>{{ $issue->user->dni }}</td>
                                    <td>{{ $issue->user->dob->age }}</td>
                                    <td>{{ $issue->user->phone }}</td>
                                    <td>{{ $issue->status }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td>No hay registros :(</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                        <tdiv>
                            {{ $issues->appends('search',$search)->links() }}
                        </tdiv>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection