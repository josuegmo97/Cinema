@extends('layouts.admin')

@include('alerts.success')

@section('content')
    <table class="table">
        <thead>
            <th>Nombre</th>
            <th>Email</th>
            <th>Operación</th>
        </thead>
        @foreach ($users as $user)
        <tbody>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <form action="{{ route('usuario.destroy', $user->id) }}" method="POST">
                    <input type="hidden" name="_method" value="delete" />
                    {!! csrf_field() !!}
                    <a href="{{ route('usuario.edit' , $user->id) }}" class="btn btn-primary">Editar</a>
                    <button class="btn btn-danger">Eliminar</button>
                </form>

            </td>
        </tbody>
        @endforeach
    </table>

    {{ $users->render() }}
@stop
