<?php
require("conexion.php");
$con = conectar();
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $sql = "UPDATE contacto SET 
                nombre='$nombre', 
                email='$email',
                telefono='$telefono' 
            WHERE `id`='$id'";
    $resultado = mysqli_query($con,$sql);
    // if($resultado) echo "todo bien";
    Header("location:index.php");




?>
