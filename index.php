<?php
    require "autoload.php";

    spl_autoload_register( function ($class) {
        $obj = new Autoload($class);
    });

   $sword = new \Hero\Arms\Sword();
   $sword->attack();
