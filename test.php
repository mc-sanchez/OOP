<?php

    include_once("User.php");

    $usuario = new User;

    $usuario->setEmail('Juan');

    $usuario->setPassword('1234');

    $usuario->setDireccion('Digital House');

    $usuario->setTarjeta('Visa');


    echo $usuario->getEmail() . "<br>";

    echo $usuario->getPassword() . "<br>";

    echo $usuario->getDireccion() . "<br>";

    echo $usuario->getTarjeta() . "<br>";
    
?>