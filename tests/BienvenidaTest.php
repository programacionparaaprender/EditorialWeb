<?php

class BienvenidaTest extends TestCase{
    public function testExample(){
        $this->assertTrue(true);
    }
    //<a href="{{ url('libros/') }}" id="catalogo">Catalogo</a>
    public function testCatalogo(){
        $this->visit('/')->click('Catalogo')->seePageIs('libros/');
    }
}
