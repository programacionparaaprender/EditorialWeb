@extends('app')
@section('content')
@if(Session::has('creada'))
<div class="alert alert-success">
	<p>{{Session::get('creada')}}</p>
</div>
@endif
<div class="container-fluid">
<form class="form-inline"action="{{ url('busqueda/') }}" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" required>
    <input type="text" class="form-control" name="buscarlibro" required>
    <input class="btn btn-default" role="button" type="submit" value="Buscar"/>
</form>
@if (Auth::guest())
<p></p>
@else
@if(Auth::user()->admin==1)
<p class="bs-component">
<a href="libros/create" class="btn btn-default" role="button">Crear Libro</a>
</p>
@endif
@endif
@if(sizeof($libros) > 0)
{!! $libros->render() !!}
    @foreach($libros as $index => $foto)
        @if($index%4 == 0)
        <div class="row">
	@endif
	<div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="{{$foto->ruta}}">
		<div class="caption">
                    <h3>{{$foto->nombre}}</h3>
		    <p>{{$foto->descripcion}}</p>
                </div>
                <label class="col-md-4 control-label">Costo Bsf {{ $foto->precio }} </label>
                <p></p>
                @if (Auth::guest())
                <p>--</p>
                @else            
                <form action="{{ url('carrito/') }}" method="POST">
                        <label class="col-md-4 control-label">Cantidad</label>
                        <input type="text" class="form-control" name="qty" value="0">
                    
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" required>
                    <input type="hidden" name="id" value="{{$foto->id}}" required>
                    <input type="hidden" name="name" value="{{$foto->nombre}}" required>
                    <input type="hidden" name="price" value="{{$foto->precio}}" required>
                    <input class="btn btn-success" role="button" type="submit" value="Comprar"/>
                </form>
                @if(Auth::user()->admin==1)
                <p><a href="{{url('libros/actualizar',[$foto->id])}}" class="btn btn-primary" role="button">Editar libro</a></p>
                <form action="{{ url('carrito/destruir/$foto->id') }}" method="GET">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" required>
                    <input class="btn btn-danger" role="button" type="submit" value="Eliminar"/>
                </form>
                @endif
                @endif
            </div>
        </div>
        @if(($index+1)%4 == 0)
	</div>
        @endif
        @endforeach
@else
<div class="alert alert-danger">
    <p>Al parecer no hay ningun libro con ese nombre.</p>
</div>
@endif
</div>
{!! $libros->render() !!}
@endsection
