<?php namespace EditorialWeb\Http\Controllers;

use EditorialWeb\Http\Requests\AnadirCarritoRequest;
use EditorialWeb\Http\Controllers\Controller;

//use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Auth;
use EditorialWeb\Pedido;
use EditorialWeb\Linea;
use EditorialWeb\Libro;
//use Carbon\Carbon; //fecha actual
use DateTime; //fecha y hora actual
use Illuminate\Support\Facades\Mail;
class CarritoController extends Controller {
    public function getIndex(){
//        Cart::add(array('id' => '293ad', 'name' => 'Product 1', 'qty' => 1, 'price' => 10.00));
//        Cart::add(array('id' => '4832k', 'name' => 'Product 2', 'qty' => 1, 'price' => 10.00));
        return view('carrito.mostrar-carrito',['total'=>Cart::total()])->with('carrito',Cart::content());
    }
    public function getProcesar(){
        $representante = Auth::user();
        $now = new DateTime('now');//Carbon::now();
        Pedido::create(['idrepresentante'=>$representante->id,'total'=> Cart::total(),'idestado'=>'1']);
        $ultimopedido= 0;
        foreach(Pedido::all() as $pedido){
            $ultimopedido = $pedido;
        }
        foreach(Cart::content()  as $carro){
            Linea::create(['idpedido'=>$ultimopedido->id, 'idlibro'=>$carro->id,'cantidad'=> $carro->qty,'costo'=> $carro->price*$carro->qty]);
            $libro = Libro::find($carro->id);
            $libro->cantidad = $libro->cantidad-$carro->qty;
            $libro->save();
        }
        Cart::destroy();
        //envio de email al administrador
        //comentar para que no de problemas sin internet
        
        Mail::send('emails.welcome',['name' => $representante->nombre.' '.$representante->apellido.' correo '.$representante->email], function ($message) {
        $message->to('alberto13711@gmail.com','Some Guy')->from('libreriaomega3@gmail.com')->subject('Welcome!');});
        
        
        //para la profesora
        Mail::send('emails.welcome',['name' => $representante->nombre.' '.$representante->apellido.' correo '.$representante->email], function ($message) {
        $message->to('zuliraisg@gmail.com','Some Guy')->from('libreriaomega3@gmail.com')->subject('Welcome!');});
        
        //para colegas
        Mail::send('emails.welcome',['name' => $representante->nombre.' '.$representante->apellido.' correo '.$representante->email], function ($message) {
        $message->to('manueldun@gmail.com','Some Guy')->from('libreriaomega3@gmail.com')->subject('Welcome!');});
        
        Mail::send('emails.welcome',['name' => $representante->nombre.' '.$representante->apellido.' correo '.$representante->email], function ($message) {
        $message->to('xygesc@gmail.com','Some Guy')->from('libreriaomega3@gmail.com')->subject('Welcome!');});
        
        
        return redirect('inicio')->with('procesado','su compra ya fue realizada');
    }
    public function getDestruir(){
        Cart::destroy();
        return view('carrito.mostrar-carrito',['total'=>Cart::total()])->with('carrito',Cart::content());
    }
    public function create(){}
    public function postIndex(AnadirCarritoRequest $request){//public function store(AnadirCarritoRequest $request){
        $id = $request->get('id');
        $name = $request->get('name');
        $qty = $request->get('qty');
        $price = $request->get('price');
//	$imagen = $request->file('imagen');
//        $ruta = '/img/';
        Cart::add(array('id' => $id, 'name' => $name, 'qty' => $qty, 'price' => $price));
        return view('carrito.mostrar-carrito',['total'=>Cart::total()])->with('carrito',Cart::content());
    }
//    public function show($id){}
//    public function edit($id){}
//    public function update($id){}
//    public function destroy($id){}

}
