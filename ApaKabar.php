<?php
include 'SelamatPagi.php';
trait ApaKabar{
    public function ApaKabar(){
        echo $this->selamatpagi(). 'ApaKabar';
    }
}