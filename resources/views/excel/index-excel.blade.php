@extends('app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                 Bienvenido desea importar o exportar algun archivo excel
                 Pulse los enlaces de ejemplo
                 <li><a href="{{ url('excel/importar') }}">Importar Excel</a></li>
                 <li><a href="{{ url('excel/exportar') }}">Exportar Excel</a></li>
                </div>
            </div>
        </div>
    </div>
    <form class="form-horizontal" role="form" method="POST" action="excel/importar2" enctype="multipart/form-data">
  		<input type="hidden" name="_token" value="{{ csrf_token() }}" required>
  		<div class="form-group required">
  			<label class="col-md-4 control-label">Importar excel</label>
  			<div class="col-md-6">
  				<input type="file" class="form-control" name="file" required>
  			</div>
  		</div>
  		<div class="form-group">
  			<div class="col-md-6 col-md-offset-4">
  				<button type="submit" class="btn btn-primary">
  					Importar
  				</button>
  			</div>
  		</div>
  	</form>
</div>
@endsection
