<?php
include "ParentClass.php";
class buku extends ParentClass
{
    public static $harga;
    public static $title;

    public function __construct($harga, $title)
    {
        $this->$harga = $harga;
        Parent::$title;
    }
public function ChildDisplay()
    {
        parent::display();
        
    }
    public function sukakmu(){
    return self::$harga;
    }
}
$buku = new buku(title: "buku", harga: "240000");
echo $buku -> ChildDisplay(). "<br>";
echo $buku -> sukakmu();