<?php

class newConstruct{
    //deklarasi data variabel
    public $name, $level;
   
    public function __construct()
{
    $this->name = "new Construct";
    $this->level = "easy";
}

}
$obj = new newConstruct();
echo  $obj->name . "<br>";
echo  $obj->level . "<br>";