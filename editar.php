<?php
include("conexion.php");
$id = $_GET['id'];
$con = conectar();
$sql = "SELECT * FROM contacto WHERE id = '$id'";
$resultado = mysqli_query($con, $sql);
$fila = mysqli_fetch_array($resultado);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editar contacto</title>
</head>
<body>
    <center>
    <div>
        <h1>Actualizar datos de contacto</h1>
        <form action="actualizar.php" method="post">
            <p><input type="hidden" name="id" value="<?= $fila['id']?>"></p>
            <p><input type="text" name="nombre" value="<?= $fila['nombre']?>"></p>
            <p><input type="email" name="email" value="<?= $fila['email']?>"></p>
            <p><input type="text" name="telefono" value="<?= $fila['telefono']?>"></p>
            <input type="submit" value="actualizar" name="actualizar">
        </form>
    </div>
    </center>
    
</body>
</html>