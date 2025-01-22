<?php

// 1. __LINE__
echo "This is line number " . __LINE__;


// 2. __FILE__
echo "This file is located at " . __FILE__;


// 3. __DIR__
echo "This directory is " . __DIR__;


// 4. __FUNCTION__
function myFunction() {
    echo "This function is called " . __FUNCTION__;
}
myFunction();


// 5. __CLASS__
class MyClass {
    public function displayClass() {
        echo "This class is " . __CLASS__;
    }
}
$obj = new MyClass();
$obj->displayClass();


// 6. __TRAIT__
trait MyTrait {
    public function showTrait() {
        echo "This trait is ".__TRAIT__;
    }
}
class MyClass {
    use MyTrait;
}
$obj = new MyClass();
$obj->showTrait();


// 7. __METHOD__
class MyClass {
    public function myMethod() {
        echo "This method is " . __METHOD__;
    }
}
$obj = new MyClass();
$obj->myMethod();


// 8. __NAMESPACE__
namespace MyNamespace;

echo "This namespace is " . __NAMESPACE__;


// 9. __COMPILER_HALT_OFFSET__
__halt_compiler();
//This text will be ignored by the PHP interpreter.
