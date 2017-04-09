@extends('layout.base')
@section('content')
<div class="container">
    <div class="col-md-9">
    	<div class="page-header">
        	<h2>Contacto <small>Comentarios, Dudas y Sugerencias</small></h2>   
        </div>
        <form action="" method="post">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" autocomplete="off" class="form-control" placeholder="Nombre">
            </div>

            <div class="form-group">
                <label>Correo electronico
                    <div class="input-group">
                        <div class="input-group-addon">@</div>
                        <input type="text" name="correo" autocomplete="off" class="form-control" placeholder="correo electronico">
                    </div>
                </label>
            </div>

            <div class="form-group">
                <label for="mensaje"> Mensaje</label>
                <textarea class="form-control" id="mensaje" placeholder="Escribe tu mensaje"></textarea>                
            </div>

             <div class="form-group">
                <button type="submit" class="btn btn-primary">Enviar Mensaje <span class="glyphicon glyphicon-send"></span></button>
            </div>
        </form> 
    </div>
</div>
@endsection