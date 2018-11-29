@extends('layouts.admin')
@section('content')
    {{-- <form action="{{ route('usuario.store') }}" method="POST">
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" class="form-control" name="" id="" placeholder="Ingrese el nombre del usuario">
        </div>
        <div class="form-group">
            <label for="">Correo</label>
            <input type="email" class="form-control" name="" id="" placeholder="Ingrese el correo del usuario">
        </div>
        <div class="form-group">
            <label for="">Contraseña</label>
            <input type="password" class="form-control" name="" id="" placeholder="Ingrese la contraseña del usuario">
        </div>
        <button class="btn btn-primary" type="submit">Registrar</button>
    </form> --}}
    @include('alerts.request')

    {!!Form::open(['route'=>'usuario.store', 'method'=>'POST'])!!}
	<div class="form-group">
		{!!Form::label('nombre','Nombre:')!!}
		{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('email','Correo:')!!}
		{!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('password','Contraseña:')!!}
		{!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
	</div>
	{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
@stop
