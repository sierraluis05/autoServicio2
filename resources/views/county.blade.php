@extends('template')

@section('titulo')
    LISTADO DE DEPARTAMENTOS
@endsection


@section('contenido')
    <table class="table">
        <thead>
        <tr>
            <th>CODIGO</th>
            <th>NOMBRE DE DEPARTAMENTO</th>
            <th>OPCIONES</th>
        </tr>

        </thead>
        <tbody>

            <tr>
                <td> {!! $departamentos ->id !!} </td>
                <td> {!! $departamentos ->name !!} </td>
                <td> <a href = "">Editar</a></td>
            </tr>

        </tbody>
    </table>

@endsection