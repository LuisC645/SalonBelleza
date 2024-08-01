<?php

$db = mysqli_connect('localhost', 'root', '4613', 'appsalon');

if(!$db){
    echo 'Error en la conexión';
    exit;
}


