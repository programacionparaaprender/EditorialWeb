@extends('app')
@section('content')
<div id="containet-fluid">
    <a href="{{url('reportes/pedidos')}}" class="btn btn-default" role="button" target="_blank">Visualizar Pedidos</a>
    <canvas id="mycanvas" width="0" height="0"></canvas>
    <script src="{{url('/js/jquery-2.1.4.min.js')}}"></script>
    <script src="{{url('/js/Chart.js')}}"></script>
    <script src="../js/Chart.min.js"></script>
        @if(sizeof($lineas) > 0)
        @foreach($lineas as $index => $linea)
            <h3>Nombre {{$linea->nombre}}</h3>
            <p>id libro {{$linea->idlibro}}</p>
            <p>Cantidad {{$linea->cantidad}}</p>
        @endforeach
        @endif
        <canvas id="chart-area" width="256" height="256"></canvas>
</div>
    <script>
        var colores= ["orange","green","red","black","blue"];
        var contador=0;
//        var pieData = [
//            {
//                value:40,
//                color:"orange",
//                highlight: "red",
//                label: "Primer dato"
//            },
//            {
//                value:60,
//                color:"#0b82e7",
//                highlight: "red",
//                label: "Segundo dato"
//            }
//        ];
        var pieData = [
                @if(sizeof($lineas) > 0)
                @foreach($lineas as $index => $linea)
                    {
                    value:{{$linea->cantidad}},
                    color:colores[contador++],
                    highlight: "red",
                    label: '{{$linea->nombre}}'
                    },
                @endforeach
                @else
                {
                    value:40,
                    color:"orange",
                    highlight: "red",
                    label: "Primer dato"
                },
                {
                    value:60,
                    color:"#0b82e7",
                    highlight: "red",
                    label: "Segundo dato"
                }
                @endif
        ];
        var ctx = document.getElementById("chart-area").getContext("2d");
        window.myPie = new Chart(ctx).Pie(pieData);	
    </script>
@endsection

