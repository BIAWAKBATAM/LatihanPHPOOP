<?php

class Fungsi
{

    // membuat variabel 
    public function title ():void
    {
        echo "Belajar Fungsi";
    }
    public function __construct(public $named, public $numb){}                               

    //2. fungsi void dengan parameter  
    public function getName(){
        return $this->named;
    }
    public function getParameter($testParameter){
        echo $testParameter;
    }
    public function Perkalian  ($numb_a,$numb_b){
    return $numb_a * $numb_b;
}
}
$obj = new Fungsi (named:"Robin", numb:"44");
echo $obj->named . "<br>";
echo $obj->numb . "<br>";
echo $obj->getName();
echo $obj->getParameter (testParameter: "ui") . "<br>";
echo $obj->perkalian ("6", "7");
?>