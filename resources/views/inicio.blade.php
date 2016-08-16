@extends('app')

@section('content')
@if (Session::has('error'))
	<div class="alert alert-danger">
		<strong>Whoops!</strong> Al parecer algo está mal<br><br>
		{{Session::get('error')}}
	</div>
@endif
@if (Session::has('actualizado'))
	<div class="alert alert-success">
		{{Session::get('actualizado')}}
	</div>
@endif
@if (Session::has('procesado'))
	<div class="alert alert-success">
		{{Session::get('procesado')}}
	</div>
@endif
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Inicio</div>
				<div class="panel-body">
				Bienvenido {{ Auth::user()->nombre }} {{ Auth::user()->apellido}}
                                @if(Auth::user()->admin==3)
                                Usted esta inactivo
                                @endif
				</div>
			</div>
		</div>
	</div>
</div>
@endsection