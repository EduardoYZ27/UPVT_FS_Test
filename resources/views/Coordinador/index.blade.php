@extends('layout/template')

@section('title','Coordinadores')

@section('content')
    <main>
        <div class="container py-4">
            <h2>Coordinadores</h2>

            {{--OBSERVACION ELIMINAR--}}
            <table style="text-align: left" class="table table-hover">
                <thead>
                    <tr>

                        <th>Nombre</th>
                        {{--<th>Apellido paterno</th>
                        <th>Apellido Materno</th>
                        <th>titulo</th>
                        <th>Puesto</th>
                        <th>Telefono fijo</th>
                        <th>Celular</th>
                        <th>Telefono de referencia</th>
                        <th>Correo</th>--}}
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($coordinadores as $coordinador)
                        <tr>
                            <td>
                            {{$coordinador->persona->nombre}}
                            {{$coordinador->persona->ape_pat}}
                            {{$coordinador->persona->ape_mat}}</td>
                            {{--<td>{{$coordinador->persona->titulo}}</td>
                            <td>{{$coordinador->puesto}}</td>
                            <td>{{$coordinador->contacto->telefono_fijo}}</td>
                            <td>{{$coordinador->contacto->celular}}</td>
                            <td>{{$coordinador->contacto->telefono_ref}}</td>
                            <td>{{$coordinador->contacto->correo}}</td>--}}


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
