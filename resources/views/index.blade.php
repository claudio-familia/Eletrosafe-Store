@extends('layout.base')
@section('content')
@include('layout.carrusel')
<div class="container">
	<div class="page-header">
	  <h1 class="text-danger">Nuevos Productos <small>Aprovecha las ofertas</small></h1>
	</div>
				
	<div class="row">
		<ul id="waterfall">
	@foreach($another as $np)
			<div class="col-sm-6 col-md-4 .article">
				<li class="show">
			    	<div class="panel panel-default muestras">
				      	<a href="producto/{{$np->id}}"><img src="{{$np->image}}" height="300" width="300px"></a>
				      	<div class="caption">
					        <h3>{{$np->name}}</h3>
					        <hr>	
					        <h4>Precio:</h4><h2 class="text-center"><span class="label label-warning">${{number_format($np->price)}}</span></h2>
					        <hr>
				    	    <p class="text-center"><a href="#" class="btn btn-danger" role="button">Añadir al carrito</a> <a href="producto/{{$np->id}}" class="btn btn-primary" role="button">Ver mas</a></p>
				      	</div>
			    	</div>
		    	</li>
			</div>
	@endforeach
		</ul>	
	</div>

	<!-- Video juegos-->



	<div class="page-header">
	  <h1 class="text-warning">Video juegos <small>Nuevos Productos</small></h1>
	</div>
	<div class="row">
	<ul id="waterfall">
	@foreach($videogames as $vg)
		<div class="col-sm-6 col-md-4">
		<li class="show">
	    	<div class="panel panel-default muestras">
		      	<a href="producto/{{$vg->id}}"><img src="{{$vg->image}}" height="300" width="300px"></a>
		      	<div class="caption">
			        <h3>{{$vg->name}}</h3>			        
		    	    <hr>	
			        <h4>Precio:</h4><h2 class="text-center"><span class="label label-warning">${{number_format($vg->price)}}</span></h2>
			        <hr>
		    	    <p class="text-center"><a href="#" class="btn btn-danger" role="button">Añadir al carrito</a> <a href="producto/{{$vg->id}}" class="btn btn-primary" role="button">Ver mas</a></p>
		      	</div>
	    	</div>
	    </li>
		</div>		
	@endforeach
	</div>
		
	<!-- Musica-->

	<div class="page-header">
	  <h1 class="text-success">Audio & Musica <small>Nuevos Productos</small></h1>
	</div>
	<div class="row">
	<ul id="waterfall">
	@foreach($musica as $am)
		<div class="col-sm-6 col-md-4">
			<li class="show">
		    	<div class="panel panel-default muestras">
			      	<a href="producto/{{$am->id}}"><img src="{{$am->image}}" height="300" width="300px"></a>
			      	<div class="caption">
				        <h3>{{$am->name}}</h3>			        
			    	    <hr>	
				        <h4>Precio:</h4><h2 class="text-center"><span class="label label-warning">${{number_format($am->price)}}</span></h2>
				        <hr>
			    	    <p class="text-center"><a href="#" class="btn btn-danger" role="button">Añadir al carrito</a> <a href="producto/{{$am->id}}" class="btn btn-primary" role="button">Ver mas</a></p>
			      	</div>
		    	</div>
	    	</li>
		</div>		
	@endforeach
	</ul>
	</div>


	<!-- Computador-->

	<div class="page-header">
	  <h1>Computadores, laptops y smartdevices <small> Nuevos Productos</small></h1>
	</div>
	<div class="row">
	<ul id="waterfall">
		@foreach($pc as $pc)
		<div class="col-sm-6 col-md-4">
		<li class="show">
	    	<div class="panel panel-default muestras">
		      	<a href="producto/{{$pc->id}}"><img src="{{$pc->image}}" height="300" width="300px"></a>
		      	<div class="caption">
			        <h3>{{$pc->name}}</h3>			        
		    	    <hr>	
			        <h4>Precio:</h4><h2 class="text-center"><span class="label label-warning">${{number_format($pc->price)}}</span></h2>
			        <hr>
		    	    <p class="text-center"><a href="#" class="btn btn-danger" role="button">Añadir al carrito</a> <a href="producto/{{$pc->id}}" class="btn btn-primary" role="button">Ver mas</a></p>
		      	</div>
	    	</div>
	    </li>
		</div>		
	@endforeach
	</ul>
	</div>



	


	<!-- ropas y calzados-->
	
	<div class="page-header">
	  <h1>Ropas y calzados <small>Nuevos Productos</small></h1>
	</div>
	<div class="row">
	<ul id="waterfall">
		@foreach($ropas as $r)
		<div class="col-sm-6 col-md-4">
		<li class="show">
	    	<div class="panel panel-default muestras">
		      	<a href="producto/{{$r->id}}"><img src="{{$r->image}}" height="300" width="300px"></a>
		      	<div class="caption">
			        <h3>{{$r->name}}</h3>			        
		    	    <hr>	
			        <h4>Precio:</h4><h2 class="text-center"><span class="label label-warning">${{number_format($r->price)}}</span></h2>
			        <hr>
		    	    <p class="text-center"><a href="#" class="btn btn-danger" role="button">Añadir al carrito</a> <a href="producto/{{$r->id}}" class="btn btn-primary" role="button">Ver mas</a></p>
		      	</div>
	    	</div>
	    </li>
		</div>		
	@endforeach
	</ul>
	</div>
	



	<!-- vehiculos-->

	<div class="page-header">
	  <h1>Vehiculos <small>Nuevos Productos</small></h1>
	</div>
	<div class="row">
	<ul id="waterfall">
		@foreach($cars as $cr)
		<div class="col-sm-6 col-md-4">
			<li class="show">
	    	<div class="panel panel-default muestras">
		      	<a href="producto/{{$cr->id}}"><img src="{{$cr->image}}" height="300" width="300px"></a>
		      	<div class="caption">
			        <h3>{{$cr->name}}</h3>			        
		    	    <hr>	
			        <h4>Precio:</h4><h2 class="text-center"><span class="label label-warning">${{number_format($cr->price)}}</span></h2>
			        <hr>
		    	    <p class="text-center"><a href="#" class="btn btn-danger" role="button">Añadir al carrito</a> <a href="producto/{{$cr->id}}" class="btn btn-primary" role="button">Ver mas</a></p>
		      	</div>
	    	</div>
	    	</li>
		</div>		
	@endforeach
	</ul>	
	</div>	
</div>

@endsection