<?php

trait Say_hello{
    public function hello()
    {
        echo "Say Hello from Trait!!";
    }
};

class A{
//    use Say_hello;
    public function hello()
    {
        echo "Say Hello from Class A!!";
    }

}

class B extends A{
    use Say_hello;
//    public function hello()
//    {
//        echo "Say Hello from Class B!!";
//    }
}

$obj1 = new B();

$obj1->hello();

