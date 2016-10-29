@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-sm-4">
            <img src="{{ $pelicula['poster'] }}" alt="Imagen de la pelicula">
        </div>
        <div class="col-sm-8">
            <h1>{{$pelicula['title']}}</h1>
            <h2>Año: {{$pelicula['year']}}</h2>
            <h3>Director: {{$pelicula['director']}}</h3>
            <p>Resumen: {{$pelicula['synopsis']}}</p>
            <p>Estado:
                @if($pelicula['rented']) Pelicula actualmente alquilada<br>
                    <button class="btn btn-danger">Devolver pelicula</button>
                @else Pelicula se encuentra disponible<br>
                    <button class="btn btn-info">Rentar pelicula</button>
                @endif
                <button class="btn btn-info">Editar pelicula</button>
                <button class="btn btn-default">Volver al listado</button>
            </p>
        </div>
    </div>

@stop
