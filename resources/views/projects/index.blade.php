@extends('layout')

@section('title')
Portafolio de evidencias
@endsection

@section('contenido')

<h1>Alumnos</h1>

<a href="{{ route('portafolio.create') }}">Registrar alumno</a>

<ul>

    @if($projects)
    @foreach($projects as $project)

        <li> <a href="{{ route('portafolio.show', $project) }}"> {{ $project->nombre }}  {{ $project->paterno }}  {{ $project->materno }}</a> </li><br>

    @endforeach
    @else
        <li>No hay proyectos para mostrar</li>
    @endif

    {{ $projects->links() }}
</ul>


@endsection