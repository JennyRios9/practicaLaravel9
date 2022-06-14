<!--<h1>{{$titulo}}</h1>-->

@extends('layout')
@section('titulo', 'Principal')
@section('contenido')

<h1>Empleados</h1>
<h1>{{$titulo}}</h1>
@forelse ($empleados as $empleado)
    {{$empleado['nombre']}}
    <br>
    <br>
@empty
    No hay empleados
@endforelse
@endsection
