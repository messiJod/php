<?php
 class employee{
     public $name, $designation, $salary;

     public function __construct($name,$designation,$salary){
         $this->name = $name;
         $this->designation = $designation;
         $this->salary = $salary;
     }
     public function displayDetails(){
         return "Employee name is "."<b>". $this->name." </b>". " who is " . $this->designation . " getting ". $this->salary. "k salary<br>";
     }
 }

 class Boss extends employee{

 }

 $emp1 = new employee("Sourbh","CRM",250);
 $emp2 = new employee("Amit","Web Developer",100);

echo $emp1->displayDetails() ."<br>";
echo $emp2->displayDetails();

$boss = new Boss("Boss","BOSS","unlimited ");

echo $boss->displayDetails() ."<br>";

