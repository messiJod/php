<?php

class A{
    public function __construct(){
        echo "This is construction function!<br>";
    }
    public function SayHello(){
        echo "Hello everyone!<br>";
    }
    public function __destruct(){
        echo "Destruction function Called!!<br>";
    }
}

$obj = new A();

$number = 2;

for($i=0;$i<$number;$i++)
{
   $obj->SayHello();
}

echo "done<br>";

