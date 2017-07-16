@extends('layouts.master')
@section('title', 'Crear Pelicula')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-offset-2">            
            <form method="POST" action="{{action('CatalogController@postCreate')}}">
                {{ method_field('POST') }}
                {{ csrf_field() }}
                <fieldset>
                <!-- Form Name -->
                <legend><h2>Crear Pelicula</h2></legend>
                </fieldset>
                <div class="form-group"> 
                    <label for="title" class="control-label">Titulo</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Titulo">
                </div>    

                <div class="form-group"> 
                    <label for="year" class="control-label">Año</label>
                    <input type="text" class="form-control" id="year" name="year" placeholder="Año">
                </div>                    

                <div class="form-group"> 
                    <label for="director" class="control-label">Director</label>
                    <input type="text" class="form-control" id="director" name="director" placeholder="Director">
                </div>    

                <div class="form-group"> 
                    <label for="poster" class="control-label">Poster</label>
                    <input type="text" class="form-control" id="poster" name="poster" placeholder="Poster">
                </div>                                    

                <div class="form-group">
                  <label class="control-label" for="synopsys">Resumen</label>                         
                  <textarea class="form-control" id="synopsis" name="synopsis"  placeholder="Resumen"></textarea>
                </div>    

                <div class="form-group"> <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Añadir Pelicula</button>
                </div> 

            </form>
        </div>
    </div>
</div>
  

@stop
