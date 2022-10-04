<?php
// 1. Kelas abstracrt dengan keyword abstract
abstract class produk{
// 2. memiliki atribut
    public $harga = 2000;
// 3. dapat memiliki function dengan body code tanpa keyword abstract
public function getHarga(){
    return $this->harga;
} 
 
// 4. dapat melakukan signiture/ tanpa tangan 
    abstract public function sayHello($name): void
    // 5. abstract dapat memiliki variable static
    public static $judul = "belajar abstract class";
}
//tidak bisa di inisia;isasi objek 
?>