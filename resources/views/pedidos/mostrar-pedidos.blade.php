@extends('app')
@section('content')
<div class="container-fluid">
@if(sizeof($pedidos) > 0)

<!--tabla de estado en espera-->
<h1>Pedidos en espera</h1>
<table border="1">
<tr>
    <td>Pedido Nro </td>
    <td>Nombre y Apellido representante</td>
    <td>Estado del pedido</td>
    <td>Fecha</td>
    <td>Actualizar</td>
</tr>
@foreach($pedidos as $pedido)
@if($pedido->idestado==1)
<tr>
    <td>
        {{$pedido->id}}
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
                    @foreach($estadopedidos as $estadopedido)
                    @if($estadopedido->id!=$pedido->idestado)
                    <option value="{{$estadopedido->id }}">{{$estadopedido->nombre}}</option>
                    @else
                    <option value="{{ $pedido->idestado }}" selected>{{$estadopedido->nombre}}</option>
                    @endif
                    @endforeach
                </optgroup>
            </select>
            <!--</div>-->
            </td>
          </div>
            <td>
            {{ $pedido->created_at }}
            </td>
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
</tr>
@endif
@endforeach
</table>

<!--tabla de estado pagado-->
<h1>Pedidos pagados</h1>
<table border="1">
<tr>
    <td>Pedido Nro </td>
    <td>Nombre y Apellido representante</td>
    <td>Estado del pedido</td>
    <td>Fecha</td>
    <td>Actualizar</td>
</tr>

@foreach($pedidos as $pedido)
@if($pedido->idestado==2)
<tr>
    <td>
        {{$pedido->id}}
    </td>
    @foreach($representantes as $representante2)
    @if($representante2->id == $pedido->idrepresentante)
    <td>
        <p><a href="{{url('pedidos/mostrar-representante',[$pedido->id])}}">{{ $representante2->nombre}}{{ $representante2->apellido}}</a></p>
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
                    @foreach($estadopedidos as $estadopedido)
                    @if($estadopedido->id!=$pedido->idestado)
                    <option value="{{$estadopedido->id }}">{{$estadopedido->nombre}}</option>
                    @else
                    <option value="{{ $pedido->idestado }}" selected>{{$estadopedido->nombre}}</option>
                    @endif
                    @endforeach
                </optgroup>
            </select>
            <!--</div>-->
            </td>
          </div>
          <td>
        {{ $pedido->created_at }}
           </td>
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
</tr>
@endif
@endforeach
</table>

<!--tabla de estado enviado-->
<h1>Pedidos enviados</h1>
<table border="1">
<tr>
    <td>Pedido Nro </td>
    <td>Nombre y Apellido representante</td>
    <td>Estado del pedido</td>
    <td>Fecha</td>
    <td>Actualizar</td>
</tr>

@foreach($pedidos as $pedido)
@if($pedido->idestado==3)
<tr>
    <td>
        {{$pedido->id}}
    </td>
    @foreach($representantes as $representante2)
    @if($representante2->id == $pedido->idrepresentante)
    <td>
        <p><a href="{{url('pedidos/mostrar-representante',[$pedido->id])}}">{{ $representante2->nombre}}{{ $representante2->apellido}}</a></p>
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
                    @foreach($estadopedidos as $estadopedido)
                    @if($estadopedido->id!=$pedido->idestado)
                    <option value="{{$estadopedido->id }}">{{$estadopedido->nombre}}</option>
                    @else
                    <option value="{{ $pedido->idestado }}" selected>{{$estadopedido->nombre}}</option>
                    @endif
                    @endforeach
                </optgroup>
            </select>
            <!--</div>-->
            </td>
          </div>
            <td>
        {{ $pedido->created_at }}
            </td>
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
</tr>
@endif
@endforeach
</table>

<!--tabla de estado devuelto-->
<h1>Pedidos devuelto</h1>
<table border="1">
<tr>
    <td>Pedido Nro </td>
    <td>Nombre y Apellido representante</td>
    <td>Estado del pedido</td>
    <td>Fecha</td>
    <td>Actualizar</td>
</tr>

@foreach($pedidos as $pedido)
@if($pedido->idestado==4)
<tr>
    <td>
        {{$pedido->id}}
    </td>
    @foreach($representantes as $representante2)
    @if($representante2->id == $pedido->idrepresentante)
    <td>
        <p><a href="{{url('pedidos/mostrar-representante',[$pedido->id])}}">{{ $representante2->nombre}}{{ $representante2->apellido}}</a></p>
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
                    @foreach($estadopedidos as $estadopedido)
                    @if($estadopedido->id!=$pedido->idestado)
                    <option value="{{$estadopedido->id }}">{{$estadopedido->nombre}}</option>
                    @else
                    <option value="{{ $pedido->idestado }}" selected>{{$estadopedido->nombre}}</option>
                    @endif
                    @endforeach
                </optgroup>
            </select>
            <!--</div>-->
            </td>
          </div>
            <td>
        {{ $pedido->created_at }}
            </td>
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
</tr>
@endif
@endforeach
</table>

<!--tabla de estado aprobado-->
<h1>Pedidos aprobados</h1>
<table border="1">
<tr>
    <td>Pedido Nro </td>
    <td>Nombre y Apellido representante</td>
    <td>Estado del pedido</td>
    <td>Fecha</td>
    <td>Actualizar</td>
</tr>

@foreach($pedidos as $pedido)
@if($pedido->idestado==5)
<tr>
    <td>
        {{$pedido->id}}
    </td>
    @foreach($representantes as $representante2)
    @if($representante2->id == $pedido->idrepresentante)
    <td>
        <p><a href="{{url('pedidos/mostrar-representante',[$pedido->id])}}">{{ $representante2->nombre}}{{ $representante2->apellido}}</a></p>
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
                    @foreach($estadopedidos as $estadopedido)
                    @if($estadopedido->id!=$pedido->idestado)
                    <option value="{{$estadopedido->id }}">{{$estadopedido->nombre}}</option>
                    @else
                    <option value="{{ $pedido->idestado }}" selected>{{$estadopedido->nombre}}</option>
                    @endif
                    @endforeach
                </optgroup>
            </select>
            <!--</div>-->
            </td>
          </div>
            <td>
            {{ $pedido->created_at }}
            </td>
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
</tr>
@endif
@endforeach
</table>
@else
<div class="alert alert-danger">
    <p>Al parecer no tiene pedidos actualmente.</p>
</div>
@endif
</div>
@endsection
