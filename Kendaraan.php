<?php
include "Fuel.php";

class kendaraan implements Fuel{

}
public  function __construct(public $type = "pertalite")
{

}
public function getType($type)
{
    return $this->type = $type;
}

