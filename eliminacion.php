<?php
    $server = "localhost";
    $user = "root"; 
    $pass = "";
    $base = "usuarios";

    $conexion = new mysqli($server, $user, $pass, $base);

if ($conexion->connect_errno){
    dei("conexion a fallado". $conexion->connect_errno);
}
    else
    {
        echo "conectado a la base usuarios";
    }

$sql=$conexion->query("delete from usuarios where nombre = 'Andres'");

$sql=$conexion->query("select * from usuarios");
    
?>