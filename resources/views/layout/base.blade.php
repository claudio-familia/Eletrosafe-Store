<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta charset="utf-8" name="viewport" content="initial-scale=1,maximum-scale=1">
	<title>ElectroSafe Store</title>
	<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script> 
	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/jquery-ui.css')}}" rel="stylesheet">
    <link href="{{asset('css/estilos.css')}}" rel="stylesheet">       
</head>
<body>
	<header>
		<!-- User menu -->

		<nav class="navbar navbar-default user-navbar">
				<div class="container">
					<!-- Navbar Header-->
					<div class="navbar-header">

						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					    </button>

					    <a class="navbar-brand" href="{{url('/')}}">EletroSafe Store</a>

					</div>

					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li class="active"><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Iniciar Sesion</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> 0 Productos</a></li>
						</ul>

						<ul class="nav navbar-nav navbar-right visible-xs visible-sm hidden-md hidden-lg">
							<form class="navbar-form navbar-left" role="search">
							  <div class="form-group">
							    <input type="text" class="form-control" placeholder="Buscar">
							  </div>
							  <button type="submit" class="btn btn-default hidden-xs hidden-sm"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
							</form>
								<!-- another part of menu-->
							<li class="active"><a href="{{url('/')}}">Inicio</a></li>
				        	<li class="dropdown">
				        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias <span class="caret"></span></a>
				        	<ul class="dropdown-menu">
				        		<li><a href="#">Audio & Musica</a></li>
				        		<li role="separator" class="divider"></li>
					            <li><a href="#">Computadores, Laptops y smartdevices</a></li>
					            <li role="separator" class="divider"></li>
					            <li><a href="#">Video Juegos</a></li>
					            <li role="separator" class="divider"></li>
					            <li><a href="#">Ropas y calzados</a></li>
					            <li role="separator" class="divider"></li>
					            <li><a href="#">Vehiculos</a></li>
				        	</ul>
				        	</li>			 
				        	<li><a href="https://www.facebook.com/LibreEduc-134307750425073/">Sobre Nosotros</a></li>
				        	<li><a href="{{url('contactanos')}}">Contactanos</a></li>

						</ul>

					</div>
				</div>
		</nav>
		<nav class="navbar navbar-inverse main-navbar hidden-xs hidden-sm visible-md visible-lg">
			<div class="container">					
					<ul class="nav navbar-nav navbar-right">
				        <li class="active"><a href="{{url('/')}}">Inicio</a></li>
				        <li class="dropdown">
				        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias <span class="caret"></span></a>
				        	<ul class="dropdown-menu">
				        		<li><a href="#">Audio & Musica</a></li>
				        		<li role="separator" class="divider"></li>
					            <li><a href="#">Computadores, Laptops y smartdevices</a></li>
					            <li role="separator" class="divider"></li>
					            <li><a href="#">Video Juegos</a></li>
					            <li role="separator" class="divider"></li>
					            <li><a href="#">Ropas y calzados</a></li>
					            <li role="separator" class="divider"></li>
					            <li><a href="#">Vehiculos</a></li>
				        	</ul>
				        </li>			 
				        <li><a href="https://www.facebook.com/LibreEduc-134307750425073/" >Sobre Nosotros</a></li>
				        <li><a href="{{url('contactanos')}}">Contactanos</a></li>
				        <li>
					        <form class="navbar-form navbar-left" role="search">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Buscar">
								</div>
								<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
							</form>
						</li>
				    </ul>

			</div>
		</nav>	
	</header>

	

	@yield('content')

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-xs-12 col-sm-12">
					<h4>EletroSafe Store</h4>
					<p>La mejor tienda online del pais</p>
				</div>
				<div class="col-md-6 col-xs-12 col-sm-12">
					<ul class="list-inline text-right">						
						<li><a class="enlace" href="{{url('/')}}}">Inicio</a></li>						
						<li><a class="enlace" href="https://www.facebook.com/LibreEduc-134307750425073/">SobreNosotros</a></li>
					</ul>		
				</div>
			</div>
		</div>
	</footer>



	<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"> </script>
    <script type="text/javascript" src="{{asset('js/jquery-ui.js')}}"></script> 
    <script type="text/javascript" src="{{asset('https://code.jquery.com/jquery-1.12.4.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/newWaterfall.js')}}"></script> 
    <script type="text/javascript" src="{{asset('js/jquery.imgzoom.js')}}"></script>    
    <script type="text/javascript">
    $(document).ready(function waterfall() {
		$('#waterfall').NewWaterfall({
		  width: 360,
		  delay: 60,
		});		


	$('.imgBox').imgZoom();

	});

    </script>
    

</body>
</html>