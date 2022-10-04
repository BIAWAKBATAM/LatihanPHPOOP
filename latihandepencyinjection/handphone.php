<?php
include "Display.php";

class handphone implements display{
    public $pesan =  "selamat siang";
    public function tampilkan()
    {
        echo $this->pesan;
    }
}
$handphone = new handphone();
echo $handphone->tampilkan();