@extends('app')

@section('content')
<div class="container-fluid">
    <form class="form-horizontal" role="form" method="POST" action="{{ url('libros/actualizar') }}" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{ csrf_token() }}" required>
                <input type="hidden" name="id" value="{{$libro->id }}" required>
                <div class="form-group required">
			<label class="col-md-4 control-label">ID del autor</label>
			<div class="col-md-6">
                            <input type="text" class="form-control" name="idautor" value="{{$libroautor->idautor}}" required>
			</div>
		</div>
		<div class="form-group required">
			<label class="col-md-4 control-label">Nombre del libro</label>
			<div class="col-md-6">
                            <input type="text" class="form-control" name="nombre" value="{{$libro->nombre}}" required>
			</div>
		</div>
                <div class="form-group required">
			<label class="col-md-4 control-label">Año de publicación</label>
			<div class="col-md-6">
                            <input type="text" class="form-control" name="anio" value="{{$libro->año}}" required>
			</div>
		</div>
                <div class="form-group required">
			<label class="col-md-4 control-label">ID de genero</label>
			<div class="col-md-6">
                            <input type="text" class="form-control" name="idgenero" value="{{$libro->idgenero}}" required>
			</div>
		</div>
                <div class="form-group required">
			<label class="col-md-4 control-label">ID de tipo de edición</label>
			<div class="col-md-6">
                            <input type="text" class="form-control" name="idtipoed" value="{{$libro->idtipoed}}" required>
			</div>
		</div>
                <div class="form-group required">
			<label class="col-md-4 control-label">Cantidad de paginas</label>
			<div class="col-md-6">
                            <input type="text" class="form-control" name="cantpaginas" value="{{$libro->cantpaginas}}" required>
			</div>
		</div>
                <div class="form-group required">
			<label class="col-md-4 control-label">Número de edición</label>
			<div class="col-md-6">
                            <input type="text" class="form-control" name="edicion" value="{{$libro->edicion}}" required>
			</div>
		</div>
                <div class="form-group required">
			<label class="col-md-4 control-label">ID del nivel</label>
			<div class="col-md-6">
                            <input type="text" class="form-control" name="idnivel" value="{{$libro->idnivel}}" required>
			</div>
		</div>
		<div class="form-group required">
			<label class="col-md-4 control-label">Descripción</label>
			<div class="col-md-6">
				<textarea type="text" class="form-control" name="descripcion" rows="3" required>{{$libro->descripcion}}</textarea>
				</div>
		</div>
                <div class="form-group required">
			<label class="col-md-4 control-label">cantidad de ejemplares</label>
			<div class="col-md-6">
                            <input type="text" class="form-control" name="cantidad" value="{{$libro->cantidad}}" required>
			</div>
		</div>
                <div class="form-group required">
			<label class="col-md-4 control-label">Precio de libro</label>
			<div class="col-md-6">
                            <input type="text" class="form-control" name="precio" value="{{$libro->precio}}" required>
			</div>
		</div>
		<div class="form-group required">
			<label class="col-md-4 control-label">Imagen max: 20MB</label>
			<div class="col-md-6">
				<input type="file" class="form-control" name="imagen" required>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-6 col-md-offset-4">
				<button type="submit" class="btn btn-primary">
					Editar Libro
				</button>
			</div>
		</div>
	</form>
</div>
@endsection

