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
                <a href="{{ route('users.create') }}" class="btn btn-primary">Nuevo Registro</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Usuarios</div>
                    <div class="panel-body">
                        <table class="table table-responsive table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombres y Apellidos</th>
                                <th>DNI</th>
                                <th>Edad</th>
                                <th>Telefono</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->dni }}</td>
                                    @if(is_object($user->dob))
                                        <td>{{ $user->dob->age }}</td>
                                    @else
                                        <td></td>
                                    @endif
                                    <td>{{ $user->phone }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td>No hay registros :(</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                        <tdiv>
                            {{ $users->appends('search',$search)->links() }}
                        </tdiv>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection