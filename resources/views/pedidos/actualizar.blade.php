@extends('app')

@section('content')
<div class="container-fluid">
	<form class="form-horizontal" role="form" method="POST" action="{{ url('pedidos/actualizar') }}" enctype="multipart/form-data">
		<!--<input type="hidden" name="_token" value="{{ csrf_token() }}" required> -->
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="id" value="{{$pedido->id }}" required>
        <div class="form-group required">
			<label class="col-md-4 control-label">ID del pedido {{$pedido->id}} </label>
		</div>
		<div class="form-group required">
            <label class="col-md-4 control-label">Estado del pedido nuevo</label>
            <div class="col-md-6">
                <input type="text" class="form-control" name="selector" value="{{$pedido->idestado}}" required>
			</div>
<!--            <div class="col-md-6">
            <select name="selector" required>
                <optgroup label="Estados">
                  <option value="1" selected>EnEspera</option>
                  <option value="2">Pagado</option>
                  <option value="3">Enviado</option>
                  <option value="4">Devuelto</option>
                </optgroup>
            </select>
            </div>-->
		</div>
		<div class="form-group">
			<div class="col-md-6 col-md-offset-4">
				<button type="submit" class="btn btn-primary">
					Actualizar pedido
				</button>
			</div>
		</div>
	</form>
</div>
@endsection

