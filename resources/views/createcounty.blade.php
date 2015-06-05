@extends('template')

@section('titulo')
    CREAR NUEVOS DEPARTAMENTOS
@endsection


@section('contenido')
    {!! Form::open(['url' => '/departamentos']) !!}

    {!!Form::label('etiquetaname', 'Nombre: ')!!}

    {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa Nombre de Dpto']) !!}

        <div>
        {!! Form::submit('Guardar') !!}
        </div>



    {!! Form::close() !!}
@endsection