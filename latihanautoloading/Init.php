<?php
require_once 'produk\A.php';
require_once 'produk\B.php';
require_once 'produk\C.php';
require_once 'produk\User.php';

spl_autoload_register(function( $className) {
    require_once 'produk/' . $className . '.php';

});