<?php
 include("conexion.php");
 $con = conectar();
 // echo $con ? "Conexión exitosa :D": null; 
 $sql = "SELECT * FROM contacto";
 $res = mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <center>
        <h1>Registro de contactos</h1>
        <form action="registrar.php" method="post">
            <p><input type="text" name="nombre" placeholder="Nombre"></p>
            <p><input type="email" name="email" placeholder="email"></p>
            <p><input type="text" name="telefono" placeholder="Teléfono"></p>
            <p><input type="submit" value="Registrar" name="registrar"></p> 
        </form>
       <br>
       <hr>

       <table>
        <h1>Lista de contactos</h1>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>e-mail</th>
                <th>Teléfono</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php while($fila = mysqli_fetch_array($resultado)) :?>
            <tr>
                <th><?= $fila['id']?></th>
                <th><?= $fila['nombre']?></th>
                <th><?= $fila['email']?></th>
                <th><?= $fila['telefono']?></th>
                <th><a href="editar.php?id= <?= $fila['id'] ?>"><button>Editar</button></a></th>
                <th><a href="eliminar.php?id= <?= $fila['id'] ?>"><button>Eliminar</button></a></th>
            </tr>
            <?php endwhile;?>
        </tbody>
       </table>
       
       
    </center>
</body>
</html>


