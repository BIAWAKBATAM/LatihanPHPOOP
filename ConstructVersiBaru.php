<?php

class ConstructVersiBaru
{
    public function __construct(public $title, public $level)
{

}
}
$obj = new ConstructVersiBaru(title:"construct baru" , level: "ez");
echo $obj->title . "<br>";
echo $obj->level ;