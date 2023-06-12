<?php
include("conexion.php");
$id = $_GET['id'];
// echo "Hola me enviaron $id";
$con = conectar();
$sql = "DELETE FROM contacto WHERE id = '$id'";
$res = mysqli_query($con, $sql);

Header("Location:index.php");

?>
