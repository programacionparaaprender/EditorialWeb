<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ValidacionRegistro extends TestCase{
    public function testExample(){
        $this->assertTrue(true);
    }
    

//     <form action="/register" method="POST">
//    {!! csrf_field() !!}
//
//    <div>
//        Name: <input type="text" name="name">
//    </div>
//
//    <div>
//        <input type="checkbox" value="yes" name="terms"> Accept Terms
//    </div>
//
//    <div>
//        <input type="submit" value="Register">
//    </div>
//</form>     
//      
//    public function testNewUserRegistration(){
//    $this->visit('/register')
//         ->type('Taylor', 'name')
//         ->check('terms')
//         ->press('Register')
//         ->seePageIs('/dashboard');
//    }
    //<form class="form-horizontal" role="form" method="POST" action="/validacion/registro"  enctype="multipart/form-data">
    //<button type="submit" class="btn btn-primary">Registrarse</button>
    public function testNewUserRegistration(){
        $this->visit('/validacion/registro')
         ->type('Taylor', 'cedula')
         ->check('cedula')
         ->press('Registrarse')
         ->seePageIs('validacion/registro');
    }
}
