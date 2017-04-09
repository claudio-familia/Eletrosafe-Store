@extends('layout.base')
@section('content')
@include('layout.carrusel')
<div class="container">
	<div class="page-header">
	  <h1 class="text-danger">Nuevos Productos <small>Aprovecha las ofertas</small></h1>
	</div>
	<div class="row">
	@foreach($another as $np)
		<div class="col-sm-6 col-md-4">
	    	<div class="panel panel-default muestras">
		      	<img src="{{$np->image}}" height="300" width="300px">
		      	<div class="caption">
			        <h3>{{$np->name}}</h3>
			        <hr>	
			        <h4>Price:</h4><h3 class="text-center text-success">${{$np->price}}</h3>
			        <hr>
		    	    <p class="text-center"><a href="#" class="btn btn-danger" role="button">Añadir al carrito</a> <a href="#" class="btn btn-primary" role="button">Ver mas</a></p>
		      	</div>
	    	</div>
		</div>
	@endforeach
	</div>
	<!-- Video juegos-->

	<div class="page-header">
	  <h1 class="text-warning">Nuevos Productos <small>Video juegos</small></h1>
	</div>
	<div class="row">
	@foreach($videogames as $vg)
		<div class="col-sm-6 col-md-4">
	    	<div class="panel panel-default muestras">
		      	<a href="producto/{{$vg->id}}"><img src="{{$vg->image}}" height="300" width="300px"></a>
		      	<div class="caption">
			        <h3>{{$vg->name}}</h3>			        
		    	    <hr>	
			        <h4>Price:</h4><h3 class="text-center text-success">${{$vg->price}}</h3>
			        <hr>
		    	    <p class="text-center"><a href="#" class="btn btn-danger" role="button">Añadir al carrito</a> <a href="#" class="btn btn-primary" role="button">Ver mas</a></p>
		      	</div>
	    	</div>
		</div>		
	@endforeach
	</div>
		

	<!-- Musica-->

	<div class="page-header">
	  <h1 class="text-success">Nuevos Productos <small>Audio & Musica</small></h1>
	</div>
	<div class="row">
	@foreach($musica as $am)
		<div class="col-sm-6 col-md-4">
	    	<div class="panel panel-default muestras">
		      	<img src="{{$am->image}}" height="300" width="300px">
		      	<div class="caption">
			        <h3>{{$am->name}}</h3>			        
		    	    <hr>	
			        <h4>Price:</h4><h3 class="text-center text-success">${{$am->price}}</h3>
			        <hr>
		    	    <p class="text-center"><a href="#" class="btn btn-danger" role="button">Añadir al carrito</a> <a href="#" class="btn btn-primary" role="button">Ver mas</a></p>
		      	</div>
	    	</div>
		</div>		
	@endforeach
	</div>

	<!-- Computador-->

	<div class="page-header">
	  <h1>Nuevos Productos <small>Computadores, laptops y smartdevices </small></h1>
	</div>
	<div class="row">
		@foreach($pc as $pc)
		<div class="col-sm-6 col-md-4">
	    	<div class="panel panel-default muestras">
		      	<img src="{{$am->image}}" height="300" width="300px">
		      	<div class="caption">
			        <h3>{{$pc->name}}</h3>			        
		    	    <hr>	
			        <h4>Price:</h4><h3 class="text-center text-success">${{$pc->price}}</h3>
			        <hr>
		    	    <p class="text-center"><a href="#" class="btn btn-danger" role="button">Añadir al carrito</a> <a href="#" class="btn btn-primary" role="button">Ver mas</a></p>
		      	</div>
	    	</div>
		</div>		
	@endforeach
	</div>


	<!-- ropas y calzados-->
	
	<div class="page-header">
	  <h1>Nuevos Productos <small>Ropas y calzados</small></h1>
	</div>
	<div class="row">
		@foreach($ropas as $r)
		<div class="col-sm-6 col-md-4">
	    	<div class="panel panel-default muestras">
		      	<img src="{{$r->image}}" height="300" width="300px">
		      	<div class="caption">
			        <h3>{{$r->name}}</h3>			        
		    	    <hr>	
			        <h4>Price:</h4><h3 class="text-center text-success">${{$r->price}}</h3>
			        <hr>
		    	    <p class="text-center"><a href="#" class="btn btn-danger" role="button">Añadir al carrito</a> <a href="#" class="btn btn-primary" role="button">Ver mas</a></p>
		      	</div>
	    	</div>
		</div>		
	@endforeach
	</div>

	<!-- vehiculos-->

	<div class="page-header">
	  <h1>Nuevos Productos <small>Vehiculos</small></h1>
	</div>
	<div class="row">
		@foreach($cars as $cr)
		<div class="col-sm-6 col-md-4">
	    	<div class="panel panel-default muestras">
		      	<img src="{{$cr->image}}" height="300" width="300px">
		      	<div class="caption">
			        <h3>{{$cr->name}}</h3>			        
		    	    <hr>	
			        <h4>Price:</h4><h3 class="text-center text-success">${{$cr->price}}</h3>
			        <hr>
		    	    <p class="text-center"><a href="#" class="btn btn-danger" role="button">Añadir al carrito</a> <a href="#" class="btn btn-primary" role="button">Ver mas</a></p>
		      	</div>
	    	</div>
		</div>		
	@endforeach
	</div>	
</div>


@endsection