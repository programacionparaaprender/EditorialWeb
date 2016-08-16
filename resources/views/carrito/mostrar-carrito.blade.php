@extends('app')
@section('content')
<div class="container-fluid">
@if(sizeof($carrito) > 0)
    @foreach($carrito as $index => $carro)
        @if($index%4 == 0)
        <div class="row">
	@endif
	<div class="col-sm-6 col-md-3">
            <div class="thumbnail">
		<div class="caption">
                    {{$carro->name }}
                    {{$carro->qty}}
                    Bsf {{$carro->price*$carro->qty}}
                </div>
            </div>
        </div>
        @if(($index+1)%4 == 0)
	</div>
        @endif
    @endforeach

    <h3>Total a pagar Bsf {{$total}}</h3>

        <form action="carrito/procesar" method="GET">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" required>
            <input class="btn btn-success" role="button" type="submit" value="Realizar pedido"/>
        </form>
        <form action="carrito/destruir" method="GET">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" required>
            <input class="btn btn-danger" role="button" type="submit" value="Vaciar carrito"/>
        </form>
@else
<div class="alert alert-danger">
    <p>Al parecer aun no has elegido ningun libro para comprar.</p>
</div>
@endif
</div>
@endsection
