<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Factura {{$pedido->id}} </title>
        <link rel="stylesheet" href="{{ url('../css/style.css')}}" media="all" />
	<!-- Fonts -->
	<!--<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>-->
</head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <!--<img src="{{ url('../img/fondo.jpg')}}" width="100" height="100"/>-->
        <img src="{{url('./img/logo.jpg')}}"  width="50" height="50"/>
      </div>
      <div id="details" class="clearfix">
      <div id="company" class="clearfix">
        <div>Company Name</div>
        <div>455 Foggy Heights,<br /> AZ 85004, US</div>
        <div>(602) 519-0450</div>
        <div><a href="mailto:company@example.com">company@example.com</a></div>
      </div>
        <div id="client">
          <div class="to">Factura Nro: {{$pedido->id}}</div>
          <div class="date">Fecha de factura: {{$pedido->created_at}}</div>
          
          <div class="info">
              La factura esta en estado
                @if($pedido->idestado==1)
                    EnEspera
                @elseif($pedido->idestado==2)
                    Pagado
                @elseif($pedido->idestado==3)
                    Enviado
                @elseif($pedido->idestado==4)
                    Devuelto
                @endif
          </div>
          
          <h2 class="name">Representante: {{$representante->nombre}} {{$representante->apellido}}</h2>
          <div class="address">Dirección: {{$representante->direccion}}</div>
          <div class="email">email: <a href="mailto:john@example.com"> {{$representante->email}}</a></div>
        </div>
      </div>
    </header>
    <main>
     <table border="1" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th class="no">#</th>
            <th class="desc">NOMBRE</th>
            <th class="unit">PRECIO POR UNIDAD</th>
            <th class="qty">CANTIDAD</th>
            <th class="total">TOTAL</th>
          </tr>
        </thead>
        <tbody>
        @foreach($productos as $producto)
           <tr>
            <td class="no">{{$producto->id}}</td>
            <td class="desc"><h3>{{$producto->name}}</h3></td>
            <td class="unit">{{$producto->price}}</td>
            <td class="qty">{{$producto->qty}}</td>
            <td class="total">{{$producto->qty*$producto->price}}</td>
          </tr>
        @endforeach
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">TOTAL A PAGAR </td>
            <td>BsF {{$pedido->total}}</td>
          </tr>
        </tfoot>
      </table>
  </body>
</html>