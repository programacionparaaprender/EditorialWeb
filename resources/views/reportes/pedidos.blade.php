<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pedidos </title>
        <link rel="stylesheet" href="{{ url('../css/style.css')}}" media="all" />
</head>
<body>
<div class="container-fluid">
@if(sizeof($pedidos) > 0)

<!--tabla de estado en espera-->
<h1>Pedidos en espera</h1>
<table border="1" cellspacing="0" cellpadding="0">
<thead>
<tr>
    <th class="nro">Pedido Nro </th
    <th class="nombre">Nombre y Apellido representante</th>
    <th class="estado">Estado del pedido</th>
    <th class="fecha">Fecha</th>
</tr>
</thead>
<tbody>
@foreach($pedidos as $pedido)
@if($pedido->idestado==1)
<tr>
    <td>
        {{$pedido->id}}
    </td>
    @foreach($representantes as $representante)
    @if($representante->id == $pedido->idrepresentante)
    <td>
        {{ $representante->nombre}}{{ $representante->apellido}}   
    </td>
    @endif
    @endforeach
    <td>
    @foreach($estadopedidos as $estadopedido)
    @if($estadopedido->id==$pedido->idestado)
    {{$estadopedido->nombre}}
    @endif
    @endforeach
    </td>
    <td>
        {{ $pedido->created_at }}
    </td>
</tr>
@endif
@endforeach
</tbody>
</table>



<!--tabla de estado pagados-->
<h1>Pedidos pagados</h1>
<table border="1" cellspacing="0" cellpadding="0">
<thead>
<tr>
    <th class="nro">Pedido Nro </th
    <th class="nombre">Nombre y Apellido representante</th>
    <th class="estado">Estado del pedido</th>
    <th class="fecha">Fecha</th>
</tr>
</thead>
<tbody>
@foreach($pedidos as $pedido)
@if($pedido->idestado==2)
<tr>
    <td>
        {{$pedido->id}}
    </td>
    @foreach($representantes as $representante)
    @if($representante->id == $pedido->idrepresentante)
    <td>
        {{ $representante->nombre}}{{ $representante->apellido}}
    </td>
    @endif
    @endforeach
    <td>
    @foreach($estadopedidos as $estadopedido)
    @if($estadopedido->id==$pedido->idestado)
    {{$estadopedido->nombre}}
    @endif
    @endforeach
    </td>
    <td>
        {{ $pedido->created_at }}
    </td>
</tr>
@endif
@endforeach
</tbody>
</table>



<!--tabla de estado enviados-->
<h1>Pedidos enviados</h1>
<table border="1" cellspacing="0" cellpadding="0">
<thead>
<tr>
    <th class="nro">Pedido Nro </th
    <th class="nombre">Nombre y Apellido representante</th>
    <th class="estado">Estado del pedido</th>
    <th class="fecha">Fecha</th>
</tr>
</thead>
<tbody>
@foreach($pedidos as $pedido)
@if($pedido->idestado==3)
<tr>
    <td>
        {{$pedido->id}}
    </td>
    @foreach($representantes as $representante)
    @if($representante->id == $pedido->idrepresentante)
    <td>
        {{ $representante->nombre}}{{ $representante->apellido}} 
    </td>
    @endif
    @endforeach
    <td>
    @foreach($estadopedidos as $estadopedido)
    @if($estadopedido->id==$pedido->idestado)
    {{$estadopedido->nombre}}
    @endif
    @endforeach
    </td>
    <td>
        {{ $pedido->created_at }}
    </td>

</tr>
@endif
@endforeach
</tbody>
</table>



<!--tabla de estado devuelto-->
<h1>Pedidos devueltos</h1>
<table border="1" cellspacing="0" cellpadding="0">
<thead>
<tr>
    <th class="nro">Pedido Nro </th
    <th class="nombre">Nombre y Apellido representante</th>
    <th class="estado">Estado del pedido</th>
    <th class="fecha">Fecha</th>
</tr>
</thead>
<tbody>
@foreach($pedidos as $pedido)
@if($pedido->idestado==4)
<tr>
    <td>
        {{$pedido->id}}
    </td>
    @foreach($representantes as $representante)
    @if($representante->id == $pedido->idrepresentante)
    <td>
        {{ $representante->nombre}}{{ $representante->apellido}}
    </td>
    @endif
    @endforeach
    <td>
    @foreach($estadopedidos as $estadopedido)
    @if($estadopedido->id==$pedido->idestado)
    {{$estadopedido->nombre}}
    @endif
    @endforeach
    </td>
    <td>
        {{ $pedido->created_at }}
    </td>
</tr>
@endif
@endforeach
</tbody>
</table>



<!--tabla de estado aprobado-->
<h1>Pedidos aprobados</h1>
<table border="1" cellspacing="0" cellpadding="0">
<thead>
<tr>
    <th class="nro">Pedido Nro </th
    <th class="nombre">Nombre y Apellido representante</th>
    <th class="estado">Estado del pedido</th>
    <th class="fecha">Fecha</th>
</tr>
</thead>
<tbody>
@foreach($pedidos as $pedido)
@if($pedido->idestado==5)
<tr>
    <td>
        {{$pedido->id}}
    </td>
    @foreach($representantes as $representante)
    @if($representante->id == $pedido->idrepresentante)
    <td>
        {{ $representante->nombre}}{{ $representante->apellido}} 
    </td>
    @endif
    @endforeach
    <td>
    @foreach($estadopedidos as $estadopedido)
    @if($estadopedido->id==$pedido->idestado)
    {{$estadopedido->nombre}}
    @endif
    @endforeach
    </td>
    <td>
        {{ $pedido->created_at }}
    </td>
</tr>
@endif
@endforeach
</tbody>
</table>

@else
<div class="alert alert-danger">
    <p>Al parecer no tiene pedidos actualmente.</p>
</div>
@endif
</div>
</body>
</html>
