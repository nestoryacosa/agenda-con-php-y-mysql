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
    <div>
        <h1>Registro de contactos</h1>
    </div>
    <div>
        <table>
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


            <?php                
            // desplegar datos de cada fila de la relación contacto
            while($renglon = mysqli_fetch_assoc($resultado))  :?>
        
                <tr>
                    <td><?=$renglon["id"];?></td>
                    <td><?=$renglon["nombre"];?></td>
                    <td><?=$renglon["mail"];?></td>
                    <td><?=$renglon["telefono"];?></td>
                    <td class="editarUsr"><a href="editar.php"><button>Editar</button></a></td>
                    <td class="borrarUsr"><a href="eliminar.php"><button>Borrar</button></a></td>
                </tr>
            </tbody>

        <?php 
            endwhile;
            mysqli_close($con);
        ?>
            </tbody>
        </table>
    </div>
</body>
</html>


