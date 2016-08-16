@extends('app')
@section('content')
<div class="container-fluid">
<form class="form-horizontal" role="form" action="{{url('pedidos/notificar')}}" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" required>
    <input type="hidden" name="id" value="{{$pedido->id }}" required>
    <div class="form-group">
        <label class="col-md-4 control-label">Ingrese banco</label>
        <div class="col-md-6">
            <input type="text" class="form-control" name="NombreBanco" value="">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Ingrese numero de operación</label>
        <div class="col-md-6">
            <input type="text" class="form-control" name="NroOperacion" value="">
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Notificar</button>
    </div>
</form>
@endsection

