@extends('layout/template')

@section('title','Coordinadores')

@section('content')
    <main>
        <div class="container py-4">
            <h2>Coordinadores</h2>
            <a href="{{url('coordinador/create')}}" class="btn btn-success btn-sm">Nuevo coordinador</a>
            {{--OBSERVACION ELIMINAR--}}
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Apellido paterno</th>
                        <th>Apellido Materno</th>
                        <th>titulo</th>
                        <th>Puesto</th>
                        <th>Telefono fijo</th>
                        <th>Celular</th>
                        <th>Telefono de referencia</th>
                        <th>Correo</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($coordinadores as $coordinador)
                        <tr>
                            <td>{{$coordinador->id}}</td>
                            <td>{{$coordinador->persona->nombre}}</td>
                            <td>{{$coordinador->persona->ape_pat}}</td>
                            <td>{{$coordinador->persona->ape_mat}}</td>
                            <td>{{$coordinador->persona->titulo}}</td>
                            <td>{{$coordinador->puesto}}</td>
                            <td>{{$coordinador->contacto->telefono_fijo}}</td>
                            <td>{{$coordinador->contacto->celular}}</td>
                            <td>{{$coordinador->contacto->telefono_ref}}</td>
                            <td>{{$coordinador->contacto->correo}}</td>
                            <td></td>
                            <td></td>
                            <td><a href="{{url('coordinador/'.$coordinador->id.'/edit')}}" class="btn btn-success btn-sm">Editar</a></td>
                            <td>
                                <form action="{{url('coordinador/'.$coordinador->id)}}" method="post">
                                 @method("DELETE")
                                 @csrf
                                 <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </main>
@endsection
