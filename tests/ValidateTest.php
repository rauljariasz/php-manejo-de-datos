<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase
{
    public function test_email()
    {
        // Lo que estamos haciendo es invocar el metodo "email" de la clase Validate
        // Y entre parentesis le estamos asignando el valor y a su vez guardandolo
        // en la variable $email
        $email = Validate::email('rau@wqeqwe.com');
        $this->assertTrue($email);

        // Esto es posible porque el metodo es estatico, de no serlo, se tendria
        // que invocar de la siguiente manera:
        // $validate = new Validate();
        // $email = $validate->email('raul@gmail.com');

        $email = Validate::email('rau@@wqeqwe.com');
        $this->assertFalse($email);
    }

    public function test_url()
    {
        $url = Validate::url('https://rauljariasz.com');
        $this->assertTrue($url);
    }
}