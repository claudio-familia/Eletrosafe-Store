@extends('layout.base')
@section('content')
<div class="container">
	<div class="page-header">
	  <h1>{{$product->name}} <small>{{$category}}</small></h1>
	</div>
	<div class="row">		
		<div class="col-md-6 col-sm-12">
			<img src="{{$product->image}}" width="500px" alt="">
		</div>		
		<div class="col-md-6 col-sm-12">
			<form action="">
				<!-- Precios del producto  -->
				<h2>Detalles del producto</h2>
				<hr>
	            <div class="form-group">
	            	<label class="col-sm-3 col-md-3 control-label">Precio:</label>
	            	<div class="col-sm-8 col-md-9">
	                	<h3 class="precio">${{$product->price}} <small>25%</small></h3>                	
	              	</div>
	            </div>
	            <br><br>
	            <div class="form-group">
					<div class="col-md-3">
	            		<label for="cantidad">Cantidad:</label>
	            	</div>
	            	<div class="col-md-9">
	            		<input type="number" placeholder="Escriba la cantidad que desea del producto" id="cantidad" name="cantidad" min="1" max="99" class="form-control">
	            	</div>
	            </div>
	            <br><br>
	            <div class="form-group">
	            	<label class="col-sm-3 col-md-3 control-label">Disponibilidad:</label>
	            	<div class="col-sm-8 col-md-9">
	                	<h3 class="precio text-success">20</h3>
	              	</div>
	            </div>
	            <br><br>
	            <div class="form-group">
	            	<label class="col-sm-3 col-md-3 control-label">Descripcion:</label>
	            	<div class="col-sm-8 col-md-9">
	                	<h5 class="precio">{{$product->description}}</h5>
	              	</div>
	            </div>
	            <br><br>
				<div class="form-group">
	            	<label class="col-sm-3 col-md-3">Detalles:</label>
	            	<div class="col-sm-8 col-md-9">
	                	<h5 class="precio">{{$product->extract}}</h5>
	              	</div>
	            </div>
				<br><br><hr>				
				<div class="form-group">
					<div class="pull-right">
						<button class="btn btn-primary btn-lg" aria-label="Left Align">
							<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Añadir al carrito
						</button>
						<button class="btn btn-warning btn-lg" aria-label="Left Align">
							<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Comprar
						</button>
					</div>
				</div>
            </form>
		</div>
	</div>	

	<hr>
</div>

@endsection