<html lang="en"><head>
    <meta charset="utf-8">
    <title>Bootswatch: Cyborg</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="../css/custom.min.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../bower_components/html5shiv/dist/html5shiv.js"></script>
      <script src="../bower_components/respond/dest/respond.min.js"></script>
    <![endif]-->
    <script src="https://ssl.google-analytics.com/ga.js" async="" type="text/javascript"></script><script>

     var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-23019901-1']);
      _gaq.push(['_setDomainName', "bootswatch.com"]);
        _gaq.push(['_setAllowLinker', true]);
      _gaq.push(['_trackPageview']);

     (function() {
       var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
       ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
       var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
     })();

    </script>
  </head>
  <body>
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <a href="../" class="navbar-brand">Bootswatch</a>
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="navbar-collapse collapse" id="navbar-main">
            <ul class="nav navbar-nav">
<!--              <li class="dropdown">

                <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">Temas <span class="caret"></span></a>

                <ul class="dropdown-menu" aria-labelledby="themes">
                  <li><a href="/default">Default</a></li>
                  <li class="divider"></li>
                  <li><a href="/cerulean">Cerulean</a></li>
                  <li><a href="/cosmo">Cosmo</a></li>
                  <li><a href="/cyborg">Cyborg</a></li>
                  <li><a href="/darkly">Darkly</a></li>
                  <li><a href="/flatly">Flatly</a></li>
                  <li><a href="/journal">Journal</a></li>
                  <li><a href="/lumen">Lumen</a></li>
                  <li><a href="/paper">Paper</a></li>
                  <li><a href="/readable">Readable</a></li>
                  <li><a href="/sandstone">Sandstone</a></li>
                  <li><a href="/simplex">Simplex</a></li>
                  <li><a href="/slate">Slate</a></li>
                  <li><a href="/spacelab">Spacelab</a></li>
                  <li><a href="/superhero">Superhero</a></li>
                  <li><a href="/united">United</a></li>
                  <li><a href="/yeti">Yeti</a></li>
                </ul>
              </li>-->
<!--              <li>
                <a href="/">Inicio</a>
              </li>
              <li>
                <a href="http://news.bootswatch.com">Libros</a>
              </li>-->
              <li><a href="/">Inicio</a></li>
                    <li><a href="{{ url('libros/') }}">Libros</a></li>
                    @if (Auth::guest())
                    <p></p>
                    @else
                    <li><a href="{{ url('carrito/') }}">Carrito</a></li>
                    @if(Auth::user()->admin==1)
                    <li><a href="{{ url('reportes/') }}">Reportes</a></li>
                    <li><a href="{{ url('pedidos/') }}">Pedidos</a></li>
                    @endif
                    @endif
<!--              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download">Cyborg <span class="caret"></span></a>
                <ul class="dropdown-menu" aria-labelledby="download">
                  <li><a href="http://jsfiddle.net/bootswatch/q0gdqa1q/">Open Sandbox</a></li>
                  <li class="divider"></li>
                  <li><a href="./bootstrap.min.css">bootstrap.min.css</a></li>
                  <li><a href="./bootstrap.css">bootstrap.css</a></li>
                  <li class="divider"></li>
                  <li><a href="./variables.less">variables.less</a></li>
                  <li><a href="./bootswatch.less">bootswatch.less</a></li>
                  <li class="divider"></li>
                  <li><a href="./_variables.scss">_variables.scss</a></li>
                  <li><a href="./_bootswatch.scss">_bootswatch.scss</a></li>
                </ul>
              </li>-->
            </ul>

            <ul class="nav navbar-nav navbar-right">
<!--              <li><a href="/validacion/inicio" target="_blank">Iniciar Sesión</a></li>
              <li><a href="{{url('validacion/registro')}}" target="_blank">Registrarse</a></li>-->
<!--              <li><a href="/validacion/inicio">Iniciar sesión</a></li>
              <li><a href="{{url('validacion/registro')}}">Registrarse</a></li>-->
                    @if (Auth::guest())
                    <li><a href="/validacion/inicio">Iniciar sesión</a></li>
                    <li><a href="{{url('validacion/registro')}}">Registrarse</a></li>
                    @else
                    <li class="dropdown" >  
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/validado/representante/editar-perfil">Actualizar perfil</a></li>
                                <li><a href="/validacion/salida">Salir</a></li>
                            </ul>
                    </li>
                    
<!--                    <li class="dropdown-toggle" data-toggle="dropdown" href="#">Perfil <span class="caret"></span></li> 
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/validado/representante/editar-perfil">Actualizar perfil</a></li>
                            <li><a href="/validacion/salida">Salir</a></li>
			</ul>-->
                    @endif
            </ul>

          </div>
        </div>
      </div>
      @yield('content')
      <script src="../js/jquery-1.10.2.min.js"></script>
      <script src="../js/bootstrap.min.js"></script>
     <!--<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>-->
    <script src="../assets/js/custom.js"></script>
    </body>
</html>

