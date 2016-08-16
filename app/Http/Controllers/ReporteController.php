<?php namespace EditorialWeb\Http\Controllers;

use EditorialWeb\Http\Controllers\Controller;
use EditorialWeb\Linea;
use EditorialWeb\Libro;
use Gloudemans\Shoppingcart\Facades\Cart;
use View;
use DB;
use Illuminate\View\Factory;

use EditorialWeb\Pedido;
use EditorialWeb\Representante;
use EditorialWeb\EstadoPedido;
use App;
use Barryvdh\DomPDF\Facade;

class ReporteController extends Controller {
    public function getIndex(){
//        Cart::destroy();
                //SELECT SUM(cantidad) AS cantidad, idlibro FROM lineas GROUP BY idlibro asc;
        //SELECT SUM(lineas.cantidad) AS cantidad, lineas.idlibro, nombre FROM lineas INNER JOIN libros ON lineas.idlibro=libros.id GROUP BY idlibro asc;

        $lineas = DB::table('lineas')
                    ->join('libros', 'lineas.idlibro', '=', 'libros.id')
                    ->select(DB::raw('SUM(lineas.cantidad) AS cantidad,idlibro,nombre'))
                    ->groupBy('idlibro')
                    ->take(5)
                    ->get();
//        return view('reportes.masvendido',['masvendido'=>$masvendido]);
        return view('reportes.masvendido',['lineas'=>$lineas]);
    }
    public function getPedidos(){
	$pdf = App::make('dompdf.wrapper');
	$pdf->loadView('reportes.pedidos',['pedidos'=>Pedido::all(),'representantes'=> Representante::all(),'estadopedidos'=>  EstadoPedido::all()]);
	return $pdf->stream();
    }
}
