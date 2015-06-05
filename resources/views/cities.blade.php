@extends('template')

@section('titulo')
    LISTADO DE CIUDADES
@endsection

@section('contenido')
    <table class="table">
        <thead>
        <tr>
            <th>CODIGO</th>
            <th>NOMBRE DE CIUDADES</th>
            <th>OPCIONES</th>
        </tr>

        </thead>
        <tbody>
        @foreach($ciudades as $ciudad)
            <tr>
                <td> {!! $ciudad ->id !!} </td>
                <td> {!! $ciudad ->name !!} </td>
                <td> <a href = "">Editar</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection