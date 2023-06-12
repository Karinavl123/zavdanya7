<?php
namespace Myproject\App\Classes;


use Myproject\App\Classes\MyInterface;


class MyClass1 implements MyInterface

{
    public function myMethod(): void
    {
        echo "Implementation of myMethod() in MyClass";
    }

}

