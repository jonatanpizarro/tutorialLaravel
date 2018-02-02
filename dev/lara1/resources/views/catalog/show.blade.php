@extends('layouts.master')

@section('content')



     <div class="row">

    <div class="col-sm-4">

        <img src="{{ $arrayPeliculas['poster'] }}" style=". . ."/>

    </div>
    <div class="col-sm-8">
    	<h1><b>{{ $arrayPeliculas['title'] }} </b></h1>
    	<h2>Any: <b> {{ $arrayPeliculas['year'] }}</b></h2>
    	<h3>Director : <b> {{ $arrayPeliculas['director'] }}</b></h3>
       	<p>Resumen : <b>{{ $arrayPeliculas['synopsis'] }}</b></p>

       	
       	<?php  
       		if ($arrayPeliculas['rented']==false) {
       			echo "<p> Estado : <b>No alquilada</b></p>";
       			echo "<button class='btn btn-danger' type='button'>Alquila pelicula</button>";
       		}else{
       			echo "<p> Estado : <b>Alquilada</b></p>";
       			echo "<button class='btn btn-danger' type='button'>Devolver pelicula</button>";
       		}

       	?>
       	
       	<button class="btn btn-warning" type="button">Editar pelicula</button>
       	<a href="../" class="btn btn-secondary" >Volver al listado></a>
    	
        

    </div>
</div>

@stop

