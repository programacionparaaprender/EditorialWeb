<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class MostrarLibrosTest extends TestCase{
//    public function test_home_page_says_wowee(){
//        $this->visit('/')->see('El libro es fuerza, es valor, es alimento; antorcha');
//    }
    public function test_forwarder_forwards_the_page(){
        $this->visit('libros/')->see('Libros disponibles en la editorial');
    }
//<a href="/about-us">About Us</a>

//public function testBasicExample()
//{
//    $this->visit('/')
//         ->click('About Us')
//         ->seePageIs('/about-us');
//}
//<a href="libros/create" class="btn btn-default" role="button">Crear Libro</a>
//    public function testBasicExample2(){
//        $this->visit('libros/')->click('Crear Libro')->seePageIs('libros/create');
//    }
}