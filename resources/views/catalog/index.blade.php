@extends('layouts.master')
@section('title', 'Peliculas')
@section('content')
<div class="container">
    <div class="row">

        @foreach( $Peliculas as $pelicula )
        <div class="col-xs-6 col-sm-4 col-md-3 text-center">
            <a href="{{ url('/catalog/show/'. $pelicula->id ) }}">
                <img src="{{$pelicula->poster}}" style="height:200px"/>
                <h4 style="min-height:45px;margin:5px 0 10px 0">
                    {{$pelicula->title}}
                </h4>
            </a>
        </div>

        @endforeach

    </div>
</div>
@stop
