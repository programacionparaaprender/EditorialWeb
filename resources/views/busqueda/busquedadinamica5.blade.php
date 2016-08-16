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
    
<form class="form-inline" role="form" action="{{url('busqueda/genero')}}" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" required>
    <select name="selector" required>
        <optgroup label="Generos">
            @if($generoelegido==0)
                <option value="0" selected>todos</option>
                @foreach($generos as $genero)
                <option value="{{ $genero->id }}">{{$genero->nombre}}</option>
                @endforeach
            @else
                @foreach($generos as $genero)
                @if($genero->id==$generoelegido)
                <option value="{{ $genero->id }}" selected>{{$genero->nombre}}</option>
                @else
                <option value="{{ $genero->id }}">{{$genero->nombre}}</option>
                @endif
                @endforeach
            @endif
        </optgroup>
    </select>
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
@if(sizeof($libros) > 0 )
    @include('busqueda.foreach', ['libros' => $libros,'buscarlibro'=>$buscarlibro,'generoelegido'=>$generoelegido])
@else
    <div class="alert alert-danger">
        <p>Al parecer no hay ningun libro con ese nombre.</p>
    </div>
@endif
</div>
{!! $libros->render() !!}
@endsection







