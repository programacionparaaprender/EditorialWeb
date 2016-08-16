@extends('app')
@section('content')
<div class="container-fluid">
    <table border='1'>
        <tr>
            <td>Nombre</td><td>Apellido</td><td>Cedula</td><td>Dirección</td>
        </tr>
        <tr>
            <td>{{$representante->nombre}}</td>
            <td>{{$representante->apellido}}</td>
            <td>{{$representante->cedula}}</td>
            <td>{{$representante->direccion}}</td>
        </tr>
        <tr><p><a href="{{url('pedidos/')}}" class="btn btn-primary" role="button">Volver a pedidos</a></p></tr>
    </table>
</div>
@endsection

