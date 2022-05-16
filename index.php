<?php

interface myInterface{
    public function one();
    public function two($a,$b);
}

class A implements myInterface{
//    public $number1;
//    public $number2;

    public function one()
    {
        echo "Function one <br>";
    }

    public function two($a, $b)
    {  $sum = $a+$b;
        echo "The sum of $a and $b is ". $sum ."<br>" ;

    }
}

class B implements myInterface{
    public function one()
    {
       echo "Class B ka one Function <br>";
    }
    public function two($a, $b)
    {
        echo "Class B ka function Two <br>";
    }
}
$obj = new A();

$obj->two(52,10);

$obj2 = new B();

$obj2->one();
$obj2->two(10,55);

