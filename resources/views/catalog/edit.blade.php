@extends('layouts.master')
@section('title', 'Edicion')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-offset-2">
            <form method="POST" action="{{action('CatalogController@putEdit', $Peliculas->id)}}">
                 {{ method_field('PUT') }}
                 {{ csrf_field() }}
                <fieldset>
                <!-- Form Name -->
                <legend><h2>Modificar Pelicula</h2></legend>
                </fieldset>
                <div class="form-group"> 
                    <label for="title" class="control-label">Titulo</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Titulo" value="{{$Peliculas->title}}">
                </div>    

                <div class="form-group"> 
                    <label for="year" class="control-label">Año</label>
                    <input type="text" class="form-control" id="year" name="year" placeholder="Año" value="{{$Peliculas->year}}">
                </div>                    

                <div class="form-group"> 
                    <label for="director" class="control-label">Director</label>
                    <input type="text" class="form-control" id="director" name="director" placeholder="Director" value="{{$Peliculas->director}}">
                </div>    

                <div class="form-group"> 
                    <label for="poster" class="control-label">Poster</label>
                    <input type="text" class="form-control" id="poster" name="poster" placeholder="Poster" value="{{ $Peliculas->poster}}">
                </div>                                    

                <div class="form-group">
                  <label class="control-label" for="synopsys">Resumen</label>                         
                  <textarea class="form-control" id="synopsis" name="synopsis"  placeholder="Resumen">{{ $Peliculas->synopsis}}</textarea>
                </div>    

                <div class="form-group"> <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Modificar Pelicula</button>
                </div> 

            </form>
        </div>
    </div>
</div>

@stop
