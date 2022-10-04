<?php
require_once 'Produk/User.php';
require_once 'produk/Salam.php';

spl_autoload_register(function ($ClassName){
    require_once __DIR__. '/produk/' . $ClassName. 'php';
});