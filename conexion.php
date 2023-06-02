<?php

function conectar()
{
    $host = "localhost";
    $usr = "root";
    $pwd = "";

    $bd = "agenda";

    $con = mysqli_connect($host,$usr,$pwd,$bd) 
        or die("error de conexión".mysqli_connect_error());

    return $con;
}

?>