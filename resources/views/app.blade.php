<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Editorial Web Santillanez</title>
        @yield('css')

        <!-- para bootstrap en archivos blade dentro de carpetas en views -->
        @include('bootstrap')

	<link rel="stylesheet" href="{{url('./css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{url('./css/bootstrap-theme.min.css')}}">
        <script src="{{url('./js/bootstrap.min.js')}}"></script>
        <script src="{{url('./js/jquery-2.2.3.min.js')}}"></script>

				<!--si no se coloca lo de abajo da error -->
			  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<header id="main-header">

	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">GestorL5</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">



		    <li><a href="{{ url('/')}}">Inicio</a></li>
                    <li><a href="{{ url('libros/') }}">Libros</a></li>
                    <li><a href="{{ url('busqueda') }}">Buscar</a></li>
										<li><a href="{{ url('excel') }}">Excel</a></li>
                    @if (Auth::guest())
                    <p></p>
                    @else
                    @if(Auth::user()->admin==1)
                    <li><a href="{{ url('reportes/') }}">Reportes</a></li>
                    <li><a href="{{ url('pedidos/') }}">Pedidos</a></li>
                    <li><a href="{{ url('validado/registrar-empleado') }}">Resitrar Empleados</a></li>
                    <li><a href="{{ url('validado/representante/rol') }}">Roles Representante</a></li>
                    <li><a href="{{ url('carrito/') }}">Carrito</a></li>
                    @elseif(Auth::user()->admin==0)
                    <li><a href="{{ url('carrito/') }}">Carrito</a></li>
                    <li><a href="{{ url('pedidos/compra') }}">Mis Pedidos</a></li>
                    @endif
                    @endif
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                    <li><a href="{{url('/validacion/inicio')}}">Iniciar sesión</a></li>
                    <li><a href="{{url('validacion/registro')}}">Registrarse</a></li>
                    @else

                    <ul class="nav nav-tabs">
  					<li role="presentation" class="dropdown">
    				<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
      				Cuenta
      				<span class="caret"></span> <!-- esta pinta la flecha -->
    				</a>
    				<ul class="dropdown-menu">
      					<li><a href="{{ url('/validado/representante/editar-perfil') }}">Actualizar perfil</a></li>
      					<li><a href="{{ url('/validacion/salida') }}">Salir</a></li>
    				</ul>
  					</li>
					</ul>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

</header>
	<div id="workshop-list">
	<article id="w1" class="workshop workshop-left">
		@yield('content')
	</article>
	<article id="w1" class="workshop workshop-right">
		@yield('content2')
	</article>
	</div>
    <footer>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-5">
				<h3>PRÓXIMOS WORKSHOPS</h3>
				<ul id="next-workshops">
					<li><a href="/detail">Título del primer workshop de pruebas</a></li>
					<li><a href="/detail">Título del segundo workshop de pruebas</a></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-7 col-md-6 col-md-offset-1">
				<h3>NO TE PIERDAS NUESTRAS NOVEDADES</h3>
				<form id="subscribe-form" action="">
					<div class="row">
						<div class="col-xs-7 col-sm-8">
							<div class="form-group">
								<label class="sr-only" for="email">tu correo electrónico</label>
								<input type="text" id="email" name="email" class="form-control input-lg" placeholder="tu correo electrónico">
							</div>
						</div>
						<div class="col-xs-5 col-sm-4">
							<button class="btn btn-custom btn-lg">SUSCRIBIRME</button>
						</div>
					</div>
				</form>
			</div>
			<div class="clearfix"></div>
			<div class="col-xs-12 col-sm-5">
				<h3>SOBRE LOS WORKSHOPS</h3>
				<p>Estos workshps son el resultado de la suma de la ilusión y esfuerzos de <a href="#">Empresa</a>, <a href="#">Empresa 2</a> y <a href="#">Persona</a></p>
				<p>Una apuesta diferente al panorama formativo nacional aunando workshops de primer nivel, impartidos por reconocidos profesionales con una experiencia de fin de semana, en un entorno diferente. </p>
			</div>
			<div class="col-xs-12 col-sm-7 col-md-6 col-md-offset-1">
				<h3>TE GUSTA? CORRE LA VOZ</h3>
				<p>Si te gusta esta filosofía de formación, o has acudido a uno de nuestros workshops y te hemos convencido, ayúdanos a promocionarlos por Internet para que otros puedan disfrutar de ellos:</p>
				<!-- Insertar addthis -->
			</div>
		</div>
	</div>
</footer>

     <!--Scripts-->
     @yield('scripts')
     <script src={{url('./js/bootstrap.min.js')}}"></script>
     <!--<script src="js/vue.js"></script>-->
</body>
</html>
