@extends('app')
@section('content')
<div class="container-fluid">
<form action="{{ url('busqueda/') }}" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" required>
    <label class="col-md-4 control-label">Libro</label>
    <input type="text" class="form-control" name="buscarlibro" required>
    <input class="btn btn-default" role="button" type="submit" value="Buscar"/>
</form>
</div>
@endsection

