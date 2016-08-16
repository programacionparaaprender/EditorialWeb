@extends('app')
@section('content')
<div class="container-fluid">
@if(sizeof($representantes) > 0)

<!--tabla de representante activo-->
<h1>Representantes activos</h1>
<table border="1">
<tr>
    <td>Nro </td>
    <td>Nombre y Apellido representante</td>
    <td>Actualizar</td>
</tr>
@foreach($representantes as $representante)
@if($representante->admin==0)
<tr>
    <td>{{$representante->id}}</td>
    <td>
        {{ $representante->nombre}} {{ $representante->apellido}}
    </td>
      <form class="form-horizontal" role="form" action="{{url('validado/representante/rol')}}" method="POST">
          <input type="hidden" name="_token" value="{{ csrf_token() }}" required>
          <input type="hidden" name="id" value="{{$representante->id }}" required>
          <div class="form-group required">

            <!--<div class="col-sm-3">-->
            <td>
            <select name="selector" required>
                <optgroup label="Roles">
                    @if($representante->admin==0)
                    <option value="{{$representante->admin }}" selected>Activo</option>
                    <option value="3">Inactivo</option>
                    @else
                    <option value="0">Activo</option>
                    <option value="{{ $representante->admin }}" selected>Inactivo</option>
                    @endif
                </optgroup>
            </select>
            <!--</div>-->
            </td>
          </div>
          <div class="form-group">
              <td>
              <button type="submit" class="btn btn-primary">
              Actualizar rol
              </button>
              </td>
        </div>
      </form>
</tr>
@endif
@endforeach
</table>


<!--tabla de representante inactivo-->
<h1>Representantes Inactivos</h1>
<table border="1">
<tr>
    <td>Nro </td>
    <td>Nombre y Apellido representante</td>
    <td>Actualizar</td>
</tr>
@foreach($representantes as $representante)
@if($representante->admin==3)
<tr>
    <td>{{$representante->id}}</td>
    <td>{{ $representante->nombre}} {{ $representante->apellido}}</td>
      <form class="form-horizontal" role="form" action="{{url('validado/representante/rol')}}" method="POST">
          <input type="hidden" name="_token" value="{{ csrf_token() }}" required>
          <input type="hidden" name="id" value="{{$representante->id }}" required>
          <div class="form-group required">

            <!--<div class="col-sm-3">-->
            <td>
            <select name="selector" required>
                <optgroup label="Estados">
                    @if($representante->admin==0)
                    <option value="{{$representante->admin }}" selected>Activo</option>
                    <option value="3">Inactivo</option>
                    @else
                    <option value="0">Activo</option>
                    <option value="{{ $representante->admin }}" selected>Inactivo</option>
                    @endif
                </optgroup>
            </select>
            <!--</div>-->
            </td>
          </div>
          <div class="form-group">
              <td>
              <button type="submit" class="btn btn-primary">
              Actualizar rol
              </button>
              </td>
        </div>
      </form>
</tr>
@endif
@endforeach
</table>

@else
<div class="alert alert-danger">
    <p>Al parecer no tiene representantes actualmente.</p>
</div>
@endif
</div>
@endsection
