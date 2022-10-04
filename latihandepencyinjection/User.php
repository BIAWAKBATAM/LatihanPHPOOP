<?php
include "Handphone.php";
class User{
public function __construct(handphone $handphone)
{
    
}
    public function tekantombol(handphone $handphone){
        echo $handphone->tampilkan();

    }
}
$User = new User();

$pocophone = new handphone();
$user->tekantombol($pocophone);
echo $user->$turnoffscreen();