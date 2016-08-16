<?php

namespace EditorialWeb\Http\Controllers;

use Illuminate\Http\Request;
use EditorialWeb\Http\Requests;
use Maatwebsite\Excel\Facades\Excel;
use EditorialWeb\Representante;
class ExcelController extends Controller{
  public function getIndex(){
    return view('excel.index-excel');
  }
  //leer datos importar
  public function getImportar(){

    Excel::load('public/importar.xlsx', function($reader) {

      foreach ($reader->get() as $book) {
        echo 'name'.$book->SOPORTE.'---'.'author'.$book->COSTO.'<br>';
      }
      //foreach($heet->toArray() as $row){ echo $sheet->toArray().'<br>';}
    });
    /*
    Excel::load('public/importar.xlsx', function($archivo){
      $result=$archivo->get();
      foreach($result as $key => $value){
        echo $value->SOPORTE.' --- '.$value->COSTO.'<br>';
      }
    })->get();
    */
 //return View::make('index');
  }
  public function postImportar2(Request $request){

    Excel::load($request->file('file'),function($reader){
     /*
      foreach ($reader->get() as $book) {
        echo 'name'.$book->SOPORTE.'---'.'author'.$book->COSTO.'<br>';
      }
      });
      //Excel::load(Input::file('file'),function($reader){
      */
      $reader->each(function($sheet){
        foreach ($sheet->toArray() as $book) {
          echo $book;//$sheet->toArray();
          //User::firstOrCreate($sheet->toArray());
          echo '<br>';//'name'.$book->SOPORTE.'---'.'author'.$book->COSTO.'<br>';

        }
      }

    );
    });
  }
  public function getExportar(){
    $export = Representante::select('id','nombre','email')->get();
    Excel::create('export data',function($excel) use($export){
      $excel->sheet('Sheet 1', function($sheet) use($export){
        $sheet->fromArray($export);
      });
    })->export('xlsx');
  }
}
