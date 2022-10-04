<?php
/*
pertemuan Belajar Overloading
Overloading * menggunakan method / function / properties berulang-ulang 
Didalam class itu sendiri / diluar class
*/

class ParentClass1
{
    public static $title;
    // Dekralasi Properties 
    // public $name = "Basic";

    public function __construct($title)
    {
        self:: $title = $title;
    }
    public function getName()
    {
        echo "nama: "  . self::$title."<br>";
    }

}
$ParentClass1 = new ParentClass1("ok");
echo $ParentClass->getName();

