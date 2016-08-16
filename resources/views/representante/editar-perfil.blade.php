@extends('app')

@section('content')
<div class="container-fluid">
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/validado/representante/editar-perfil') }}"  enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" required>
        <div class="form-group required">
            <label class="col-md-4 control-label">Nombre</label>
            <div class="col-md-6">
                <input type="text" class="form-control" name="nombre" value="{{Auth::user()->nombre}}" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label">Apellido</label>
            <div class="col-md-6">
                <input type="text" class="form-control" name="apellido" value="{{ Auth::user()->apellido }}">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label">Contraseña</label>
            <div class="col-md-6">
                <input type="password" class="form-control" name="password">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label">Repita la contarseña</label>
            <div class="col-md-6">
                <input type="password" class="form-control" name="password_confirmation">
            </div>
	</div>
        <div class="form-group">
            <label class="col-md-4 control-label">Pregunta</label>
            <div class="col-md-6">
                <input type="text" class="form-control" name="pregunta" value="{{Auth::user()->pregunta}}">
            </div>
	</div>
        <div class="form-group">
            <label class="col-md-4 control-label">Respuesta</label>
            <div class="col-md-6">
                <input type="text" class="form-control" name="respuesta" value="{{Auth::user()->respuesta}}">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Actualizar perfil
                </button>
            </div>
	</div>
    </form>
</div>
@endsection

