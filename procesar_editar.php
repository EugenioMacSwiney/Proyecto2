<?php
include('db.php');
$ID=$_POST['txtID'];
$NOMBRE=$_POST['txtNombre'];
$USUARIO=$_POST['txtUsuario'];
$CONTRASEÑA=$_POST['txtContraseña'];

mysqli_query($conexion, "UPDATE `usuarios` SET `Nombre` = '$NOMBRE',
 `Usuario` = '$USUARIO', `Contraseña` = '$CONTRASEÑA' WHERE `ID` = '$ID'") or die ("error");

mysqli_close($conexion);
header("Location:mostrar.php");
?>