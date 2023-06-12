<?php

require_once __DIR__ . '/../vendor/autoload.php';

use MyProject\App\Classes\MyClass;
use MyProject\App\Classes\MyClass1;
require_once __DIR__ . '/../Classes/MyClass.php';




$myClass = new MyClass();
echo $myClass::MY_CONST;


$myClass1 = new MyClass1();
$myClass1->myMethod();


use MyProject\App\Classes\ParentClass;
use MyProject\App\Classes\AbstractClass;


$parentObject = new ParentClass();
$parentObject->parentMethod();


class  ChildClass extends ParentClass
{
}


$child = new ChildClass();
$child->parentMethod();



class ConcreteClass extends AbstractClass
{
    public function abstractMethod()
    {
        echo "This is the implementation of the abstract method.";
    }
}

$concrete = new ConcreteClass();
$concrete->abstractMethod();





