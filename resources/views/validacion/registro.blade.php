@extends('app')
@section('content')
<link rel="stylesheet" href="./css/bootstrap.min.css">
<div class="container-fluid">
    <form class="form-horizontal"  method="POST" action="/validacion/registro" >
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label class="col-md-4 control-label">Cedula</label>
            <div class="col-md-6">
                <input type="text" class="form-control" name="cedula" value="{{ old('name') }}">
            </div>
	</div>
        <div class="form-group">
            <label class="col-md-4 control-label">Nombre</label>
            <div class="col-md-6">
                <input type="text" class="form-control" name="nombre" value="{{ old('name') }}">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label">Apellido</label>
            <div class="col-md-6">
                <input type="text" class="form-control" name="apellido" value="{{ old('name') }}">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label">Direccion</label>
            <div class="col-md-6">
                <textarea rows="4" cols="50" class="form-control" name="direccion" value="{{ old('name') }}"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label">telefono</label>
            <div class="col-md-6">
                <input type="text" class="form-control" name="telefono" value="{{ old('name') }}">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label">Rif</label>
            <div class="col-md-6">
                <input type="text" class="form-control" name="rif" value="{{ old('name') }}">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label">Correo electronico</label>
            <div class="col-md-6">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label">Contraseña</label>
            <div class="col-md-6">
                <input type="password" class="form-control" name="password">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label">Repita la contraseña</label>
            <div class="col-md-6">
                <input type="password" class="form-control" name="password_confirmation">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label">Pregunta</label>
            <div class="col-md-6">
                <input type="text" class="form-control" name="pregunta">
            </div>
	</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Respuesta</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="respuesta">
							</div>
						</div>
                                                <div class="form-group">
							<label class="col-md-4 control-label">Cual es el nivel</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="idnivel" value="{{ old('name') }}">
							</div>
						</div>
                                                <div class="form-group">
							<label class="col-md-4 control-label">Nombre de Escuela</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="nombreEscuela" value="{{ old('name') }}">
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Registrarse
								</button>
            </div>
        </div>
    </form>
</div>
@endsection