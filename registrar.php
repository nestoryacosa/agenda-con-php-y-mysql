<?php
    require("conexion.php");
    $conex = conectar();
    if(isset($_POST['registrar']) &&
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['telefono']) >= 1)
    {
        $id = null;
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];

        $sql = "INSERT INTO contacto VALUES('$id', '$nombre','$email', '$telefono')";
        $res = mysqli_query($conex,$sql);

        // echo $res ? "registro creado con éxito" : null;
        Header("location:index.php");
    }

?>
