@extends('layout/template')

@section('title', 'Menu de direccionamiento')

@section('content')

<main>
    <div class="container py-4">
        <h2>Menú de direccionamiento</h2>
        <div><a href="{{ url('proyectos_ofertados') }}">Proyectos Ofertados</a></div>
        <div><a href="{{ url('coordinador') }}">Coordinadores</a></div>
        <div><a href="{{ url('area') }}">Áreas</a></div>
        {{--}}<div><a href="{{ url('alumno') }}" class="btn btn-success btn-sm">Alumno</a></div>{{--}}
    </div>
</main>

@endsection
