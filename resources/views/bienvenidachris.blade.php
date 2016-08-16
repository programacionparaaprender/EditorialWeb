<!DOCTYPE html>
<html lang="es">
<link rel="stylesheet" href="/css/style.css">
<meta name="viewport" content="initial-scale=1.0">

<head>
    <meta charset="UTF-8">
    <title>Editorial</title>
</head>

<body>
<!--    <h1>Laravel 5.1</h1>-->
    <button id="arrow">
        <span>Leer Más ↓</span>
    </button>

    <div id="pagepiling">

        <div class="section" id="section1">
            <div>
                <navbar id="navbar">
                    <a href="index.html"><img id="logo" src="/imgs/logo-santiyanez.png" class="imgSVG" alt="" /></a>
                    <img id="formaCatalogo" src="/imgs/formaCatalogo.png" alt="">
                    <a href="{{ url('libros/') }}" id="catalogo">Catalogo</a>
                    <img id="nombre" src="/imgs/Santiyánez.png" alt="">
                    <a href="{{ url('busqueda') }}"><img id="buscarIcon" src="/imgs/buscar.png" alt=""></a>
                    <span id="separador">|</span>
                    <a href="/validacion/inicio" id="entrar">Entrar</a>
                </navbar>
            </div>
            <h1 id="titulo">El libro es fuerza, es valor, es alimento; antorcha <br>del pensamiento y manantial del amor.</h1>
            <a href=""><img id="playIcon" src="/imgs/play107.png" alt=""></a>
            <div>
                <a href="{{url('validacion/registro')}}" id="registrarse">Registrarse</a>
                <img id="correo" src="/imgs/correo.png" alt="">
                <span class="registro" id="notaRegistro">Solo persona jurídica</span>
            </div>

        </div>

        <div class="section" id="section2">
            <h1 id="textTematicas">Libros de diferentes tematicas y en distintos niveles <br> 
para una amplia diversidad de lectores.</h1>
            <ul id="tiposCat">
                <li><a href="">Escolares</a></li>
                <li><a href="">Literarios</a></li>
                <li><a href="">Biográficos</a></li>
                <li><a href="">Economía</a></li>
                <li><a href="">Cientificos|</a></li>
            </ul>
            <img src="/imgs/imagenesdelibros.png" alt="" id="imgLibros">
        </div>

        <div class="section" id="section3">
            <h1 id="editorial">Una editorial entregada a sus lectores</h1>
            <img src="/imgs/student1.png" alt="" id="studentIcon">
            <img src="/imgs/book93.png" alt="" id="bookIcon">
            <img src="/imgs/telemarketer8.png" alt="" id="telemIcon">
            <img src="/imgs/truck.png" alt="" id="truckIcon">
            <div id="textos">
                <p id="textApoyamos">Apoyamos la educación en las instituciones escolares, ofreciendole libros de textos para sus matriculantes
                    un 30% menos del costo total.</p>
                <p id="textCalidad">Los libros son impresos y empastados con material de calidad, cada libro nos certifica como una empresa que
                    entrega ejemplares con los mejores acabados.</p>
                <p id="textSugerencia">Escuchamos las sugerencias de nuestros lectores para que en cada edición de un libro mejore completamente
                    en el aspecto de la sugerencia.</p>
                <p id="textEntrega">Los esfuerzos para alcanzar los tiempos de entrega nos situa en una de las empresas mas responsables en cuanto
                    a la disponibilidad de un material cuando realmente se necesita.</p>
            </div>
        </div>

        <div class="section" id="section4">
            <footer>
                <h1 id="finalMsg">Nos encataria saber sobre tu experiencia con nosotros.<br></h1>
                <p id="textPregunta">Si tienes alguna pregunta puedes hacerlanosla
                    <br> para agilizar los tiempos de comunicación.
                    <br>
                </p>
                <a href="" id="contactoModal">Ponte en contacto con la empresa</a>
                <br>
                <span id="copyr">© 2015, Santiyánez C.A.</span>
                <a href=""><img src="./imgs/facebook31.png" alt="" id="faceIcon"></a>
                <a href=""><img src="./imgs/Twitter.png" alt="" id="twitterIcon"></a>
                <span id="derechos">Todos los derechos reservados.</span>
                
            </footer>
        </div>

    </div>
</body>
<script src="/js/jquery-2.1.4.min.js"></script>
<script src="/js/jquery.pagepiling.min.js"></script>
<script src="/js/slide.js"></script>
<script src="/js/helpers.js"></script>

</html>