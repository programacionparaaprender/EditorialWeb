@extends('app')
@section('content')
@if(Session::has('creada'))
<div class="alert alert-success">
    <p>{{Session::get('creada')}}</p>
</div>
@endif
<div class="container-fluid">
@if (Auth::guest())
<h1>Libros disponibles en la editorial </h1>
@else
<h1>Libros disponibles en la editorial</h1>
@if(Auth::user()->admin==1)
<p class="bs-component">
<a href="libros/create" class="btn btn-default" role="button">Crear Libro</a>
</p>
@endif
@endif
<!-- {!! $libros->render() !!} -->
    <form class="form-inline">
    <label>Buscar</label>
    <input v-model="searchText">
    </form>
    <div v-for="libro in libros | filterBy searchText in 'nombre'">
  
        @{{ indices(index) }}
            <div  class="col-lg-3">
            <div class="thumbnail">
            <img src="@{{ libro.ruta }}" width="150px" height="150px">
            <div class="caption">
                <h3>@{{ libro.nombre }}</h3> 
                <h4>@{{ libro.descripcion }}</h4>
            </div>
            <form action="{{ url('carrito/') }}" method="POST"  class="form-horizontal">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" required>
                <input type="hidden" name="id" value="@{{ libro.id }}" required>
                <input type="hidden" name="name" value="@{{ libro.nombre }}" required>
                <input type="hidden" name="price" value="@{{ libro.precio }}" required>
                <label>Cantidad</label>
                <input type="text" name="qty" value="0" size="5">
                <input class="btn btn-success" role="button" type="submit" value="Comprar"/>
            </form>
            <p><a href="libros/actualizar/@{{ libro.id }}" class="btn btn-primary" role="button">Editar libro</a></p>
            <form action="carrito/destruir/@{{ libro.id }}" method="GET">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" required>
                <input class="btn btn-danger" role="button" type="submit" value="Eliminar"/>
            </form>
            </div>
            </div>
        @{{ indices2(index) }}

 <!--        <libro-exp 
            :id="libro.id" 
            :nombre="libro.nombre" 
            :descripcion="libro.descripcion" 
            :precio="libro.precio" 
            :ruta="libro.ruta"
            :index="libro.index">
        </libro-exp> -->

    </div>
</div>
<!-- {!! $libros->render() !!} -->
@endsection

@section('scripts')
        <!-- <script src="js/jquery-2.1.4.min.js"></script> -->
        <script src="js/vue.js"></script>
        <script type="text/template" id="libro_template">
        </script>
        <script type="text/javascript">
            Vue.component('libro-exp',{
                template: '#libro_template',
                props:['id','nombre','descripcion','precio','ruta','index'],
            });
            new Vue({
                el: 'body',
                data:{
                    searchText:'',
                    libros: [
                        @if(sizeof($libros) > 0)
                        @foreach($libros as $index => $libro)
                            { 
                                id:{{ $libro->id }},
                                nombre:'{{ $libro->nombre }}',
                                descripcion:'{{ $libro->descripcion }}',
                                precio:{{$libro->precio}},
                                ruta:'{{ $libro->ruta }}',
                                index:{{ $index }}
                            },
                        @endforeach
                        @else
                            { 
                                id:1,
                                nombre:'PHP',
                                descripcion:'PHP',
                                precio:0,
                                ruta:'img/text.png'
                            },
                        @endif
                        ],
                },
                filters: {
                    indices: function (index) {
                      if (index % 4 == 0) return '<div class="row">'
                    },
                    indices2: function (index) {
                      if ((index + 1) % 4 == 0) return '</div>'
                    },
                },
                methods: {
                    indices: function (index) {
                      if (index % 4 == 0) return '<div class="row">'
                    },
                    indices2: function (index) {
                      if ((index + 1) % 4 == 0) return '</div>'
                    },
                }
            });
        </script>
@endsection