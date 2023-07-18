@extends('layout/template')

@section('title','Proyectos Ofertados')

@section('content')

<main>
    <div class="container py-4">
        <h2>Proyectos Ofertados</h2>
        <a href="{{ url('proyectos_ofertados/create') }}" class="btn btn-success btn-sm">Agregar Proyecto</a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tipo de proyecto</th>
                    <th>Perfil</th>
                    <th>Duracion</th>
                    <th>Estimulo</th>
                    <th>Lugar_part</th>
                    <th>Coordinador</th>
                    <th>AprobacionDG</th>
                    <th>Area</th>
                    <th>Denominacion</th>
                    <th>Justificacion</th>
                    <th>Objetivos</th>
                    <th>Actividades</th>
                    <th>Alcances</th>
                    <th>Evaluacion</th>
                    <th>PDF</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($proyectos_ofertados as $proyectos_ofertado)
                <tr>
                    <td>{{ $proyectos_ofertado->id }}</td>
                    <td>{{ $proyectos_ofertado->tipo_proyecto }}</td>
                    <td>{{ $proyectos_ofertado->perfil }}</td>
                    <td>{{ $proyectos_ofertado->duracion }}</td>
                    <td>{{ $proyectos_ofertado->estimulo }}</td>
                    <td>{{ $proyectos_ofertado->lug_part }}</td>
                   {{--}} <td>{{ $proyectos_ofertado->coordinador->persona->nombre }} {{ $proyectos_ofertado->coordinador->persona->ape_pat }} {{ $proyectos_ofertado->coordinador->persona->ape_mat }}</td> {{--}}
                    <td>{{ $proyectos_ofertado->aprobacionDG }}</td>
                    {{--}}<td>{{ $proyectos_ofertado->areas->nombre_area }}</td>{{--}}
                    <td>{{ $proyectos_ofertado->denominacion }}</td>
                    <td>{{ $proyectos_ofertado->justificacion }}</td>
                    <td>{{ $proyectos_ofertado->objetivos }}</td>
                    <td>{{ $proyectos_ofertado->actividades }}</td>
                    <td>{{ $proyectos_ofertado->alcances }}</td>
                    <td>{{ $proyectos_ofertado->evaluacion }}</td>
                    <td><a href="{{ $proyectos_ofertado->convenio_pdf }}">PDF</a></td>
                    <td></td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>

