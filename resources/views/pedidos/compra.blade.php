@extends('app')
@section('content')
<div class="container-fluid">
@if(sizeof($pedidos) > 0)
<table border="1">
<tr>
    <td>Pedido Nro </td>
    <td>Nombre y Apellido</td>
    <td>Estado del pedido</td>
    <td>Fecha</td>
    <td>Visualizar</td>    
</tr>
@foreach($pedidos as $pedido)
<tr>
    <td>
        {{$pedido->id}}
    </td>
    @foreach($representantes as $representante)
    @if($representante->id == $pedido->idrepresentante)
    <td>
        <p>{{ $representante->nombre}}{{ $representante->apellido}}</p>
    </td>
    @endif
    @endforeach
    <td>
                @if($pedido->idestado==1)
                    EnEspera
                @elseif($pedido->idestado==2)
                    Pagado
                @elseif($pedido->idestado==3)
                    Enviado
                @elseif($pedido->idestado==4)
                    Devuelto
                @endif
    </td>
    <td>
              {{ $pedido->created_at }}
    </td>
    <td>
        <a href="{{url('pedidos/notificar',[$pedido->id])}}" class="btn btn-default" role="button" target="_blank">Notificar pago</a>
        <a href="{{url('pedidos/factura',[$pedido->id])}}" class="btn btn-default" role="button" target="_blank">Visualizar Factura</a>
    </td>
</tr>
@endforeach
</table>
@else
<div class="alert alert-danger">
    <p>Al parecer no tiene pedidos actualmente.</p>
</div>
@endif
</div>
@endsection
