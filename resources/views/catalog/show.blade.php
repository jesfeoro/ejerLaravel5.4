@extends('layouts.master')
@section('title', 'Mostrar Pelicula')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-4">              
            <img src="{{ $Peliculas->poster}}" />
        </div>
        <div class="col-sm-8">
            <h2>{{$Peliculas->title}}</h2>
            <h3>Año: {{$Peliculas->year}}</h3>
            <h3>Director: {{$Peliculas->director}}</h3>
            <p><b>Resumen: </b>{{$Peliculas->synopsis}} </p>
            
            @if ( $Peliculas->rented== 1 )
                <p><b>Estado:</b> Película actualmente alquilada</p>
                <button type="button" class="btn btn-danger">Devolver Película</button>
            @else
                <p><b>Estado:</b> Película Disponible</p>
                <button type="button" class="btn btn-primary">Alquilar Película</button>
            @endif
            <a href="{{ url('/catalog/edit/'. $Peliculas->id ) }}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Editar Película</a>
            <a href="../../catalog" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>Volver al listado</a>
        </div>
    </div>
</div>
@stop

