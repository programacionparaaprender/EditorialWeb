@extends('app')
@section('content')
<div class="container-fluid">
@if(sizeof($pedidos) > 0)
<table border="1">
<tr>
    <td>Pedido Nro </td>
    <td>Nombre y Apellido representante</td>
    <td>Estado del pedido</td>
    <td>Actualizar</td>
</tr>
<!--<div class="row">
  <div class="col-sm-1">Pedido Nro</div>
  <div class="col-sm-2">Nombre y Apellido</div>
  <div class="col-sm-3">Dirección</div>
  <div class='col-sm-3'>Estado del pedido</div>
  <div class='col-sm-3'>Nro del pedido</div>
  <div class='col-sm-4'>Actualizar</div>
</div>-->
@foreach($pedidos as $pedido)
<tr>
<!--<div class="row">-->
    <td>
    <!--<div class="col-sm-1">-->
        {{$pedido->id}}
    <!--</div>-->
    </td>
    @foreach($representantes as $representante)
    @if($representante->id == $pedido->idrepresentante)
    <td>
    <!--<div class="col-sm-2">-->
        <p><a href="{{url('pedidos/mostrar-representante',[$pedido->id])}}">{{ $representante->nombre}}{{ $representante->apellido}}</a></p>
    <!--</div>-->   
    </td>
    @endif
    @endforeach

      <form class="form-horizontal" role="form" action="{{url('pedidos/actualizar')}}" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{ csrf_token() }}" required>
          <input type="hidden" name="id" value="{{$pedido->id }}" required>
          <div class="form-group required">

            <!--<div class="col-sm-3">-->
            <td>
            <select name="selector" required>
                <optgroup label="Estados">
                    @if($pedido->idestado==1)
                    <option value="1" selected>EnEspera</option>
                    <option value="2">Pagado</option>
                    <option value="3">Enviado</option>
                    <option value="4">Devuelto</option>
                    @elseif($pedido->idestado==2)
                    <option value="1">EnEspera</option>
                    <option value="2" selected>Pagado</option>
                    <option value="3">Enviado</option>
                    <option value="4">Devuelto</option>
                    @elseif($pedido->idestado==3)
                    <option value="1">EnEspera</option>
                    <option value="2">Pagado</option>
                    <option value="3" selected>Enviado</option>
                    <option value="4">Devuelto</option>
                    @elseif($pedido->idestado==4)
                    <option value="1">EnEspera</option>
                    <option value="2">Pagado</option>
                    <option value="3">Enviado</option>
                    <option value="4" selected>Devuelto</option>
                    @endif
                </optgroup>
            </select>
            <!--</div>-->
            </td>
          </div>
          <div class="form-group">
              <td>
            <!--<div class="col-sm-4 col-md-offset-4">-->
              <button type="submit" class="btn btn-primary">
              Actualizar pedido
              </button>
              <a href="{{url('pedidos/factura',[$pedido->id])}}" class="btn btn-default" role="button" target="_blank">Visualizar Factura</a>
            <!--</div>-->
              </td>
        </div>
      </form>
    <!--</div>-->
<!--</div>-->
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

