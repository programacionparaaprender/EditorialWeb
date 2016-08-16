<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class HomePageTest extends TestCase{
    public function test_home_page_says_wowee(){
        $this->visit('/')->see('El libro es fuerza, es valor, es alimento; antorcha');
    }
//    public function test_forwarder_forwards_the_page(){
//        $this->visit('/libros/mostrar-libros')->seePageIs('libros/crear-libro');
//    }
//    public function test_cta_link_functions(){
//        $this->visit('/sales-page')
//            ->click('Try it now!')
//            ->see('Sign up for trial')
//            ->onPage('trial-signup');
//    }
}

