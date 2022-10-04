<?php

class ParentClass
{

    public function __construct(
        public $nameClass,
        public $level ){}
    
}
    class Childclass extends parentClass
    
{
    }

    $parentClass = new ParentClass(nameClass: "Denis" , level: "peaceful");

    $childClass = new ChildClass(nameClass: "17" , level: "peaceful");

   echo $parentClass->nameClass . "<br>";
   echo $parentClass->level . "<hr>";

   
echo $childClass->nameClass . "<br>";
echo $childClass->level ;
