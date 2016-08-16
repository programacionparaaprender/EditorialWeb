@extends('app')
@section('content')
@if(Session::has('creada'))
<div class="alert alert-success">
	<p>{{Session::get('creada')}}</p>
</div>
@endif
<div class="container-fluid">
    
    
    <h1>Bienvenido @{{ name }}</h1>
    <form @submit.prevent="actualizarBusqueda()" class='form-inline'>
        <input type="text" v-model="name" class="form-control">
        <button type='submit' class='btn btn-primary'>Buscar</button>
    </form>
    
    
    
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
    <div id="app1">
        <div v-for="libro in libros">
                <!--@{{ $index%4==0 ? '<div class="row">':'' }} -->
            <div v-if='name'>
                    @{{$index + 1}} 
                    @{{ libro.nombre }} 
                    @{{ libro.descripcion }}
            </div>    
                <!--@{{ $index+1%4 == 0 ? '</div>':'' }}-->
        </div>
    </div>
    @include('busqueda.foreach', ['libros' => $libros,'buscarlibro'=>$buscarlibro,'generoelegido'=>$generoelegido])
@else
    <div class="alert alert-danger">
        <p>Al parecer no hay ningun libro con ese nombre.</p>
    </div>
@endif
</div>
{!! $libros->render() !!}
@stop
@section('scripts')
<script src="js/vue.js"></script>
<script type="text/javascript">
    new Vue({
        el:"body",
        data:{
            name:"Luis Correa",
            libros:[
                @if(sizeof($libros) > 0 )
                @foreach($libros as $index => $libro)
                @if(str_contains($libro,$buscarlibro))
                { 
                    id:{{$libro->id}},
                    nombre: "{{$libro->nombre}}",
                    descripcion: "{{$libro->descripcion}}",
                    ruta: "{{$libro->ruta}}",
                    precio:{{$libro->precio}}
                },
                @endif
                @endforeach
                @endif
            ]
        },
        methods:{
            actualizarBusqueda:function(){
                var todolibros=[
                    @if(sizeof($libros) > 0 )
                    @foreach($libros as $index => $libro)
                    { 
                                id:{{$libro->id}},
                                nombre: "{{$libro->nombre}}",
                                descripcion: "{{$libro->descripcion}}",
                                ruta: "{{$libro->ruta}}",
                                precio:{{$libro->precio}}
                    },
                    @endforeach
                    @endif
                ];
                //segun equivalente a contains
                //string.indexOf(substring) > -1
                //tambien se usa
                var nuevos_libros;
                var i;
                for (i = 0; i < todolibros.length; i++) {
                    if(todolibros[i].nombre.includes(this.name)){
                        nuevos_libros.push(todolibros[i]);
                    }
                }
                this.libros=nuevos_libros;
            }
        }
    });
</script>
@stop





