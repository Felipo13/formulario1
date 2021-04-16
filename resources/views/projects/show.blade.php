@extends('layout')

@section('title')
Registro: {{ $project -> nombre }}
@endsection

@section('contenido')

<h1><center> Detalles del registro</center></h1>

    <h1> {{ $project -> nombre }} </h1>
    <p> {{ $project -> paterno }} {{ $project -> materno }} </p>
    <p> {{ $project -> correo }} </p>
    <p> {{ $project -> carrera }} </p>
    <p> {{ $project -> created_at }} </p>

@endsection